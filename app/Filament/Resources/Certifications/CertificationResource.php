<?php

namespace App\Filament\Resources\Certifications;

use App\Filament\Resources\CertificationResource\Pages\ListCertifications;
use App\Filament\Resources\CertificationResource\Pages\CreateCertification;
use App\Filament\Resources\CertificationResource\Pages\EditCertification;
use App\Filament\Resources\CertificationResource\Pages;
use App\Models\Certification;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use BackedEnum;
use UnitEnum;
use Filament\Schemas\Schema;

class CertificationResource extends Resource
{
    protected static ?string $model = Certification::class;
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-document';
    protected static string | \UnitEnum | null $navigationGroup = 'Content';

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('name')->required()->maxLength(255),
            TextInput::make('issuer')->maxLength(255),
            DatePicker::make('issued_at')->label('Date Issued'),
            RichEditor::make('description')->toolbarButtons([
                'bold', 'italic', 'strike', 'link', 'bulletList', 'orderedList', 'undo', 'redo'
            ]),
            FileUpload::make('certificate_file')->label('Certificate File')->directory('certificates')->maxSize(5120),
        ]);
    }

public static function table(Table $table): Table
    {
        return $table->columns([
                TextColumn::make('name')->sortable()->searchable(),
                TextColumn::make('issuer')->sortable()->searchable(),
                TextColumn::make('issued_at')->date()->sortable(),
                TextColumn::make('created_at')->dateTime(),
            ])
            ->defaultSort('issued_at', 'desc');
    }

    public static function getPages(): array
    {
        return [
            'index' => ListCertifications::route('/'),
            'create' => CreateCertification::route('/create'),
            'edit' => EditCertification::route('/{record}/edit'),
        ];
    }
}

