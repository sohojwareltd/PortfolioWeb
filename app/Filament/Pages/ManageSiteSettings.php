<?php

namespace App\Filament\Pages;

use App\Settings\SiteSettings;
use BackedEnum;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Pages\SettingsPage;
use Filament\Schemas\Schema;

class ManageSiteSettings extends SettingsPage
{
    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static string $settings = SiteSettings::class;

    protected static ?string $navigationLabel = 'Site Settings';

    protected static ?string $title = 'Site Settings';

    protected function mutateFormDataBeforeSave(array $data): array
    {
        // Ensure all settings properties are present, even if empty
        $defaults = [
            'site_name' => null,
            'site_description' => null,
            'meta_keywords' => null,
            'favicon' => null,
            'og_image' => null,
            'contact_email' => null,
            'contact_phone' => null,
            'contact_address' => null,
            'contact_city' => null,
            'contact_state' => null,
            'contact_zip' => null,
            'contact_country' => null,
            'facebook_url' => null,
            'twitter_url' => null,
            'instagram_url' => null,
            'linkedin_url' => null,
            'youtube_url' => null,
            'github_url' => null,
            'tiktok_url' => null,
        ];

        // Merge defaults with submitted data, ensuring all keys exist
        // Filter submitted data to only include valid settings keys, then merge with defaults
        $filtered = array_intersect_key($data, $defaults);
        return array_merge($defaults, $filtered);
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Meta Tags')
                    ->description('Manage SEO and meta information for your site')
                    ->schema([
                        TextInput::make('site_name')
                            ->label('Site Name')
                            ->required()
                            ->maxLength(255)
                            ->columnSpanFull(),
                        Textarea::make('site_description')
                            ->label('Site Description')
                            ->rows(3)
                            ->maxLength(500)
                            ->helperText('This will be used as the default meta description')
                            ->columnSpanFull(),
                        Textarea::make('meta_keywords')
                            ->label('Meta Keywords')
                            ->rows(2)
                            ->helperText('Comma-separated keywords for SEO')
                            ->columnSpanFull(),
                        FileUpload::make('favicon')
                            ->label('Favicon')
                            ->image()
                            ->imageEditor()
                            ->directory('settings/favicon')
                            ->visibility('public')
                            ->helperText('Recommended formats: .ico, .png, .svg (Recommended size: 32x32px or 16x16px)')
                            ->acceptedFileTypes(['image/png', 'image/x-icon', 'image/svg+xml', 'image/jpeg'])
                            ->columnSpanFull(),
                        FileUpload::make('og_image')
                            ->label('Open Graph Image')
                            ->image()
                            ->imageEditor()
                            ->directory('settings/og-image')
                            ->visibility('public')
                            ->helperText('Recommended size: 1200x630px')
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                Section::make('Contact Information')
                    ->description('Manage contact details displayed on your site')
                    ->schema([
                        TextInput::make('contact_email')
                            ->label('Email')
                            ->email()
                            ->maxLength(255),
                        TextInput::make('contact_phone')
                            ->label('Phone')
                            ->tel()
                            ->maxLength(255),
                        TextInput::make('contact_address')
                            ->label('Street Address')
                            ->maxLength(255)
                            ->columnSpanFull(),
                        TextInput::make('contact_city')
                            ->label('City')
                            ->maxLength(255),
                        TextInput::make('contact_state')
                            ->label('State/Province')
                            ->maxLength(255),
                        TextInput::make('contact_zip')
                            ->label('ZIP/Postal Code')
                            ->maxLength(255),
                        TextInput::make('contact_country')
                            ->label('Country')
                            ->maxLength(255)
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                Section::make('Social Media Links')
                    ->description('Add your social media profiles')
                    ->schema([
                        TextInput::make('facebook_url')
                            ->label('Facebook URL')
                            ->url()
                            ->maxLength(255),
                        TextInput::make('twitter_url')
                            ->label('Twitter/X URL')
                            ->url()
                            ->maxLength(255),
                        TextInput::make('instagram_url')
                            ->label('Instagram URL')
                            ->url()
                            ->maxLength(255),
                        TextInput::make('linkedin_url')
                            ->label('LinkedIn URL')
                            ->url()
                            ->maxLength(255),
                        TextInput::make('youtube_url')
                            ->label('YouTube URL')
                            ->url()
                            ->maxLength(255),
                        TextInput::make('github_url')
                            ->label('GitHub URL')
                            ->url()
                            ->maxLength(255),
                        TextInput::make('tiktok_url')
                            ->label('TikTok URL')
                            ->url()
                            ->maxLength(255)
                            ->columnSpanFull(),
                    ])
                    ->columns(2),
            ]);
    }
}

