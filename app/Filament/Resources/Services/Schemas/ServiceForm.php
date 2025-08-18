<?php

namespace App\Filament\Resources\Services\Schemas;

use Str;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                TextInput::make('slug')
                    ->required()
                    ->unique()
                    ->reactive()
                    ->afterStateUpdated(function ($state, callable $set, $context) {
                        // Only auto-generate if creating or slug is empty
                        if ($context === 'create' || empty($state)) {
                            $set('slug', Str::slug($set('title')));
                        }
                    }),
                TextInput::make('short_description'),
                Textarea::make('description')
                    ->columnSpanFull(),
                TextInput::make('icon'),
                FileUpload::make('image')
                    ->image()
                    ->required()
                    ->maxSize(1024)
                    ->acceptedFileTypes(['image/jpeg', 'image/png'])
                    ->directory('services')
                    ->disk('public'),
                TextInput::make('order')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }
}
