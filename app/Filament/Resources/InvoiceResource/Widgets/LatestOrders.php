<?php

namespace App\Filament\Resources\InvoiceResource\Widgets;

use App\Models\Invoice;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class LatestOrders extends BaseWidget
{

    protected static ?string $heading = 'Invoice List';
    protected int | string | array $columnSpan = [
        'xl' => 2,
    ];
    public function table(Table $table): Table
    {
        return $table
            ->query(
                fn () => Invoice::query()
                    ->latest()
                    ->limit(5)
            )
            ->columns([
                TextColumn::make('no_invoice')
                ->alignCenter()
                ->searchable()
                ->sortable(),
                TextColumn::make('course.name')
                ->alignCenter()
                ->searchable()
                ->sortable(),
                TextColumn::make('price')
                ->alignCenter()
                ->searchable()
                ->sortable(),
                ImageColumn::make('bukti')
                ->width(100)
                ->height(100)
                ->alignCenter(),
                TextColumn::make('status')
                ->badge(function (Invoice $record) {
                    return $record->status;
                })
                ->color(function (Invoice $record) {
                    return $record->status === 'paid' ? 'success' : 'warning';
                })
                ->alignCenter()
                ->searchable()
                ->sortable(),
                TextColumn::make('created_at')
                ->alignCenter()
                ->searchable()
                ->since()
                ->sortable(),
            ]);
    }
}
