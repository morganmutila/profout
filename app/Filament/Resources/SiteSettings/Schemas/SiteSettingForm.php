<?php

namespace App\Filament\Resources\SiteSettings\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class SiteSettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('phone')
                    ->tel(),
                TextInput::make('phone_alt')
                    ->tel(),
                TextInput::make('map_location'),
                TextInput::make('email')
                    ->label('Email address')
                    ->email(),
                TextInput::make('contact_email')
                    ->email(),
                TextInput::make('hero_title'),
                Textarea::make('hero_description')
                    ->columnSpanFull(),
                Textarea::make('about_info')
                    ->columnSpanFull(),
                TextInput::make('address'),
                TextInput::make('company_profile_link'),
            ]);
    }
}
