<?php

namespace App\Filament\Resources\ClientEmails\Pages;

use App\Filament\Resources\ClientEmails\ClientEmailResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListClientEmails extends ListRecords
{
    protected static string $resource = ClientEmailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
