<?php

namespace App\Filament\Resources\ClientEmails\Tables;

use Filament\Tables\Table;
use Filament\Actions\ViewAction;
use Filament\Actions\DeleteAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;

class ClientEmailsTable
{

    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('subject')
                    ->searchable(),                
                TextColumn::make('fullname')
                    ->label('Full name')
                    ->searchable(),
                TextColumn::make('created_at')
                    ->label('Sent At')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

            ])
            ->recordActions([
                ViewAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                    BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
