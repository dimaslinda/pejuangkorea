<?php

namespace App\Http\Controllers;

use App\Models\SocialAccount;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {
        try{
            $user = Socialite::driver($provider)->user();
        } catch (\Exception $e) {
            return redirect()->route('login');
        }

        $authUser = $this->findOrCreateUser($user, $provider);

        Auth::login($authUser, true);

        return redirect('/');
    }

    public function findOrCreateUser($socialUser, $provider)
    {
        $socialAccount = SocialAccount::where('provider_id', $socialUser->getId())
                            ->where('provider_name', $provider)
                            ->first();

        if ($socialAccount) {
            return $socialAccount->user;
        } else {
            $user = User::where('email', $socialUser->getEmail())->first();
            if (!$user) {
                $user = User::create([
                    'name' => $socialUser->getName(),
                    'email' => $socialUser->getEmail(),
                    'password' => bcrypt(rand(1000,9999)),
                    'role' => 'user',
                    'no_hp' => '',
                    'profile' => $socialUser->getAvatar(),
                    'email_verified_at' => now(),
                    'remember_token' => '',
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                $user->socialAccounts()->create([
                    'provider_id' => $socialUser->getId(),
                    'provider_name' => $provider
                ]);
            }
           if($user->email_verified_at == "") {

            $updatedata = [
                'email_veified_at' => now()
            ];

            $user->update($updatedata);
           }
            return $user;
        }
    }
}
