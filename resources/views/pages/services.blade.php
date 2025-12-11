@extends('layouts.app')

@section('title', 'Services | Rayhan')
@section('meta_description', 'Services offered by Rayhan - Full-stack development, API development, system architecture, and DevOps solutions.')

@section('content')
    <section class="section-container pt-32">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h1 class="text-2xl sm:text-3xl md:text-5xl lg:text-6xl font-bold mb-4 font-pixel">
                    <span class="text-retro-teal">S</span><span class="text-retro-cyan">E</span><span class="text-retro-emerald">R</span><span class="text-retro-indigo">V</span><span class="text-retro-purple">I</span><span class="text-retro-pink">C</span><span class="text-retro-teal">E</span><span class="text-retro-cyan">S</span>
                </h1>
                <div class="inline-block px-6 py-2 border-2 border-retro-teal/50 bg-dark-surface/50 backdrop-blur-sm">
                    <p class="text-lg text-retro-teal font-pixel">What I Offer</p>
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-8">
                @forelse($services as $service)
                    <div class="manga-panel group hover:border-retro-teal/50 transition-all duration-300">
                        <div class="flex items-start mb-4">
                            <div class="w-16 h-16 bg-retro-teal/20 border-2 border-retro-teal flex items-center justify-center mr-4 flex-shrink-0">
                                <span class="text-3xl">{{ $service->icon ?? '✨' }}</span>
                            </div>
                            <div>
                                <h2 class="text-2xl font-bold text-retro-teal font-pixel mb-2">{{ $service->title }}</h2>
                                @if($service->subtitle)
                                    <p class="text-gray-400 text-sm">{{ $service->subtitle }}</p>
                                @endif
                            </div>
                        </div>
                        @if($service->description)
                            <p class="text-gray-300 mb-4 leading-relaxed">
                                {{ $service->description }}
                            </p>
                        @endif
                        @if($service->features)
                            <ul class="space-y-2 text-gray-400 text-sm">
                                @foreach($service->features as $feature)
                                    <li class="flex items-center">
                                        <span class="text-retro-teal mr-2">▸</span>
                                        {{ $feature }}
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                @empty
                    <p class="text-gray-400">No services published yet.</p>
                @endforelse
            </div>

            <div class="mt-16 text-center">
                <div class="manga-panel max-w-2xl mx-auto">
                    <h2 class="text-3xl font-bold mb-4 text-retro-teal font-pixel">Ready to Build Something Amazing?</h2>
                    <p class="text-gray-300 mb-6">
                        Let's discuss your project and bring your vision to life with clean code and thoughtful design.
                    </p>
                    <a href="{{ route('contact') }}" class="btn-primary inline-block">
                        Get In Touch
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection

