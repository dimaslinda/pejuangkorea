<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\Page;
use Filament\Resources\Pages\CreateRecord;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-m-user-circle';

    protected static ?string $navigationLabel = 'Users Management';

    protected static ?string $navigationGroup = 'Setting';

    protected static ?int $navigationSort = 5;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        TextInput::make('name')
                    ->label('Full Name')
                    ->placeholder('Enter your full name')
                    ->required(),
                TextInput::make('email')
                    ->label('Email')
                    ->placeholder('Enter your email')
                    ->unique('users', 'email', fn (?User $record) => $record)
                    ->validationMessages([
                        'unique' => 'The email has already been taken.',
                    ])
                    ->email()
                    ->required(),
                TextInput::make('no_hp')
                    ->label('Phone Number')
                    ->placeholder('Enter your phone number')
                    ->numeric()
                    ->tel(),
                Select::make('role')
                    ->label('Role')
                    ->options([
                        'admin' => 'admin',
                        'user' => 'user',
                    ])
                    ->required(),
                TextInput::make('password')
                    ->placeholder('Enter your password')
                    ->label('Password')
                    ->minLength(8)
                    ->hint('Password must be at least 8 characters')
                    ->hintIcon('heroicon-o-information-circle')
                    ->hintColor('warning')
                    ->validationAttribute('password')
                    ->validationMessages([
                        'minLength' => 'Password must be at least 8 characters',
                        'confirmed' => 'Password does not match',
                    ])
                    ->revealable()
                    ->password()
                    ->confirmed()
                    ->dehydrateStateUsing(fn ($state) => bcrypt($state))
                    ->dehydrated(fn ($state) => filled($state))
                    ->required(fn (Page $livewire): bool => $livewire instanceof CreateRecord),
                TextInput::make('password_confirmation')
                    ->placeholder('Enter your password again')
                    ->label('Confirm Password')
                    ->minLength(8)
                    ->revealable()
                    ->password()
                    ->required()
                    ]),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Full Name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('email')
                    ->label('Email')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('no_hp')
                    ->label('Phone Number')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('role')
                    ->label('Role')
                    ->badge()
                    ->searchable()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->label('Created At')
                    ->searchable()
                    ->dateTime('d M Y')
                    ->sortable(),
                TextColumn::make('updated_at')
                    ->label('Updated At')
                    ->searchable()
                    ->dateTime()
                    ->since()
                    ->sortable(),
            ])
            ->filters([
                Filter::make('created_at')
                    ->form([
                        Forms\Components\DatePicker::make('created_from'),
                        Forms\Components\DatePicker::make('created_until'),
                    ])
                    ->indicateUsing(function (array $data): array {
                        $indicators = [];

                        if ($data['created_from'] && $data['created_until']) {
                            $indicators[] = 'Created between ' . $data['created_from'] . ' and ' . $data['created_until'];
                        }

                        return $indicators;
                    })
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
                        ->when(
                            $data['created_from'],
                            fn (Builder $query, $date): Builder => $query->whereDate('created_at', '>=', $date),
                        )
                        ->when(
                            $data['created_until'],
                            fn (Builder $query, $date): Builder => $query->whereDate('created_at', '<=', $date),
                        );
                    }),
                SelectFilter::make('role')
                    ->label('Role')
                    ->multiple()
                    ->options([
                        'admin' => 'Admin',
                        'user' => 'User',
                    ]),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageUsers::route('/'),
        ];
    }
}
