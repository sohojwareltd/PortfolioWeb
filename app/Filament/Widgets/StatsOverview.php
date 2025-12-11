<?php

namespace App\Filament\Widgets;

use App\Models\ContactSubmission;
use App\Models\Post;
use App\Models\Project;
use App\Models\Service;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Stat::make('Services', Service::count())
                ->description('Published offerings')
                ->color('success')
                ->icon('heroicon-m-sparkles'),
            Stat::make('Projects', Project::count())
                ->description('Showcased work')
                ->color('primary')
                ->icon('heroicon-m-rocket-launch'),
            Stat::make('Posts', Post::where('is_published', true)->count())
                ->description('Published articles')
                ->color('info')
                ->icon('heroicon-m-newspaper'),
            Stat::make('New Contacts', ContactSubmission::where('status', 'new')->count())
                ->description('Unread inquiries')
                ->color('warning')
                ->icon('heroicon-m-envelope'),
        ];
    }
}

