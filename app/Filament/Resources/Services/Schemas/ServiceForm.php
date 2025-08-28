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
                    ->label('Service name')
                    ->required()
                    ->maxLength(100)
                    ->placeholder('Enter service name')
                    ->live(onBlur: true)
                    ->afterStateUpdated(function ($state, callable $set) {
                        $set('slug', Str::slug($state));
                    }),

                TextInput::make('slug')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->unique()
                    ->reactive()
                    ->afterStateUpdated(function ($state, callable $set, $context) {
                        // Only auto-generate if creating or slug is empty
                        if ($context === 'create' || empty($state)) {
                            $set('slug', Str::slug($set('title')));
                        }
                    })
                    ->maxLength(100)
                    ->placeholder('service-url-slug')
                    ->helperText('URL-friendly version of the service name'),

                TextInput::make('short_description')
                    ->placeholder('Enter service short description'),
                Textarea::make('description')
                    ->placeholder('Enter service description')
                    ->columnSpanFull(),
                TextInput::make('icon')
                    ->placeholder('Enter service icon'),
                FileUpload::make('image')
                    ->image()
                    ->required()
                    ->maxSize(1024)
                    ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])
                    ->directory('services')
                    ->disk('public'),
                TextInput::make('order')
                    ->required()
                    ->numeric()
                    ->helperText('At what position does the service show')
                    ->default(0),
            ]);
    }
}
