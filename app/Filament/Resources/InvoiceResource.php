<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InvoiceResource\Pages;
use App\Filament\Resources\InvoiceResource\RelationManagers;
use App\Models\Course;
use App\Models\Invoice;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\DB;

class InvoiceResource extends Resource
{
    protected static ?string $model = Invoice::class;

    protected static ?string $navigationIcon = 'heroicon-o-credit-card';

    protected static ?string $navigationLabel = 'Invoices';

    protected static ?string $navigationGroup = 'Order Course';

    protected static ?int $navigationSort = 7;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('no_invoice')
                    ->label('No. Invoice')
                    ->searchable()
                    ->badge()
                    ->alignCenter()
                    ->color('primary')
                    ->sortable(),
                TextColumn::make('user.name')
                    ->label('Users Name')
                    ->alignCenter()
                    ->searchable()
                    ->sortable(),
                TextColumn::make('course.name')
                    ->label('Course Name')
                    ->alignCenter()
                    ->searchable()
                    ->sortable(),
                ImageColumn::make('bukti')
                    ->label('Bukti Transfer')
                    ->alignCenter()
                    ->width(100)
                    ->height(100)
                    ->url(function ($record) {
                        return $record->bukti;
                    }),
                TextColumn::make('created_at')
                    ->label('Created At')
                    ->alignCenter()
                    ->date('d M Y')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('updated_at')
                    ->label('Updated At')
                    ->alignCenter()
                    ->since()
                    ->searchable()
                    ->sortable(),
                SelectColumn::make('status')
                    ->label('Status')
                    ->options([
                        'pending' => 'Pending',
                        'paid' => 'Paid',
                        'failed' => 'Unpaid',
                    ])
                    ->afterStateUpdated(function ($record, $state) {
                        $id = $record->course_id;

                        if ($state == 'paid') {
                            DB::table('course_student')->insert([
                                'course_id' => $id,
                                'user_id' => $record->user_id,
                            ]);
                        } else {
                            DB::table('course_student')->where('course_id', $id)->where('user_id', $record->user_id)->delete();
                        }
                    })
                    ->alignCenter()
                    ->searchable()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
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
            'index' => Pages\ManageInvoices::route('/'),
        ];
    }
}
