<?php

namespace Database\Seeders;

use App\Models\ContactSubmission;
use Illuminate\Database\Seeder;

class ContactSubmissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contacts = [
            [
                'name' => 'Ava Johnson',
                'email' => 'ava@example.com',
                'subject' => 'Project inquiry',
                'message' => 'Looking to build a dashboard with analytics.',
                'status' => 'new',
            ],
            [
                'name' => 'Leo Martinez',
                'email' => 'leo@example.com',
                'subject' => 'Collaboration',
                'message' => 'Interested in collaborating on a PWA.',
                'status' => 'read',
                'read_at' => now()->subDay(),
            ],
        ];

        foreach ($contacts as $data) {
            ContactSubmission::create($data);
        }
    }
}
