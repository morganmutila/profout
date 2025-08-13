<?php

namespace App\Filament\Resources\Certifications\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class CertificationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('issuer'),
                DatePicker::make('issued_at'),
                Textarea::make('description')
                    ->columnSpanFull(),
                TextInput::make('certificate_file'),
            ]);
    }
}
