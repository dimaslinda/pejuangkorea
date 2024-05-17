<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MaterizoomResource\Pages;
use App\Filament\Resources\MaterizoomResource\RelationManagers;
use App\Models\Materizoom;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Forms\Set;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MaterizoomResource extends Resource
{
    protected static ?string $model = Materizoom::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';

    protected static ?string $navigationLabel = 'Teaching Material';

    protected static ?string $navigationGroup = 'Zoom Class';

    protected static ?int $navigationSort = 6;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        Select::make('zoom_id')
                                    ->label('Zoom Name')
                                    ->relationship('zoom', 'name')
                                    ->searchable()
                                    ->required(),
                        TextInput::make('name')
                                    ->label('Teaching Material Name')
                                    ->live('bounce')
                                    ->placeholder('Enter your zoom name')
                                    ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state)))
                                    ->required(),
                        TextInput::make('slug')
                                    ->label('Slug')
                                    ->placeholder('Automatically generated')
                                    ->readOnly()
                                    ->required(),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('zoom.name')
                    ->label('Zoom Name')
                    ->alignCenter()
                    ->searchable(),
                TextColumn::make('name')
                    ->label('Teaching Material Name')
                    ->alignCenter()
                    ->searchable(),
                TextColumn::make('slug')
                    ->label('Slug')
                    ->alignCenter()
                    ->searchable(),
            ])
            ->filters([
                //
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
            'index' => Pages\ManageMaterizooms::route('/'),
        ];
    }
}
