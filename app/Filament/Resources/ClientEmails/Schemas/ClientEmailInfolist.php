<?php

namespace App\Filament\Resources\ClientEmails\Schemas;

use Filament\Schemas\Schema;
use Filament\Support\Enums\TextSize;
use Filament\Support\Enums\FontWeight;
use Filament\Schemas\Components\Section;
use Filament\Infolists\Components\TextEntry;

class ClientEmailInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('fullname')
                    ->label('Name')
                    ->size(TextSize::Large)
                    ->weight(FontWeight::Bold),

                TextEntry::make('email')
                    ->label('Email')
                    ->size(TextSize::Large)
                    ->weight(FontWeight::Bold),           
                    
                Section::make() // ← Section heading
                    ->schema([
                        TextEntry::make('subject')
                        ->label('Subject')
                        ->size(TextSize::Large)
                        ->weight(FontWeight::Bold),

                        TextEntry::make('message')
                            ->label('Message')
                            ->markdown()
                            ->size(TextSize::Large)
                            ->columnSpan(2),
                        
                    ])->columnSpan(2),
                    TextEntry::make('created_at')
                    ->label('Received At:')
                    ->dateTime()
                     ->inlineLabel()
            ]);
    }
}
