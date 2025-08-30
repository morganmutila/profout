<?php

namespace App\Filament\Resources\ClientEmails\Pages;

use App\Filament\Resources\ClientEmails\ClientEmailResource;
use Filament\Resources\Pages\ViewRecord;

class ViewClientEmail extends ViewRecord
{
    protected static string $resource = ClientEmailResource::class;

    protected function getHeaderActions(): array
    {
        return [];
    }
}
