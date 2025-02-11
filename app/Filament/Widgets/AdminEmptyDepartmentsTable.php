<?php

namespace App\Filament\Widgets;

use App\Models\Department;
use App\Models\Employee;
use Filament\Forms;
use Filament\Widgets\TableWidget as BaseWidget;
use Filament\Tables;
use Filament\Tables\Table;

class AdminEmptyDepartmentsTable extends BaseWidget
{
    protected static ?string $heading = 'Departments without Employees';
    protected static ?int $sort = 0;
    protected int | string | array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                Department::query()->doesntHave('employees')
            )
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Department Name'),
            ])
            ->actions([
                Tables\Actions\Action::make('attachEmployees')
                    ->label('Attach Employees')
                    ->icon('heroicon-o-link')
                    ->modalHeading('Attach Employees to Department')
                    ->modalSubmitActionLabel('Attach')
                    ->form([
                        Forms\Components\Select::make('employee_ids')
                            ->label('Select Employees')
                            ->multiple()
                            ->options(Employee::query()
                                ->get()
                                ->pluck('full_name', 'id'))
                            ->searchable()
                            ->preload(),
                    ])
                    ->action(function (Department $record, array $data): void {
                        Employee::query()
                            ->whereIn('id', $data['employee_ids'])
                            ->update(['department_id' => $record->id]);
                    }),
            ])
            ->paginated(false);
    }
}
