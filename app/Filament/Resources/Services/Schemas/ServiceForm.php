<?php

namespace App\Filament\Resources\Services\Schemas;

use Str;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Grid;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Grid::make()->schema([
                FileUpload::make('image')
                    ->image()
                    ->required()
                    ->maxSize(5024)
                    ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])
                    ->directory('services')
                    ->disk('public'),
                ])->columnSpanFull(),
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

                Textarea::make('short_description')
                    ->placeholder('Enter service short description')
                    ->columnSpanFull(),
                    RichEditor::make('description')
                    ->toolbarButtons([
                        ['bold', 'italic', 'underline', 'strike', 'subscript', 'superscript', 'link'],
                        ['h2', 'h3', 'alignStart', 'alignCenter', 'alignEnd'],
                        ['blockquote', 'codeBlock', 'bulletList', 'orderedList'],
                        ['table', 'attachFiles'], // The `customBlocks` and `mergeTags` tools are also added here if those features are used.
                        ['undo', 'redo'],
                    ])                
                    ->fileAttachmentsDisk('public')
                    ->fileAttachmentsDirectory('attachments')
                    ->fileAttachmentsVisibility('public')
                    ->placeholder('Enter service description')
                    ->columnSpanFull(),
                TextInput::make('icon')
                    ->placeholder('Enter service icon'),
                
                TextInput::make('order')
                    ->required()
                    ->integer() 
                    ->helperText('At what position does the service show')
                    ->default(function () {
                        return \App\Models\Service::max('order') + 1;
                    }),
            ]);
    }
}
