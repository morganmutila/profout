<?php

namespace App\Filament\Resources\ClientEmails\Pages;

use App\Filament\Resources\ClientEmails\ClientEmailResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditClientEmail extends EditRecord
{
    protected static string $resource = ClientEmailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
