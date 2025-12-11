@extends('layouts.app')

@section('title', ($siteSettings?->site_name ?? 'Rayhan') . ' | Full-Stack Developer')
@section('meta_description', $siteSettings?->site_description ?? 'Rayhan - Full-stack Developer Portfolio. Building modern web applications with retro aesthetics and clean code.')

@section('content')
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden pt-16 sm:pt-20">
        <div class="absolute inset-0 bg-grid-pattern bg-[length:50px_50px] opacity-30"></div>

        <div class="absolute inset-0 opacity-5">
            <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <pattern id="geometric-pattern" x="0" y="0" width="100" height="100" patternUnits="userSpaceOnUse">
                        <path d="M50 0 L100 50 L50 100 L0 50 Z" fill="none" stroke="currentColor" stroke-width="0.5"/>
                        <circle cx="50" cy="50" r="20" fill="none" stroke="currentColor" stroke-width="0.5"/>
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#geometric-pattern)"/>
            </svg>
        </div>

        <div class="absolute inset-0 pointer-events-none">
            <div class="h-full w-full bg-gradient-to-b from-transparent via-retro-teal/5 to-transparent animate-scanline"></div>
        </div>

        <div id="hero-canvas" class="absolute inset-0 z-0"></div>

        <div id="hero-content" class="relative z-10 container mx-auto px-4 text-center">
            <div class="max-w-4xl mx-auto">
                <div class="mb-8 scale-in animate-delay-200">
                    <h1 class="text-2xl sm:text-3xl md:text-5xl lg:text-7xl font-bold mb-3 sm:mb-4 font-pixel leading-tight" style="transform: translateZ(0); will-change: transform;">
                        <span class="text-retro-teal inline-block" style="animation: float-text 3s ease-in-out infinite;">R</span>
                        <span class="text-retro-cyan inline-block" style="animation: float-text 3s ease-in-out infinite 0.1s;">A</span>
                        <span class="text-retro-emerald inline-block" style="animation: float-text 3s ease-in-out infinite 0.2s;">Y</span>
                        <span class="text-retro-indigo inline-block" style="animation: float-text 3s ease-in-out infinite 0.3s;">H</span>
                        <span class="text-retro-purple inline-block" style="animation: float-text 3s ease-in-out infinite 0.4s;">A</span>
                        <span class="text-retro-pink inline-block" style="animation: float-text 3s ease-in-out infinite 0.5s;">N</span>
                    </h1>
                    <div class="inline-block px-3 py-1.5 sm:px-6 sm:py-2 border-2 border-retro-teal/50 bg-dark-surface/50 backdrop-blur-sm mb-4 sm:mb-6" style="animation: float-text 3s ease-in-out infinite 0.6s;">
                        <p class="text-xs sm:text-sm md:text-lg lg:text-xl text-retro-teal font-pixel">Full-Stack Developer</p>
                    </div>
                </div>

                <p class="text-sm sm:text-base md:text-xl lg:text-2xl mb-4 sm:mb-6 text-gray-300 leading-relaxed px-2 fade-in animate-delay-300" style="animation: float-text 3s ease-in-out infinite 0.7s;">
                    I build systems that <span class="text-retro-teal font-semibold">reduce cost</span> and <span class="text-retro-emerald font-semibold">increase efficiency</span>.
                </p>

                <div class="flex flex-wrap justify-center gap-2 sm:gap-3 text-xs sm:text-sm text-retro-teal/80 mb-6 sm:mb-8 fade-in animate-delay-300">
                    <span class="px-3 py-1 border border-retro-teal/40 bg-dark-surface/60">-30% cloud spend</span>
                    <span class="px-3 py-1 border border-retro-cyan/40 bg-dark-surface/60">2x deploy speed</span>
                    <span class="px-3 py-1 border border-retro-indigo/40 bg-dark-surface/60">99.9% uptime</span>
                    <span class="px-3 py-1 border border-retro-emerald/40 bg-dark-surface/60">MTTR &lt; 1h</span>
                </div>

                <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 justify-center items-center px-4 fade-in animate-delay-400">
                    <a href="{{ route('projects') }}" class="w-full sm:w-auto px-6 sm:px-8 py-2.5 sm:py-3 bg-retro-teal/20 border-2 border-retro-teal text-retro-teal text-sm sm:text-base font-semibold hover:bg-retro-teal/30 transition-opacity hover:opacity-90 text-center">
                        View Projects
                    </a>
                    <a href="{{ route('contact') }}" class="w-full sm:w-auto px-6 sm:px-8 py-2.5 sm:py-3 border-2 border-retro-indigo text-retro-indigo text-sm sm:text-base font-semibold hover:bg-retro-indigo/10 transition-opacity hover:opacity-90 text-center">
                        Get In Touch
                    </a>
                </div>

                <div class="mt-8 sm:mt-12 md:mt-16 animate-bounce">
                    <svg class="w-6 h-6 mx-auto text-retro-teal/50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                    </svg>
                </div>
            </div>
        </div>
    </section>

    @if($services->count())
    <section class="section-container">
        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold text-retro-teal font-pixel">Services</h2>
            <p class="text-gray-400 mt-2">What I can do for you</p>
        </div>
        <div class="grid md:grid-cols-3 gap-6">
            @foreach($services as $service)
                <div class="manga-panel">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-retro-teal/20 border-2 border-retro-teal flex items-center justify-center mr-4">
                            <span class="text-2xl">{{ $service->icon ?? '🌐' }}</span>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-retro-teal font-pixel">{{ $service->title }}</h3>
                            @if($service->subtitle)
                                <p class="text-gray-400 text-sm">{{ $service->subtitle }}</p>
                            @endif
                        </div>
                    </div>
                    @if($service->description)
                        <p class="text-gray-300 mb-4">{{ $service->description }}</p>
                    @endif
                    @if($service->features)
                        <ul class="space-y-2 text-gray-300 text-sm">
                            @foreach($service->features as $feature)
                                <li class="flex items-center"><span class="text-retro-teal mr-2">▸</span>{{ $feature }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            @endforeach
        </div>
    </section>
    @endif

    @if($projects->count())
    <section class="section-container">
        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold text-retro-cyan font-pixel">Featured Projects</h2>
            <p class="text-gray-400 mt-2">Recent work and experiments</p>
        </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($projects as $project)
                <div class="project-card group">
                    <a href="{{ route('projects.show', $project->slug) }}" class="block h-40 bg-gradient-to-br from-retro-teal/20 to-retro-indigo/20 flex items-center justify-center mb-4 relative overflow-hidden rounded-lg">
                        @if($project->thumbnail)
                            <img src="{{ asset('storage/' . $project->thumbnail) }}" alt="{{ $project->title }}" class="w-full h-full object-cover">
                        @else
                            <div class="absolute inset-0 bg-grid-pattern bg-[length:20px_20px] opacity-20"></div>
                            <span class="text-5xl relative z-10">✨</span>
                        @endif
                    </a>
                    <h3 class="text-xl font-bold mb-2 text-retro-teal font-pixel">
                        <a href="{{ route('projects.show', $project->slug) }}" class="hover:text-retro-cyan transition-colors">{{ $project->title }}</a>
                    </h3>
                    @if($project->summary)
                        <p class="text-gray-400 text-sm mb-4">{{ $project->summary }}</p>
                    @endif
                    <div class="flex flex-wrap gap-2 mb-4">
                        @foreach(array_slice(explode(',', $project->tech_stack ?? '') ?? [], 0, 3) as $tech)
                            @if(trim($tech)!=='')
                                <span class="px-2 py-1 bg-retro-teal/20 text-retro-teal text-xs border border-retro-teal/30">{{ trim($tech) }}</span>
                            @endif
                        @endforeach
                    </div>
                    <div class="flex gap-4 text-sm">
                        @if($project->live_url)
                            <a href="{{ $project->live_url }}" class="text-retro-teal hover:text-retro-cyan transition-colors" target="_blank" rel="noreferrer">Live Demo →</a>
                        @endif
                        @if($project->repo_url)
                            <a href="{{ $project->repo_url }}" class="text-gray-400 hover:text-retro-teal transition-colors" target="_blank" rel="noreferrer">GitHub</a>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    @endif

    @if($posts->count())
    <section class="section-container">
        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold text-retro-purple font-pixel">Latest Posts</h2>
            <p class="text-gray-400 mt-2">Thoughts & insights</p>
        </div>
        <div class="grid md:grid-cols-3 gap-6">
            @foreach($posts as $post)
                <article class="blog-card">
                    <h3 class="text-xl font-bold mb-2 text-retro-teal font-pixel">
                        <a href="{{ route('blog.show', $post->slug) }}" class="hover:text-retro-cyan transition-colors">{{ $post->title }}</a>
                    </h3>
                    <p class="text-gray-400 text-sm mb-2">{{ optional($post->published_at)->format('Y-m-d') }}</p>
                    <p class="text-gray-300 mb-3">{{ $post->excerpt ?? \Illuminate\Support\Str::limit(strip_tags($post->content), 120) }}</p>
                    <div class="flex flex-col sm:flex-row items-center justify-between">
                        <div class="flex gap-2">
                            @foreach(($post->tags ?? []) as $tag)
                                <span class="px-2 py-1 bg-retro-indigo/20 text-retro-indigo text-xs border border-retro-indigo/30">{{ $tag }}</span>
                            @endforeach
                        </div>

                        <a href="{{ route('blog.show', $post->slug) }}" class="text-retro-teal hover:text-retro-cyan transition-colors font-semibold text-sm">Read More →</a>
                    </div>
                </article>
            @endforeach
        </div>
    </section>
    @endif
@endsection

