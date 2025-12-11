<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Rayhan | Full-Stack Developer')</title>
    <meta name="description" content="@yield('meta_description', 'Rayhan - Full-stack Developer Portfolio')">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Press+Start+2P&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-dark-bg text-gray-100 antialiased page-transition">
    @php
        $navLinks = [
            ['label' => 'Home', 'route' => 'home'],
            ['label' => 'About', 'route' => 'about'],
            ['label' => 'Services', 'route' => 'services'],
            ['label' => 'Projects', 'route' => 'projects'],
            ['label' => 'Blog', 'route' => 'blog'],
            ['label' => 'Contact', 'route' => 'contact'],
        ];
    @endphp

    <nav id="navbar" class="fixed top-0 w-full z-50 bg-dark-surface/80 backdrop-blur-md border-b border-retro-teal/20 fade-in">
        <div class="container mx-auto px-4 py-4">
            <div class="flex items-center justify-between">
                <a href="{{ route('home') }}" class="flex items-center gap-2 text-lg sm:text-xl md:text-2xl font-bold text-retro-teal font-pixel tracking-wider transition-opacity hover:opacity-80">
                
                    &lt;RAYHAN/&gt;
                </a>
                <div class="hidden md:flex items-center space-x-8">
                    @foreach ($navLinks as $link)
                        @php $isActive = Route::is($link['route']); @endphp
                        <a
                            href="{{ route($link['route']) }}"
                            class="{{ $isActive ? 'text-retro-teal font-medium' : 'text-gray-300' }} transition-opacity hover:opacity-100 hover:text-retro-teal"
                        >
                            {{ $link['label'] }}
                        </a>
                    @endforeach
                </div>
                <button id="mobile-menu-toggle" class="md:hidden text-retro-teal" aria-label="Toggle navigation">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
            <div id="mobile-menu" class="hidden md:hidden mt-4 pb-4 space-y-2">
                @foreach ($navLinks as $link)
                    @php $isActive = Route::is($link['route']); @endphp
                    <a
                        href="{{ route($link['route']) }}"
                        class="block py-2 {{ $isActive ? 'text-retro-teal' : 'text-gray-300' }} transition-opacity hover:opacity-80 hover:text-retro-teal"
                    >
                        {{ $link['label'] }}
                    </a>
                @endforeach
            </div>
        </div>
    </nav>

    <div id="astronaut" class="fixed bottom-0 left-0 z-20 cursor-pointer">
        <img
            id="astronaut-sprite"
            src="{{ asset('assets/patterns/astronut/jade-guilbot-astronaute-walk-gif.gif') }}"
            alt="Astronaut"
            class="w-24 sm:w-32 md:w-40 h-auto"
        />
    </div>

    <main>
        @yield('content')
    </main>

    <footer class="bg-dark-surface border-t border-retro-teal/20 py-8 mt-20">
        <div class="container mx-auto px-4 text-center">
            <p class="text-gray-400 text-sm mb-4">&copy; 2024 Rayhan. Built with passion and precision.</p>
            <div class="flex justify-center space-x-6">
                <a href="#" class="text-retro-teal/70 transition-opacity hover:opacity-100 hover:text-retro-teal">GitHub</a>
                <a href="#" class="text-retro-teal/70 transition-opacity hover:opacity-100 hover:text-retro-teal">LinkedIn</a>
                <a href="#" class="text-retro-teal/70 transition-opacity hover:opacity-100 hover:text-retro-teal">Twitter</a>
            </div>
        </div>
    </footer>
</body>
</html>

