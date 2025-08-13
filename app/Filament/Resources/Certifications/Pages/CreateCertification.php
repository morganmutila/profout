<?php

namespace App\Filament\Resources\Certifications\Pages;

use App\Filament\Resources\Certifications\CertificationResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCertification extends CreateRecord
{
    protected static string $resource = CertificationResource::class;

    protected function getRedirectUrl(): string
    {
        // Redirect to the index (list) page after creation
        return $this->getResource()::getUrl('index');
    }
}       
          