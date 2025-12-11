@extends('layouts.app')

@section('title', $project->title . ' | Rayhan')
@section('meta_description', $project->summary ?? 'Project details')

@section('content')
    <section class="section-container pt-32">
        <div class="max-w-5xl mx-auto">
            <div class="text-center mb-10">
                <h1 class="text-3xl md:text-4xl font-bold text-retro-teal font-pixel mb-2">{{ $project->title }}</h1>
                @if($project->summary)
                    <p class="text-gray-400">{{ $project->summary }}</p>
                @endif
            </div>

            @if($project->thumbnail)
                <div class="mb-8">
                    <img src="{{ asset('storage/' . $project->thumbnail) }}" alt="{{ $project->title }}" class="w-full h-auto rounded-lg manga-panel">
                </div>
            @endif

            <div class="manga-panel mb-8">
                <div class="flex flex-wrap gap-2 mb-4">
                    @foreach(array_filter(array_map('trim', explode(',', $project->tech_stack ?? ''))) as $tech)
                        <span class="px-2 py-1 bg-retro-teal/20 text-retro-teal text-xs border border-retro-teal/30">{{ $tech }}</span>
                    @endforeach
                </div>
                @if($project->description)
                    <div class="prose prose-invert max-w-none">
                        {!! $project->description !!}
                    </div>
                @endif
            </div>

            <div class="flex gap-4">
                @if($project->live_url)
                    <a href="{{ $project->live_url }}" class="btn-primary" target="_blank" rel="noreferrer">Live Demo →</a>
                @endif
                @if($project->repo_url)
                    <a href="{{ $project->repo_url }}" class="btn-secondary" target="_blank" rel="noreferrer">GitHub</a>
                @endif
            </div>
        </div>
    </section>
@endsection
