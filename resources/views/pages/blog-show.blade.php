@extends('layouts.app')

@section('title', $post->title . ' | Rayhan')
@section('meta_description', $post->excerpt ?? 'Blog post')

@section('content')
    <section class="section-container pt-32">
        <div class="max-w-3xl mx-auto">
            <div class="text-center mb-10">
                <h1 class="text-3xl md:text-4xl font-bold text-retro-teal font-pixel mb-2">{{ $post->title }}</h1>
                @if($post->subtitle)
                    <p class="text-gray-400">{{ $post->subtitle }}</p>
                @endif
                <p class="text-gray-500 text-sm">{{ optional($post->published_at)->format('Y-m-d') }}</p>
            </div>

            <div class="manga-panel">
                @if($post->content)
                    <div class="prose prose-invert max-w-none">
                        {!! $post->content !!}
                    </div>
                @endif
                <div class="flex flex-wrap gap-2 mt-6">
                    @foreach(($post->tags ?? []) as $tag)
                        <span class="px-2 py-1 bg-retro-indigo/20 text-retro-indigo text-xs border border-retro-indigo/30">{{ $tag }}</span>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
