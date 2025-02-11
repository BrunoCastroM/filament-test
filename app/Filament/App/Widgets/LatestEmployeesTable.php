<?php

namespace App\Filament\App\Widgets;

use App\Models\Employee;
use Filament\Facades\Filament;
use Filament\Widgets\TableWidget as BaseWidget;
use Filament\Tables;
use Filament\Tables\Table;

class LatestEmployeesTable extends BaseWidget
{
    protected static ?string $heading = 'Recently Added Employees';
    protected static ?int $sort = 2;
    protected int | string | array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                Employee::query()
                    ->whereBelongsTo(Filament::getTenant())
                    ->orderBy('created_at', 'desc')
                    ->limit(10)
            )
            ->columns([
                Tables\Columns\TextColumn::make('first_name')->label('Name'),
                Tables\Columns\TextColumn::make('last_name')->label('Last name'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->label('Created at'),
            ])
            ->paginated(false);
    }
}
