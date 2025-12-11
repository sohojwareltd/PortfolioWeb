<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'title' => 'Building Scalable APIs with Laravel',
                'slug' => 'building-scalable-apis-with-laravel',
                'subtitle' => 'Patterns for performance and safety',
                'excerpt' => 'Rate limiting, validation, and observability tips for production APIs.',
                'content' => '<p>Deep dive into API best practices with Laravel...</p>',
                'tags' => ['Laravel', 'API', 'Backend'],
                'is_published' => true,
                'published_at' => now()->subDays(5),
            ],
            [
                'title' => 'Retro Aesthetics on the Modern Web',
                'slug' => 'retro-aesthetics-modern-web',
                'subtitle' => 'Blending nostalgia with performance',
                'excerpt' => 'How to ship neon/CRT vibes without hurting Core Web Vitals.',
                'content' => '<p>Use gradients, glows, and careful animations...</p>',
                'tags' => ['Design', 'CSS'],
                'is_published' => true,
                'published_at' => now()->subDays(10),
            ],
            [
                'title' => 'Shipping Faster with CI/CD',
                'slug' => 'shipping-faster-with-ci-cd',
                'subtitle' => 'Practical pipelines for small teams',
                'excerpt' => 'Minimal, reliable pipelines with tests, builds, and deploy hooks.',
                'content' => '<p>From lint to deploy with minimal friction...</p>',
                'tags' => ['DevOps', 'CI/CD'],
                'is_published' => true,
                'published_at' => now()->subDays(15),
            ],
        ];

        foreach ($posts as $data) {
            Post::updateOrCreate(['slug' => $data['slug']], $data);
        }
    }
}
