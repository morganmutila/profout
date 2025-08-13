<?php

namespace App\Filament\Resources\SiteSettings;

use App\Filament\Resources\SiteSettings\Tables\Actions\EditAction;
use App\Filament\Resources\SiteSettings\Tables\Actions\DeleteAction;
use App\Filament\Resources\SiteSettingResource\Pages\ListSiteSettings;
use App\Filament\Resources\SiteSettingResource\Pages\EditSiteSetting;
use App\Filament\Resources\SiteSettingResource\Pages;
use App\Models\SiteSetting;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use BackedEnum;

class SiteSettingResource extends Resource
{
    protected static ?string $model = SiteSetting::class;
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-wrench';

    public static function canCreate(): bool
    {
        return false;
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->limit(1);
    }

    public static function  form(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('phone')
                    ->tel(),
            TextInput::make('phone_alt')
                    ->tel(),
            TextInput::make('email')
                    ->email(),
            TextInput::make('contact_email')
                    ->email(),
            TextInput::make('map_location')
                    ->limit(30),
            Textarea::make('hero_description')
                    ->columnSpanFull(),
            Textarea::make('about_info')
                    ->columnSpanFull(),
            TextInput::make('hero_title'),
            TextInput::make('address'),
            TextInput::make('company_profile_link')
                    ->url()
                    ->label('Company Profile Link')
            ]);
    }


public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('phone'),
            TextColumn::make('phone_alt'),
            TextColumn::make('email'),
            TextColumn::make('contact_email'),
            TextColumn::make('map_location'),
            TextColumn::make('hero_title'),
            TextColumn::make('address'),
            TextColumn::make('company_profile_link'),
            TextColumn::make('created_at')
                ->dateTime()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                ->dateTime()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListSiteSettings::route('/'),
            'edit' => EditSiteSetting::route('/{record}/edit'),
        ];
    }
}
