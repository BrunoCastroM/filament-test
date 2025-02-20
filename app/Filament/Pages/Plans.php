<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class Plans extends Page
{
    
    protected static ?string $navigationIcon = 'heroicon-o-credit-card';
    protected static ?string $navigationLabel = 'Plans';
    protected static ?string $navigationGroup = 'User Management';
    protected static ?int $navigationSort = 5;
    protected static string $view = 'filament.pages.plans';
    
}
