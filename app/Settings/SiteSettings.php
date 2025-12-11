<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class SiteSettings extends Settings
{
    // Meta Tags
    public ?string $site_name = null;
    public ?string $site_description = null;
    public ?string $meta_keywords = null;
    public ?string $favicon = null;
    public ?string $og_image = null;

    // Contact Information
    public ?string $contact_email = null;
    public ?string $contact_phone = null;
    public ?string $contact_address = null;
    public ?string $contact_city = null;
    public ?string $contact_state = null;
    public ?string $contact_zip = null;
    public ?string $contact_country = null;

    // Social Media
    public ?string $facebook_url = null;
    public ?string $twitter_url = null;
    public ?string $instagram_url = null;
    public ?string $linkedin_url = null;
    public ?string $youtube_url = null;
    public ?string $github_url = null;
    public ?string $tiktok_url = null;

    public static function group(): string
    {
        return 'site';
    }
}

