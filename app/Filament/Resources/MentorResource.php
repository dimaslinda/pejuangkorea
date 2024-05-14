<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MentorResource\Pages;
use App\Filament\Resources\MentorResource\RelationManagers;
use App\Models\Mentor;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Grid;
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

class MentorResource extends Resource
{
    protected static ?string $model = Mentor::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    protected static ?string $navigationLabel = 'Mentor Course';

    protected static ?string $navigationGroup = 'E-Courses';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        Grid::make(1)
                            ->schema([
                                SpatieMediaLibraryFileUpload::make('image')
                                    ->label('Profile Picture')
                                    ->image()
                                    ->imageEditor()
                                    ->imageEditorAspectRatios(['square', '1:1', '4:3', '16:9'])
                                    ->required()
                                    ->maxSize(10024)
                                    ->validationMessages([
                                        'maxSize' => 'Maximal File Size :maxSize',
                                        'image' => 'File must be an image',
                                    ])
                                    ->hint('Max Size File 10 MB')
                                    ->hintIcon('heroicon-o-information-circle')
                                    ->hintColor('warning')
                                    ->acceptedFileTypes(['image/png', 'image/jpg', 'image/jpeg'])
                                    ->collection('mentors'),
                                TextInput::make('name')
                                    ->label('Full Name')
                                    ->placeholder('Enter your full name')
                                    ->required(),
                                TextInput::make('speciality')
                                    ->placeholder('Ex: Web Developer')
                                    ->label('Speciality')
                                    ->required(),
                                TextInput::make('link_social')
                                    ->label('Link Instagram')
                                    ->activeUrl()
                                    ->placeholder('Enter your link instagram')
                                    ->hintIcon('heroicon-o-information-circle')
                                    ->hint('Ex: https://www.instagram.com/username/')
                                    ->hintColor('warning')
                                    ->url()
                                    ->suffixIcon('heroicon-m-globe-alt')
                                    ->required(),
                                RichEditor::make('description')
                                    ->label('Description')
                                    ->placeholder('Enter your description')
                                    ->toolbarButtons([
                                        'blockquote',
                                        'bold',
                                        'codeBlock',
                                        'h2',
                                        'h3',
                                        'italic',
                                        'link',
                                        'orderedList',
                                        'redo',
                                        'strike',
                                        'underline',
                                        'undo',
                                    ])
                                    ->required(),
                            ]),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                SpatieMediaLibraryImageColumn::make('image')
                    ->label('Profile Picture')
                    ->rounded()
                    ->alignCenter()
                    ->width(100)
                    ->height(100)
                    ->collection('mentors'),
                TextColumn::make('name')
                    ->label('Full Name')
                    ->searchable()
                    ->alignCenter()
                    ->sortable(),
                TextColumn::make('speciality')
                    ->label('Speciality')
                    ->searchable()
                    ->alignCenter()
                    ->sortable(),
                TextColumn::make('link_social')
                    ->label('Link Instagram')
                    ->searchable()
                    ->alignCenter()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->label('Created At')
                    ->dateTime('d M Y')
                    ->alignCenter()
                    ->searchable()
                    ->sortable(),
                TextColumn::make('updated_at')
                    ->label('Updated At')
                    ->since()
                    ->alignCenter()
                    ->searchable()
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
            'index' => Pages\ManageMentors::route('/'),
        ];
    }
}
