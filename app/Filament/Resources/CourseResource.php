<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CourseResource\Pages;
use App\Filament\Resources\CourseResource\RelationManagers;
use App\Models\Category;
use App\Models\Course;
use App\Models\Mentor;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\ToggleButtons;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Forms\Set;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CourseResource extends Resource
{
    protected static ?string $model = Course::class;

    protected static ?string $navigationIcon = 'heroicon-c-information-circle';

    protected static ?string $navigationLabel = 'E-Courses Information';

    protected static ?string $navigationGroup = 'E-Courses';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        Select::make('mentor_id')
                            ->label('Mentor Name')
                            ->relationship('mentor', 'name')
                            ->options(Mentor::all()->pluck('name', 'id'))
                            ->required(),
                        TextInput::make('name')
                            ->label('Course Name')
                            ->required()
                            ->live()
                            ->placeholder('Enter your course name')
                            ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state)))
                            ->maxLength(255),
                        TextInput::make('slug')
                            ->label('Slug')
                            ->placeholder('Automatically generated')
                            ->readOnly()
                            ->required(),
                        TextInput::make('price')
                            ->label('Price')
                            ->numeric()
                            ->prefix('Rp. ')
                            ->minValue(1)
                            ->placeholder('Enter your price')
                            ->required(),
                        TextInput::make('duration')
                            ->label('Duration')
                            ->numeric()
                            ->minValue(1)
                            ->placeholder('Enter your duration in hours')
                            ->required(),
                        Select::make('category_id')
                            ->label('Category')
                            ->relationship('category', 'name')
                            ->options(Category::all()->pluck('name', 'id'))
                            ->required(),
                        Select::make('level')
                            ->label('Level')
                            ->options([
                                'beginner' => 'Beginner',
                                'intermediate' => 'Intermediate',
                                'advanced' => 'Advanced',
                            ])
                            ->required(),
                        SpatieMediaLibraryFileUpload::make('thumbnail')
                            ->label('Thumbnail_course')
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
                            ->collection('thumbnail_course')
                            ->required(),
                        SpatieMediaLibraryFileUpload::make('video_thumbnail')
                            ->label('Video Thumbnail')
                            ->collection('videos_thumbnail')
                            ->acceptedFileTypes(['video/mp4', 'video/ogg', 'video/webm', 'video/wav'])
                            ->validationMessages([
                                'acceptedFileTypes' => 'File must be an video',
                            ])
                            ->helperText('Format Video must be mp4, ogg, webm, wav')
                            ->hint('Max Size File 100 MB')
                            ->hintIcon('heroicon-o-information-circle')
                            ->hintColor('warning')
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
                            Toggle::make('published')
                                ->label('Published')
                                ->default('0')
                                ->inline(),

                        ])
                    ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Course Name')
                    ->searchable()
                    ->color('primary')
                    ->alignCenter()
                    ->sortable(),
                TextColumn::make('mentor.name')
                    ->label('Mentor Name')
                    ->searchable()
                    ->alignCenter()
                    ->sortable(),
                TextColumn::make('category.name')
                    ->label('Category')
                    ->searchable()
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Topik' => 'success',
                        'Epstopik' => 'warning',
                    })
                    ->alignCenter()
                    ->sortable(),
                TextColumn::make('price')
                    ->label('Price')
                    ->searchable()
                    ->money('IDR')
                    ->color('success')
                    ->alignCenter()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->label('Created At')
                    ->searchable()
                    ->dateTime('d M Y')
                    ->alignCenter()
                    ->sortable(),
                TextColumn::make('updated_at')
                    ->label('Updated At')
                    ->searchable()
                    ->since()
                    ->alignCenter()
                    ->sortable(),
                SpatieMediaLibraryImageColumn::make('thumbnail')
                    ->label('Thumbnail')
                    ->width(100)
                    ->height(100)
                    ->collection('thumbnail_course')
                    ->alignCenter(),
                ToggleColumn::make('published')
                    ->label('Published')
                    ->alignCenter(),
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
                SelectFilter::make('published')
                    ->label('Published')
                    ->options([
                        '1' => 'Published',
                        '0' => 'Draft',
                    ])
                    ->multiple()
                    ->default('1')
                    ->searchable()
                    ->placeholder('All'),
                SelectFilter::make('category_id')
                    ->label('Category')
                    ->multiple()
                    ->relationship('category', 'name')
                    ->searchable()
                    ->placeholder('All'),
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
            'index' => Pages\ManageCourses::route('/'),
        ];
    }
}
