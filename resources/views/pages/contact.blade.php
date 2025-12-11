@extends('layouts.app')

@section('title', 'Contact | Rayhan')
@section('meta_description', 'Contact Rayhan - Get in touch for web development projects and collaborations.')

@section('content')
    <section class="section-container pt-32">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-16">
                <h1 class="text-2xl sm:text-3xl md:text-5xl lg:text-6xl font-bold mb-4 font-pixel">
                    <span class="text-retro-teal">C</span><span class="text-retro-cyan">O</span><span class="text-retro-emerald">N</span><span class="text-retro-indigo">T</span><span class="text-retro-purple">A</span><span class="text-retro-pink">C</span><span class="text-retro-teal">T</span>
                </h1>
                <div class="inline-block px-6 py-2 border-2 border-retro-teal/50 bg-dark-surface/50 backdrop-blur-sm">
                    <p class="text-lg text-retro-teal font-pixel">Get In Touch</p>
                </div>
            </div>

            @if(session('success'))
                <div class="manga-panel border-retro-emerald text-retro-emerald mb-8">
                    {{ session('success') }}
                </div>
            @endif

            <div class="grid md:grid-cols-2 gap-12">
                <div class="manga-panel">
                    <h2 class="text-2xl font-bold mb-6 text-retro-teal font-pixel">
                        <span class="text-retro-teal">$</span> Send a Message
                    </h2>
                    <form id="contact-form" class="space-y-6" method="POST" action="{{ route('contact.submit') }}">
                        @csrf
                        <div>
                            <label for="name" class="block mb-2 text-gray-300 font-pixel text-sm">
                                <span class="text-retro-teal">></span> Name
                            </label>
                            <input
                                type="text"
                                id="name"
                                name="name"
                                required
                                value="{{ old('name') }}"
                                class="form-input"
                                placeholder="Your name"
                            >
                            @error('name')<p class="text-red-400 text-sm mt-1">{{ $message }}</p>@enderror
                        </div>
                        <div>
                            <label for="email" class="block mb-2 text-gray-300 font-pixel text-sm">
                                <span class="text-retro-teal">></span> Email
                            </label>
                            <input
                                type="email"
                                id="email"
                                name="email"
                                required
                                value="{{ old('email') }}"
                                class="form-input"
                                placeholder="your.email@example.com"
                            >
                            @error('email')<p class="text-red-400 text-sm mt-1">{{ $message }}</p>@enderror
                        </div>
                        <div>
                            <label for="subject" class="block mb-2 text-gray-300 font-pixel text-sm">
                                <span class="text-retro-teal">></span> Subject
                            </label>
                            <input
                                type="text"
                                id="subject"
                                name="subject"
                                value="{{ old('subject') }}"
                                class="form-input"
                                placeholder="Project inquiry"
                            >
                            @error('subject')<p class="text-red-400 text-sm mt-1">{{ $message }}</p>@enderror
                        </div>
                        <div>
                            <label for="message" class="block mb-2 text-gray-300 font-pixel text-sm">
                                <span class="text-retro-teal">></span> Message
                            </label>
                            <textarea
                                id="message"
                                name="message"
                                rows="6"
                                required
                                class="form-input resize-none"
                                placeholder="Tell me about your project..."
                            >{{ old('message') }}</textarea>
                            @error('message')<p class="text-red-400 text-sm mt-1">{{ $message }}</p>@enderror
                        </div>
                        <button
                            type="submit"
                            class="btn-primary w-full"
                        >
                            Send Message
                        </button>
                    </form>
                </div>

                <div class="space-y-6">
                    <div class="manga-panel">
                        <h2 class="text-2xl font-bold mb-6 text-retro-indigo font-pixel">
                            <span class="text-retro-indigo">$</span> Contact Information
                        </h2>
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <div class="w-10 h-10 bg-retro-teal/20 border-2 border-retro-teal flex items-center justify-center mr-4 flex-shrink-0">
                                    <span class="text-xl">���</span>
                                </div>
                                <div>
                                    <p class="text-gray-400 text-sm font-pixel">Email</p>
                                    <a href="mailto:rayhan@example.com" class="text-retro-teal hover:text-retro-cyan transition-colors">
                                        rayhan@example.com
                                    </a>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="w-10 h-10 bg-retro-indigo/20 border-2 border-retro-indigo flex items-center justify-center mr-4 flex-shrink-0">
                                    <span class="text-xl">���</span>
                                </div>
                                <div>
                                    <p class="text-gray-400 text-sm font-pixel">Availability</p>
                                    <p class="text-gray-300">Open to new projects</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="w-10 h-10 bg-retro-emerald/20 border-2 border-retro-emerald flex items-center justify-center mr-4 flex-shrink-0">
                                    <span class="text-xl">⏱️</span>
                                </div>
                                <div>
                                    <p class="text-gray-400 text-sm font-pixel">Response Time</p>
                                    <p class="text-gray-300">Usually within 24 hours</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="manga-panel">
                        <h2 class="text-2xl font-bold mb-6 text-retro-purple font-pixel">
                            <span class="text-retro-purple">$</span> Connect With Me
                        </h2>
                        <div class="grid grid-cols-2 gap-4">
                            <a href="#" class="flex items-center justify-center px-4 py-3 bg-retro-teal/10 border-2 border-retro-teal/50 hover:bg-retro-teal/20 hover:border-retro-teal transition-all group">
                                <span class="text-retro-teal group-hover:text-retro-cyan transition-colors font-pixel">GitHub</span>
                            </a>
                            <a href="#" class="flex items-center justify-center px-4 py-3 bg-retro-indigo/10 border-2 border-retro-indigo/50 hover:bg-retro-indigo/20 hover:border-retro-indigo transition-all group">
                                <span class="text-retro-indigo group-hover:text-retro-purple transition-colors font-pixel">LinkedIn</span>
                            </a>
                            <a href="#" class="flex items-center justify-center px-4 py-3 bg-retro-emerald/10 border-2 border-retro-emerald/50 hover:bg-retro-emerald/20 hover:border-retro-emerald transition-all group">
                                <span class="text-retro-emerald group-hover:text-retro-teal transition-colors font-pixel">Twitter</span>
                            </a>
                            <a href="#" class="flex items-center justify-center px-4 py-3 bg-retro-purple/10 border-2 border-retro-purple/50 hover:bg-retro-purple/20 hover:border-retro-purple transition-all group">
                                <span class="text-retro-purple group-hover:text-retro-pink transition-colors font-pixel">CodePen</span>
                            </a>
                        </div>
                    </div>

                    <div class="manga-panel">
                        <h3 class="text-lg font-bold mb-4 text-retro-cyan font-pixel">
                            <span class="text-retro-cyan">$</span> Quick Facts
                        </h3>
                        <ul class="space-y-2 text-gray-300 text-sm">
                            <li class="flex items-center">
                                <span class="text-retro-teal mr-2">▸</span>
                                Full-stack development expertise
                            </li>
                            <li class="flex items-center">
                                <span class="text-retro-indigo mr-2">▸</span>
                                Available for freelance projects
                            </li>
                            <li class="flex items-center">
                                <span class="text-retro-emerald mr-2">▸</span>
                                Open to collaboration opportunities
                            </li>
                            <li class="flex items-center">
                                <span class="text-retro-purple mr-2">▸</span>
                                Always learning new technologies
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


