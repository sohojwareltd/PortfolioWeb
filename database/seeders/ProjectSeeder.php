<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'title' => 'E-Commerce Platform',
                'slug' => 'ecommerce-platform',
                'summary' => 'Full-stack commerce with payments and inventory.',
                'description' => 'Modern ecommerce with carts, checkout, admin, and analytics.',
                'tech_stack' => 'Laravel, Alpine, Stripe',
                'live_url' => '#',
                'repo_url' => '#',
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 1,
            ],
            [
                'title' => 'Analytics Dashboard',
                'slug' => 'analytics-dashboard',
                'summary' => 'Real-time charts with custom reporting.',
                'description' => 'Multi-tenant dashboard with widgets, exports, and alerts.',
                'tech_stack' => 'Laravel, Livewire, PostgreSQL',
                'live_url' => '#',
                'repo_url' => '#',
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 2,
            ],
            [
                'title' => 'Auth Service API',
                'slug' => 'auth-service-api',
                'summary' => 'JWT/OAuth2 auth microservice.',
                'description' => 'Centralized auth with MFA, rate limits, and auditing.',
                'tech_stack' => 'Laravel, Redis, JWT',
                'live_url' => '#',
                'repo_url' => '#',
                'is_featured' => false,
                'is_active' => true,
                'sort_order' => 3,
            ],
        ];

        foreach ($projects as $data) {
            Project::updateOrCreate(['slug' => $data['slug']], $data);
        }
    }
}
