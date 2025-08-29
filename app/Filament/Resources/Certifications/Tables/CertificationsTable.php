<?php

namespace App\Filament\Resources\Certifications\Tables;

use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Tables\Columns\ImageColumn;

class CertificationsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                // Display image column
                ImageColumn::make('certificate_file')
                    ->label('Certificate Image')
                    ->circular()
                    ->imageHeight(40)
                    ->imageWidth(40)
                    ->disk('public'),
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('issuer')
                    ->searchable(),
                TextColumn::make('issued_at')
                    ->date()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->recordActions([
                EditAction::make(),
            ]);
    }
}
