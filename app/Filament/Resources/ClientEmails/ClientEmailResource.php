<?php

namespace App\Filament\Resources\ClientEmails;

use BackedEnum;
use Filament\Tables\Table;
use Filament\Schemas\Schema;
use Filament\Resources\Resource;
use App\Models\ClientContactForm;
use Filament\Support\Icons\Heroicon;
use App\Filament\Resources\ClientEmails\Pages\EditClientEmail;
use App\Filament\Resources\ClientEmails\Pages\ListClientEmails;
use App\Filament\Resources\ClientEmails\Pages\CreateClientEmail;
use App\Filament\Resources\ClientEmails\Schemas\ClientEmailForm;
use App\Filament\Resources\ClientEmails\Tables\ClientEmailsTable;

class ClientEmailResource extends Resource
{
    protected static ?string $model = ClientContactForm::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::Envelope;
    
    protected static string | \UnitEnum | null $navigationGroup = 'Content';



    protected static ?string $recordTitleAttribute = 'subject';

    public static function form(Schema $schema): Schema
    {
        return ClientEmailForm::configure($schema);
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
            'create' => CreateClientEmail::route('/create'),
            'edit' => EditClientEmail::route('/{record}/edit'),
        ];
    }
}
