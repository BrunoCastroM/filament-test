<?php

namespace App\Filament\App\Widgets;

use App\Models\Employee;
use Carbon\Carbon;
use Filament\Facades\Filament;
use Filament\Widgets\TableWidget as BaseWidget;
use Filament\Tables;
use Filament\Tables\Table;

class OldEmployeesTable extends BaseWidget
{
    protected static ?string $heading = 'Employees Created Over 42 Hours Ago';

    protected static ?int $sort = 2;

    protected int | string | array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                Employee::query()
                    // Filters for employees created more than 42 hours ago
                    ->whereBelongsTo(Filament::getTenant())
                    ->where('created_at', '<=', Carbon::now()->subHours(42))
            )
            ->defaultSort('created_at', 'desc')
            ->columns([
                Tables\Columns\TextColumn::make('first_name')->label('Nome'),
                Tables\Columns\TextColumn::make('last_name')->label('Sobrenome'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->label('Criado em'),
            ]);
    }
}
