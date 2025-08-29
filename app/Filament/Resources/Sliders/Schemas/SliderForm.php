<?php

namespace App\Filament\Resources\Sliders\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;

class SliderForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

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

                    Grid::make()->schema([
                        TextInput::make('title')
                            ->required()
                            ->maxLength(100)
                            ->placeholder('Enter slider title'),
                        Select::make('slider_type')
                    ->label('Slider Type')
                    ->options([
                        'left_aligned' => 'Left',
                        'center_aligned' => 'Center',
                    ])->default('center_aligned')
                    ->helperText('Where the text inside the Slider will be positioned'),

                
                    Toggle::make('is_active')
                    ->label('Active')
                    ->default(true)
                    ->hiddenOn('create')
                    ->helperText('Enable or disable this slider'),
                    ])->columnSpanFull(),  

                    TextInput::make('sort_order')
                    ->label('Sort Order')
                    ->numeric()
                    ->default(1)
                    ->hidden()
                    ->unique()
                    ->helperText('Lower numbers appear first')
                    ->default(function () {
                        return (int) \App\Models\Slider::max('order') + 1;
                    }),
                    
                Textarea::make('description')
                    ->label('Slider Description')
                    ->placeholder('Enter slider description')
                    ->columnSpanFull(),                
                
                                       
                    
               

                
            ]);
    }
}
