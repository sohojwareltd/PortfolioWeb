<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'title' => 'Full-Stack Development',
                'slug' => 'full-stack-development',
                'subtitle' => 'End-to-end web solutions',
                'description' => 'Responsive, performant applications from concept to production.',
                'features' => ['Frontend & Backend', 'Database design', 'Testing & QA', 'Performance tuning'],
                'icon' => '🌐',
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'title' => 'API Development',
                'slug' => 'api-development',
                'subtitle' => 'REST & GraphQL services',
                'description' => 'Secure, well-documented APIs with auth, rate limiting, and monitoring.',
                'features' => ['REST/GraphQL', 'Auth & security', 'Caching & rate limits', 'Observability'],
                'icon' => '🔌',
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'title' => 'DevOps & Automation',
                'slug' => 'devops-automation',
                'subtitle' => 'CI/CD & cloud',
                'description' => 'Pipelines, containers, and infra as code to keep shipping smooth.',
                'features' => ['CI/CD', 'Docker & K8s', 'Cloud deployment', 'Monitoring & logging'],
                'icon' => '⚙️',
                'sort_order' => 3,
                'is_active' => true,
            ],
        ];

        foreach ($services as $data) {
            Service::updateOrCreate(['slug' => $data['slug']], $data);
        }
    }
}
