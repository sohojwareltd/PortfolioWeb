@extends('layouts.app')

@section('title', 'Blog | Rayhan')
@section('meta_description', 'Blog by Rayhan - Articles on web development, technology, and coding insights.')

@section('content')
    <section class="section-container pt-32">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-16">
                <h1 class="text-2xl sm:text-3xl md:text-5xl lg:text-6xl font-bold mb-4 font-pixel">
                    <span class="text-retro-teal">B</span><span class="text-retro-cyan">L</span><span class="text-retro-emerald">O</span><span class="text-retro-indigo">G</span>
                </h1>
                <div class="inline-block px-6 py-2 border-2 border-retro-teal/50 bg-dark-surface/50 backdrop-blur-sm">
                    <p class="text-lg text-retro-teal font-pixel">Thoughts &amp; Insights</p>
                </div>
            </div>

            <div class="space-y-8">
                @forelse($posts as $post)
                    <article class="blog-card">
                        <div class="flex items-start justify-between mb-4">
                            <div>
                                <h2 class="text-2xl font-bold mb-2 text-retro-teal font-pixel">
                                    <a href="{{ route('blog.show', $post->slug) }}" class="hover:text-retro-cyan transition-colors">
                                        {{ $post->title }}
                                    </a>
                                </h2>
                                <p class="text-gray-400 text-sm font-pixel">{{ optional($post->published_at)->format('Y-m-d') }} | {{ $post->excerpt ? str_word_count($post->excerpt) : str_word_count(strip_tags($post->content)) }} words</p>
                            </div>
                        </div>
                        <p class="text-gray-300 mb-4 leading-relaxed">
                            {{ $post->excerpt ?? \Illuminate\Support\Str::limit(strip_tags($post->content), 220) }}
                        </p>
                        <div class="flex items-center justify-between">
                            <div class="flex gap-2">
                                @foreach(($post->tags ?? []) as $tag)
                                    <span class="px-2 py-1 bg-retro-teal/20 text-retro-teal text-xs border border-retro-teal/30">{{ $tag }}</span>
                                @endforeach
                            </div>
                        </div>
                    </article>
                @empty
                    <p class="text-gray-400">No blog posts published yet.</p>
                @endforelse
            </div>
        </div>
    </section>
@endsection
