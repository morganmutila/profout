<?php

namespace App\Filament\Resources\Certifications\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;

class CertificationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                ->required(),
                FileUpload::make('certificate_file')
                    ->image()->required(),
                TextInput::make('issuer'),
                DatePicker::make('issued_at'),                
                    Textarea::make('description')
                    ->columnSpan('full'),
            ]);
    }
}
