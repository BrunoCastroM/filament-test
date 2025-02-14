<?php

namespace App\Filament\Widgets;

use App\Models\Department;
use App\Models\Employee;
use Webbingbrasil\FilamentMaps\Marker;
use Webbingbrasil\FilamentMaps\Actions\ZoomAction;
use Webbingbrasil\FilamentMaps\Actions\CenterMapAction;
use Webbingbrasil\FilamentMaps\Widgets\MapWidget;
use Webbingbrasil\FilamentMaps\Actions\Action;
use Filament\Forms\Components\Select;
use Illuminate\Contracts\View\View;

class AdminMapWidget extends MapWidget
{
    protected int|string|array $columnSpan = 'full';

    protected bool $hasBorder = true;

    public string $filter = 'both';

    protected $queryString = ['filter'];

    public function setUp(): void
    {
        parent::setUp();

        $this->mapMarkers($this->getMarkers());
    }


    public function getMarkers(): array
    {
        $markers = [];

        if ($this->filter === 'both' || $this->filter === 'departments') {
            $departments = Department::query()
                ->whereNotNull('latitude')
                ->whereNotNull('longitude')
                ->get();

            foreach ($departments as $dept) {
                $markers[] = Marker::make("department-{$dept->id}")
                    ->lat($dept->latitude)
                    ->lng($dept->longitude)
                    ->popup("Department: {$dept->name}");
            }
        }

        if ($this->filter === 'both' || $this->filter === 'employees') {
            $employees = Employee::query()
                ->whereNotNull('latitude')
                ->whereNotNull('longitude')
                ->get();

            foreach ($employees as $emp) {
                $fullName = "{$emp->first_name} {$emp->last_name}";
                $markers[] = Marker::make("employee-{$emp->id}")
                    ->lat($emp->latitude)
                    ->lng($emp->longitude)
                    ->popup("Employee: {$fullName}");
            }
        }

        return $markers;
    }

    public function getActions(): array
    {
        return [
            ZoomAction::make()->zoom(1),
            CenterMapAction::make()->centerTo([51.505, -0.09])->zoom(5),
            Action::make('filter')
                ->icon('heroicon-o-funnel')
                ->label('Filter')
                ->form([
                    Select::make('filter')
                        ->label('Select the type')
                        ->options([
                            'both'        => 'Both',
                            'employees'   => 'Employees',
                            'departments' => 'Departments',
                        ])
                        ->default($this->filter)
                        ->required(),
                ])
                ->action(function (array $data): void {
                    $this->filter = $data['filter'];
                    $this->configureMarkers();
                }),
        ];
    }
}
