<?php

namespace App\Filament\Resources\Certifications\Pages;

use Filament\Actions\CreateAction;
use App\Filament\Resources\Certifications\CertificationResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCertifications extends ListRecords
{
    protected static string $resource = CertificationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
