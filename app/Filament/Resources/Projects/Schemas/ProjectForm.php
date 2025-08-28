<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                // Basic Information
                TextInput::make('title')
                    ->label('Project Title')
                    ->required()
                    ->maxLength(100)
                    ->placeholder('Enter project title')
                    ->helperText('This shows in the project list')
                    ->live(onBlur: true)
                    ->afterStateUpdated(function ($state, callable $set) {
                        $set('slug', Str::slug($state));
                    }),

                TextInput::make('slug')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->maxLength(100)
                    ->placeholder('project-url-slug')
                    ->helperText('URL-friendly version of the title'),

                Select::make('category')
                    ->label('Project Category')
                    ->required()
                    ->options([
                        'Communication' => 'Communication',
                        'Energy'       => 'Power and Energy',
                        'Security'     => 'Security Solutions',
                        'Construction' => 'Construction',
                    ])
                    ->searchable(),

                Select::make('status')
                    ->label('Project Status')
                    ->required()
                    ->options([
                        'Ongoing' => 'In Progress',
                        'Completed'   => 'Completed',
                    ])
                    ->default('Ongoing'),

                // Project Details
                RichEditor::make('description')
                    ->label('Project Description')
                    ->required()
                    ->toolbarButtons([
                        'bold',
                        'italic',
                        'link',
                        'bulletList',
                        'orderedList',
                        'h2',
                        'h3',
                    ]),

                DatePicker::make('start_date')
                    ->label('Start Date')
                    ->helperText('Enter start date of project')
                    ->displayFormat('d/m/Y'),

                DatePicker::make('end_date')
                    ->label('End Date')
                    ->helperText('Enter end date of project')
                    ->displayFormat('d/m/Y')
                    ->after('start_date'),

                // Media
                FileUpload::make('featured_image')
                    ->label('Featured Image')
                    ->image()
                    ->required()
                    ->maxSize(2048) // 2MB
                    ->imageCropAspectRatio('16:9')
                    ->imageResizeTargetWidth('1920')
                    ->imageResizeTargetHeight('1080')
                    ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])
                    ->directory('projects/featured')
                    ->disk('public'),

            ]);
    }
}


