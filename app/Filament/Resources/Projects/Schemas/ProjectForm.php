<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;
use Illuminate\Support\Str;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn ($state, callable $set) => $set('slug', Str::slug($state))),
                TextInput::make('slug')
                    ->required()
                    ->unique(ignoreRecord: true),
                TextInput::make('summary'),
                FileUpload::make('thumbnail')
                    ->image()
                    ->imageEditor()
                    ->directory('projects/thumbnails')
                    ->visibility('public')
                    ->columnSpanFull(),
                RichEditor::make('description')
                    ->columnSpanFull()
                    ->toolbarButtons([
                        'bold', 'italic', 'underline', 'strike', 'bulletList', 'orderedList', 'link', 'blockquote', 'codeBlock',
                    ]),
                TagsInput::make('tech_stack'),
                TextInput::make('live_url')->url(),
                TextInput::make('repo_url')->url(),
                TextInput::make('sort_order')->numeric()->default(0),
                Toggle::make('is_featured')->default(false),
                Toggle::make('is_active')->default(true),
            ]);
    }
}
