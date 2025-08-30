<?php

namespace App\Filament\Resources\ClientEmails;

use BackedEnum;
use Filament\Tables\Table;
use Filament\Schemas\Schema;
use Filament\Resources\Resource;
use App\Models\ClientEmail;
use Filament\Support\Icons\Heroicon;
use App\Filament\Resources\ClientEmails\Pages\ViewClientEmail;
use App\Filament\Resources\ClientEmails\Pages\ListClientEmails;
use App\Filament\Resources\ClientEmails\Schemas\ClientEmailForm;
use App\Filament\Resources\ClientEmails\Tables\ClientEmailsTable;
use App\Filament\Resources\ClientEmails\Schemas\ClientEmailInfolist;

class ClientEmailResource extends Resource
{
    protected static ?string $model = ClientEmail::class;

    protected static ?string $recordTitleAttribute = 'subject';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::Envelope;

    protected static ?string $modelLabel = 'Client Emails';
    
    protected static string | \UnitEnum | null $navigationGroup = 'Content';

    public static function form(Schema $schema): Schema
    {
        return ClientEmailForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return ClientEmailInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ClientEmailsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListClientEmails::route('/'),
            'view' => ViewClientEmail::route('/{record}'),
        ];
    }
}
