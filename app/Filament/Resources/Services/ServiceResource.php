<?php

namespace App\Filament\Resources\Services;

use App\Filament\Resources\ServiceResource\Pages\ListServices;
use App\Filament\Resources\ServiceResource\Pages\CreateService;
use App\Filament\Resources\ServiceResource\Pages\EditService;
use App\Filament\Resources\ServiceResource\Pages;
use App\Models\Service;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use BackedEnum;
use UnitEnum;
use Filament\Schemas\Schema;
use Filament\Tables\Table;


class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-briefcase';
    protected static string | \UnitEnum | null $navigationGroup = 'Content';

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('title')->required()->maxLength(255),
            Textarea::make('short_description')->rows(3)->maxLength(500),
            RichEditor::make('description')->toolbarButtons([
                'bold', 'italic', 'strike', 'link', 'bulletList', 'orderedList', 'undo', 'redo'
            ]),
            FileUpload::make('icon')->image()->directory('services/icons')->maxSize(1024),
            TextInput::make('order')->numeric()->default(0),
        ]);
    }

public static function table(Table $table): Table
    {
        return $table->columns([
                TextColumn::make('title')->sortable()->searchable(),
                TextColumn::make('order')->sortable(),
                TextColumn::make('created_at')->dateTime(),
            ])
            ->defaultSort('order');
    }

    public static function getPages(): array
    {
        return [
            'index' => ListServices::route('/'),
            'create' => CreateService::route('/create'),
            'edit' => EditService::route('/{record}/edit'),
        ];
    }
}
