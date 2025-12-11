<?php

namespace App\Filament\Resources\ContactSubmissions\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DateTimePicker;

class ContactSubmissionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')->required(),
                TextInput::make('email')->email()->required(),
                TextInput::make('subject'),
                Textarea::make('message')->rows(5)->disabledOn('edit'),
                Select::make('status')
                    ->options([
                        'new' => 'New',
                        'read' => 'Read',
                        'archived' => 'Archived',
                    ])
                    ->required(),
                DateTimePicker::make('read_at'),
            ]);
    }
}
