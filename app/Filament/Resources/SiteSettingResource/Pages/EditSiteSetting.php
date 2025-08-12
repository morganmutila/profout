<?php

namespace App\Filament\Resources\SiteSettingResource\Pages;

use App\Filament\Resources\SiteSettingResource;
use App\Models\SiteSetting;
use Filament\Resources\Pages\EditRecord;

class EditSiteSetting extends EditRecord
{
    protected static string $resource = SiteSettingResource::class;

    public function mount($record = null): void
    {
        $siteSetting = SiteSetting::firstOrCreate([]);
        $this->record = $siteSetting->getKey();

        parent::mount($this->record);
    }
}
