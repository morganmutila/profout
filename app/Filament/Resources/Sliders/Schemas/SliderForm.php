<?php

namespace App\Filament\Resources\Sliders\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;

class SliderForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->maxLength(100)
                    ->placeholder('Enter slider title'),
                    
                RichEditor::make('description')
                    ->label('Slider Description')
                    ->toolbarButtons([
                        'bold',
                        'italic',
                        'link',
                    ])
                    ->placeholder('Enter slider description')
                    ->columnSpanFull(),
                    
                FileUpload::make('image')
                    ->label('Slider Image')
                    ->image()
                    ->required()
                    ->imageCropAspectRatio('16:9')
                    ->imageResizeTargetWidth(1920)
                    ->imageResizeTargetHeight(1080)
                    ->maxSize(2048) // 2MB
                    ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])
                    ->directory('sliders')
                    ->disk('public')
                    ->columnSpanFull(),
                                       
                    
                Select::make('slider_type')
                    ->label('Slider Type')
                    ->options([
                        'left_aligned' => 'Left',
                        'center_aligned' => 'Center',
                    ])
                    ->default('center_aligned'),

                Toggle::make('is_active')
                    ->label('Active')
                    ->default(true)
                    ->helperText('Enable or disable this slider'),
                    
                TextInput::make('sort_order')
                    ->label('Sort Order')
                    ->numeric()
                    ->default(1)
                    ->unique()
                    ->helperText('Lower numbers appear first'),
            ]);
    }
}
