<?php 

namespace App\Filament\Resources\Projects;

use App\Filament\Resources\ProjectResource\Pages\ListProjects;
use App\Filament\Resources\ProjectResource\Pages\CreateProject;
use App\Filament\Resources\ProjectResource\Pages\EditProject;
use UnitEnum;
use BackedEnum;
use App\Models\Project;
use Filament\Tables\Table;
use Filament\Schemas\Schema;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use App\Filament\Resources\ProjectResource\Pages;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-folder-open';
    protected static string | \UnitEnum | null $navigationGroup = 'Content';

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('title')->required()->maxLength(255),
            TextInput::make('category')->maxLength(255),
            RichEditor::make('description')->toolbarButtons([
                'bold', 'italic', 'strike', 'link', 'bulletList', 'orderedList', 'undo', 'redo'
            ]),
            DatePicker::make('start_date')->label('Start Date'),
            DatePicker::make('end_date')->label('End Date'),
            FileUpload::make('featured_image')->image()->directory('projects/featured')->maxSize(2048),
            FileUpload::make('gallery')->multiple()->image()->directory('projects/gallery')->maxSize(2048),
            Select::make('status')
                ->options([
                    'Ongoing' => 'Ongoing',
                    'Completed' => 'Completed',
                ])
                ->default('Ongoing')
                ->required(),
        ]);
    }

public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('title')->limit(30)->sortable()->searchable(),
            TextColumn::make('category')->limit(20)->sortable()->searchable(),
            TextColumn::make('status')
                ->badge()
                ->color(fn (string $state): string => match ($state) {
                    'Ongoing' => 'gray',
                    'Completed' => 'success',
                }),
            TextColumn::make('start_date')->date()->sortable(),
            TextColumn::make('end_date')->date()->sortable(),
            TextColumn::make('created_at')->dateTime(),
        ])->defaultSort('start_date', 'desc');
    }

    public static function getPages(): array
    {
        return [
            'index' => ListProjects::route('/'),
            'create' => CreateProject::route('/create'),
            'edit' => EditProject::route('/{record}/edit'),
        ];
    }
}
