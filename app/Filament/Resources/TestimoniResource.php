<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TestimoniResource\Pages;
use App\Filament\Resources\TestimoniResource\RelationManagers;
use App\Models\Testimoni;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TestimoniResource extends Resource
{
    protected static ?string $model = Testimoni::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-bottom-center-text';

    protected static ?string $navigationLabel = 'Testimoni';

    protected static ?string $navigationGroup = 'Setting';

    protected static ?int $navigationSort = 9;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        TextInput::make('name')
                            ->label('Name')
                            ->placeholder('Enter your name')
                            ->required(),
                        TextInput::make('daerah')
                            ->label('Location')
                            ->placeholder('Enter your address')
                            ->required(),
                        SpatieMediaLibraryFileUpload::make('image')
                            ->label('Image')
                            ->collection('testimoni')
                            ->image()
                            ->imageEditor()
                            ->hint('Max Size File 10 MB')
                            ->hintIcon('heroicon-o-information-circle')
                            ->hintColor('warning')
                            ->acceptedFileTypes(['image/png', 'image/jpg', 'image/jpeg'])
                            ->validationMessages([
                                'image' => 'File must be an image',
                                'maxSize' => 'Maximal File Size :maxSize',
                                'acceptedFileTypes' => 'File must be an image',
                            ])
                            ->required(),
                        RichEditor::make('testimoni')
                            ->label('Testimoni')
                            ->toolbarButtons([
                                'blockquote',
                                'bold',
                                'italic',
                                'redo',
                                'strike',
                                'undo',
                            ])
                            ->required(),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Name')
                    ->alignCenter()
                    ->searchable()
                    ->sortable(),
                TextColumn::make('daerah')
                    ->label('Location')
                    ->alignCenter()
                    ->searchable()
                    ->sortable(),
                TextColumn::make('testimoni')
                    ->label('Testimoni')
                    ->html()
                    ->wrap()
                    ->alignCenter()
                    ->limit(100)
                    ->sortable(),
                SpatieMediaLibraryImageColumn::make('image')
                ->alignCenter()
                ->collection('testimoni')
                ->label('Image')
                ->size('50px'),
                TextColumn::make('created_at')
                    ->label('Date')
                    ->alignCenter()
                    ->date('d F Y')
                    ->sortable(),
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
            'index' => Pages\ManageTestimonis::route('/'),
        ];
    }
}
