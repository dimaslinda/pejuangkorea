<?php

namespace App\Filament\Resources\InvoiceResource\Widgets;

use App\Models\Invoice;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Pending', Invoice::where('status', 'pending')->count()),
            Stat::make('Paid', Invoice::where('status', 'paid')->count()),
            Stat::make('Failed', Invoice::where('status', 'failed')->count()),
        ];
    }
}
