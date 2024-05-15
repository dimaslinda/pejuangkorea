<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Illuminate\Support\Str;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('student.profil', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $user = User::find($id);

        $customMessages = [
            'required' => 'This field is required.',
            'string' => 'This field must be a string.',
            'max' => 'The :attribute may not be greater than :max characters.',
            'mimes' => 'The :attribute must be a file of type: jpeg, png, jpg, gif, svg.',
            'image' => 'The :attribute must be an image.',
            'confirmed' => 'The password confirmation does not match.',
            'min' => 'The :attribute must be at least :min characters.',
        ];

        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $user->id],
            'password' => ['nullable', 'string', 'min:8', 'confirmed'],
            'profile' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'no_hp' => ['nullable', 'string', 'max:255'],
        ], $customMessages);
        $input = $request->all();

        // if($request->has('profile')) {

        //     $namafilelama = $user->profile;
        //     $namafilebaru = substr($namafilelama, -20);
        //     $file = Storage::exists('images/user/'.$namafilebaru);

        //     if(!empty($file)) {

        //         $path = 'images/user/';

        //         Storage::delete($path . $namafilebaru);

        //         $random = Str::random(16);

        //         $namebaru = $random . '.png';

        //         $input['file'] = Storage::putFileAs('/images/user', $request->file('profile'), $namebaru);

        //         $namefile = 'http://127.0.0.1:8000/storage/images/user/' . $namebaru;
        //     } else {
        //         $random = Str::random(16);

        //         $namebaru = $random . '.png';

        //         $input['file'] = Storage::putFileAs('/images/user', $request->file('profile'), $namebaru);

        //         $namefile = 'http://127.0.0.1:8000/storage/images/user/' . $namebaru;

        //     }

        // } else {
        //     $namefile = $user->profile;
        // }

        if($request->has('profile')) {
            $oldfile = $user->profile;
            $namafilebaru = substr($oldfile, -20);
            if(isset($oldfile)) {
                Storage::disk('public')->delete('images/user/'.$namafilebaru);
            }
            $file = $request->file('profile');
            $random = Str::random(16);
            $namefile = 'http://127.0.0.1:8000/storage/images/user/'. $random . '.' . $file->getClientOriginalExtension();
            $newnamefile = $random . '.' . $file->getClientOriginalExtension();
            $filePath = Storage::putFileAs('/public/images/user', $file, $newnamefile);
            $validated['profile'] = $filePath;
        } else {
            $namefile = $user->profile;
        }
        $dataupdate = [
            'name' => $data['name'],
            'email' => $data['email'],
            'profile' => $namefile,
            'no_hp' => $data['no_hp'],
        ];
        // dd($dataupdate);
        User::where('id', $id)->update($dataupdate);
        return Redirect::route('profile.edit')->with('status', 'Profile updated.');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
