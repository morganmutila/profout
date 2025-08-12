<?php 

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\TextColumn;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-folder-open';
    protected static ?string $navigationGroup = 'Content';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
