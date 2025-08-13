<?php

namespace App\Filament\Resources\SiteSettings\Pages;

use Filament\Actions\CreateAction;
use App\Filament\Resources\SiteSettings\SiteSettingResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSiteSettings extends ListRecords
{
    protected static string $resource = SiteSettingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
