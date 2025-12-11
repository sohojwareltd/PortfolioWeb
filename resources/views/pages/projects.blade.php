@extends('layouts.app')

@section('title', 'Projects | Rayhan')
@section('meta_description', 'Projects by Rayhan - Showcase of full-stack web applications and development work.')

@section('content')
    <section class="section-container pt-32">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h1 class="text-2xl sm:text-3xl md:text-5xl lg:text-6xl font-bold mb-4 font-pixel">
                    <span class="text-retro-teal">P</span><span class="text-retro-cyan">R</span><span class="text-retro-emerald">O</span><span class="text-retro-indigo">J</span><span class="text-retro-purple">E</span><span class="text-retro-pink">C</span><span class="text-retro-teal">T</span><span class="text-retro-cyan">S</span>
                </h1>
                <div class="inline-block px-6 py-2 border-2 border-retro-teal/50 bg-dark-surface/50 backdrop-blur-sm">
                    <p class="text-lg text-retro-teal font-pixel">My Work</p>
                </div>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse($projects as $project)
                    <div class="project-card group">
                        <a href="{{ route('projects.show', $project->slug) }}" class="block h-48 bg-gradient-to-br from-retro-teal/20 to-retro-indigo/20 flex items-center justify-center mb-4 relative overflow-hidden rounded-lg">
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
                            <p class="text-gray-400 text-sm mb-4">
                                {{ $project->summary }}
                            </p>
                        @endif
                        <div class="flex flex-wrap gap-2 mb-4">
                            @foreach(array_filter(array_map('trim', explode(',', $project->tech_stack ?? ''))) as $tech)
                                <span class="px-2 py-1 bg-retro-teal/20 text-retro-teal text-xs border border-retro-teal/30">{{ $tech }}</span>
                            @endforeach
                        </div>
                        <div class="flex gap-4">
                            @if($project->live_url)
                                <a href="{{ $project->live_url }}" class="text-retro-teal hover:text-retro-cyan transition-colors text-sm font-semibold" target="_blank" rel="noreferrer">Live Demo →</a>
                            @endif
                            @if($project->repo_url)
                                <a href="{{ $project->repo_url }}" class="text-gray-400 hover:text-retro-teal transition-colors text-sm" target="_blank" rel="noreferrer">GitHub</a>
                            @endif
                        </div>
                    </div>
                @empty
                    <p class="text-gray-400">No projects published yet.</p>
                @endforelse
            </div>
        </div>
    </section>
@endsection
