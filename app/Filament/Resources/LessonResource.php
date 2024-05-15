<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LessonResource\Pages;
use App\Filament\Resources\LessonResource\RelationManagers;
use App\Models\Lesson;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Forms\Set;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LessonResource extends Resource
{
    protected static ?string $model = Lesson::class;

    protected static ?string $navigationIcon = 'heroicon-s-play-circle';

    protected static ?string $navigationLabel = 'Content Videos Lesson';

    protected static ?string $navigationGroup = 'E-Courses';

    protected static ?int $navigationSort = 4;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                Select::make('course_id')
                    ->label('Course')
                    ->relationship('course', 'name')
                    ->searchable()
                    ->required(),
                TextInput::make('name')
                    ->label('Title')
                    ->live('bounce')
                    ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state)))
                    ->placeholder('Enter lesson title')
                    ->required(),
                TextInput::make('slug')
                    ->label('Slug')
                    ->placeholder('Automatically generated')
                    ->readOnly()
                    ->required(),
                RichEditor::make('description')
                    ->label('Description')
                    ->required()
                    ->toolbarButtons([
                        'blockquote',
                        'bold',
                        'h2',
                        'h3',
                        'italic',
                        'link',
                        'redo',
                        'strike',
                        'underline',
                        'undo',
                    ])
                    ->placeholder('Enter your description'),
                    TextInput::make('position')
                        ->label('Position')
                        ->required()
                        ->numeric()
                        ->default(Lesson::all()->count() + 1)
                        ->readOnly(),
                    SpatieMediaLibraryFileUpload::make('video_lesson')
                        ->label('Video Lesson')
                        ->collection('video_lesson')
                        ->acceptedFileTypes(['video/mp4', 'video/ogg', 'video/webm', 'video/wav'])
                            ->validationMessages([
                                'acceptedFileTypes' => 'File must be an video',
                            ])
                            ->helperText('Format Video must be mp4, ogg, webm, wav')
                            ->hint('Max Size File 100 MB')
                            ->hintIcon('heroicon-o-information-circle')
                            ->hintColor('warning')
                            ->required(),
                    TextInput::make('duration')
                        ->label('Duration')
                        ->required()
                        ->numeric()
                        ->suffix('minutes'),
                    Toggle::make('published')
                        ->label('Published')
                        ->default('0')
                        ->inline()
                        ->onColor('success')
                        ->offColor('warning'),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('course.name')
                    ->label('Course')
                    ->searchable()
                    ->color('primary')
                    ->alignCenter()
                    ->badge(),
                TextColumn::make('name')
                    ->label('Title')
                    ->searchable()
                    ->alignCenter(),
                TextColumn::make('position')
                    ->label('Position')
                    ->searchable()
                    ->alignCenter(),
                TextColumn::make('created_at')
                    ->label('Created')
                    ->alignCenter()
                    ->sortable()
                    ->dateTime('d M Y'),
                    TextColumn::make('updated_at')
                    ->label('Updated At')
                    ->searchable()
                    ->since()
                    ->alignCenter()
                    ->sortable(),
                ToggleColumn::make('published')
                    ->label('Published')
                    ->alignCenter()
                    ->onColor('success')
                    ->offColor('warning'),

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
            'index' => Pages\ManageLessons::route('/'),
        ];
    }
}
