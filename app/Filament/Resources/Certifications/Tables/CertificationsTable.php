<?php

namespace App\Filament\Resources\Certifications\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class CertificationsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                // Display image column
                \Filament\Tables\Columns\ImageColumn::make('certificate_file')
                    ->label('Image')
                    ->circular()
                    ->height(40)
                    ->width(40),
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
