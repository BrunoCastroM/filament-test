<?php

namespace App\Filament\Widgets;

use App\Models\Department;
use App\Models\Employee;
use Filament\Forms;
use Filament\Forms\Components\Placeholder;
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
            ->query(Department::query()->doesntHave('employees'))
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
                            ->options(
                                Employee::query()
                                    ->get()
                                    ->pluck('full_name', 'id')
                            )
                            ->searchable()
                            ->preload()
                            ->reactive(),
                        // Placeholder to display selected employees
                        Placeholder::make('selected_employees_preview')
                            ->label('Selected Employees Preview')
                            ->content(function (callable $get) {
                                $ids = $get('employee_ids') ?: [];
                                if (empty($ids)) {
                                    return 'No employees selected.';
                                }
                                $employees = Employee::query()->whereIn('id', $ids)->get();

                                $html = '<div class="overflow-x-auto border border-gray-200 rounded-lg">';
                                $html .= '<table class="w-full divide-y divide-gray-200">';
                                $html .= '<thead class="bg-gray-50">';
                                $html .= '<tr>';
                                $html .= '<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-black-900 uppercase tracking-wider">Full Name</th>';
                                $html .= '<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-black-900 uppercase tracking-wider">Country</th>';
                                $html .= '<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-black-900 uppercase tracking-wider">Address</th>';
                                // $html .= '<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-black-900 uppercase tracking-wider">Department</th>';
                                $html .= '</tr>';
                                $html .= '</thead>';
                                $html .= '<tbody class="bg-white divide-y divide-gray-200">';
                                foreach ($employees as $employee) {
                                    $html .= '<tr>';
                                    $html .= '<td class="px-6 py-4 whitespace-nowrap">' . $employee->full_name . '</td>';
                                    $html .= '<td class="px-6 py-4 whitespace-nowrap">' . optional($employee->country)->name . '</td>';
                                    $html .= '<td class="px-6 py-4 whitespace-nowrap">' . $employee->address . '</td>';
                                    // $html .= '<td class="px-6 py-4 whitespace-nowrap">' . optional($employee->department)->name . '</td>';
                                    $html .= '</tr>';
                                }
                                $html .= '</tbody></table></div>';

                                return new \Illuminate\Support\HtmlString($html);
                            })
                            ->columnSpan('full'),
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
