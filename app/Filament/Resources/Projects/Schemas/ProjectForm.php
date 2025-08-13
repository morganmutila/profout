<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                Textarea::make('description')
                    ->columnSpanFull(),
                TextInput::make('category'),
                DatePicker::make('start_date'),
                DatePicker::make('end_date'),
                FileUpload::make('featured_image')
                    ->image(),
                Textarea::make('gallery')
                    ->columnSpanFull(),
                TextInput::make('status')
                    ->required()
                    ->default('Ongoing'),
            ]);
    }
}
