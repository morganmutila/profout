<?php

namespace App\Filament\Resources\Certifications\Pages;

use Filament\Actions\DeleteAction;
use App\Filament\Resources\Certifications\CertificationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCertification extends EditRecord
{
    protected static string $resource = CertificationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
