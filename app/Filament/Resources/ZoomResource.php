<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ZoomResource\Pages;
use App\Filament\Resources\ZoomResource\RelationManagers;
use App\Models\Mentor;
use App\Models\Zoom;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Forms\Set;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ZoomResource extends Resource
{
    protected static ?string $model = Zoom::class;

    protected static ?string $navigationIcon = 'heroicon-c-information-circle';

    protected static ?string $navigationLabel = 'Zoom Information';

    protected static ?string $navigationGroup = 'Zoom Class';

    protected static ?int $navigationSort = 5;

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
                    ->label('Zoom Name')
                    ->live('bounce')
                    ->placeholder('Enter your zoom name')
                    ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state)))
                    ->required(),
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
                TextInput::make('category')
                    ->label('Category')
                    ->default('zoom')
                    ->readOnly()
                    ->required(),
                SpatieMediaLibraryFileUpload::make('image')
                    ->label('Thumbnail Zoom Course')
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
                    ->collection('zoom')
                    ->required(),
                RichEditor::make('description')
                    ->label('Description')
                    ->placeholder('Enter your description')
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
                    ->required(),
                TextInput::make('duration')
                    ->label('Duration')
                    ->numeric()
                    ->suffix('Hours')
                    ->placeholder('Enter your duration in hours')
                    ->required(),
                Select::make('level')
                    ->label('Level')
                    ->options([
                        'beginner' => 'Beginner',
                        'intermediate' => 'Intermediate',
                        'advanced' => 'Advanced',
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
                    ->label('Zoom Name')
                    ->searchable()
                    ->alignCenter()
                    ->sortable(),
                TextColumn::make('category')
                    ->label('Category')
                    ->searchable()
                    ->badge()
                    ->color('success')
                    ->alignCenter()
                    ->sortable(),
                TextColumn::make('mentor.name')
                    ->label('Mentor Name')
                    ->searchable()
                    ->alignCenter()
                    ->sortable(),
                TextColumn::make('price')
                    ->label('Price')
                    ->money('IDR')
                    ->color('success')
                    ->alignCenter()
                    ->searchable()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->label('Created At')
                    ->alignCenter()
                    ->dateTime('d M Y')
                    ->sortable(),
                TextColumn::make('updated_at')
                    ->label('Updated At')
                    ->alignCenter()
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
            'index' => Pages\ManageZooms::route('/'),
        ];
    }
}
