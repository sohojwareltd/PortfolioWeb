<?php

namespace App\Filament\Widgets;

use App\Models\ContactSubmission;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class RecentContactSubmissions extends BaseWidget
{
    protected int|string|array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                ContactSubmission::query()->latest()
            )
            ->columns([
                Tables\Columns\TextColumn::make('name')->label('Name')->searchable(),
                Tables\Columns\TextColumn::make('email')->label('Email')->sortable(),
                Tables\Columns\BadgeColumn::make('status')
                    ->colors([
                        'primary' => 'new',
                        'warning' => 'read',
                        'secondary' => 'archived',
                    ]),
                Tables\Columns\TextColumn::make('created_at')->since()->sortable(),
            ])
            ->paginated(false)
            ->defaultPaginationPageOption(5)
            ->defaultSort('created_at', 'desc')
            ->recordUrl(null);
    }
}



