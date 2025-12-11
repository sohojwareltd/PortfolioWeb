@extends('layouts.app')

@section('title', 'About | Rayhan')
@section('meta_description', 'About Rayhan - Full-stack Developer. Learn about my journey, skills, and passion for building innovative web solutions.')

@section('content')
    <section class="section-container pt-32">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-16">
                <h1 class="text-2xl sm:text-3xl md:text-5xl lg:text-6xl font-bold mb-4 font-pixel">
                    <span class="text-retro-teal">A</span><span class="text-retro-cyan">B</span><span class="text-retro-emerald">O</span><span class="text-retro-indigo">U</span><span class="text-retro-purple">T</span>
                </h1>
                <div class="inline-block px-6 py-2 border-2 border-retro-teal/50 bg-dark-surface/50 backdrop-blur-sm">
                    <p class="text-lg text-retro-teal font-pixel">Who I Am</p>
                </div>
            </div>

            <div class="manga-panel mb-12">
                <h2 class="text-3xl font-bold mb-6 text-retro-teal font-pixel">Biography</h2>
                <div class="space-y-4 text-gray-300 leading-relaxed">
                    <p>
                        I'm <span class="text-retro-cyan font-semibold">Rayhan</span>, a full-stack developer passionate about creating
                        innovative web solutions that blend modern technology with thoughtful design. My journey in software development
                        has been driven by a love for building things that matter—applications that solve real problems and delight users.
                    </p>
                    <p>
                        With a strong foundation in both frontend and backend technologies, I specialize in crafting seamless,
                        performant applications that stand the test of time. I believe in writing clean, maintainable code and
                        following best practices that make development a joy rather than a chore.
                    </p>
                    <p>
                        When I'm not coding, you'll find me exploring the latest tech trends, diving into manga and retro aesthetics
                        for design inspiration, or working on side projects that push the boundaries of what's possible on the web.
                    </p>
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-6 mb-12">
                <div class="manga-panel">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-retro-teal/20 border-2 border-retro-teal flex items-center justify-center mr-4">
                            <span class="text-2xl">💻</span>
                        </div>
                        <h3 class="text-xl font-bold text-retro-teal font-pixel">Full-Stack Developer</h3>
                    </div>
                    <p class="text-gray-300">
                        Proficient in modern web technologies across the entire stack, from responsive UIs to scalable backend architectures.
                    </p>
                </div>

                <div class="manga-panel">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-retro-indigo/20 border-2 border-retro-indigo flex items-center justify-center mr-4">
                            <span class="text-2xl">🚀</span>
                        </div>
                        <h3 class="text-xl font-bold text-retro-indigo font-pixel">Loves Building</h3>
                    </div>
                    <p class="text-gray-300">
                        Passionate about creating new things and turning ideas into reality through code and creativity.
                    </p>
                </div>

                <div class="manga-panel">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-retro-emerald/20 border-2 border-retro-emerald flex items-center justify-center mr-4">
                            <span class="text-2xl">⚡</span>
                        </div>
                        <h3 class="text-xl font-bold text-retro-emerald font-pixel">Tech Enthusiast</h3>
                    </div>
                    <p class="text-gray-300">
                        Always learning and exploring new technologies, frameworks, and methodologies to stay at the cutting edge.
                    </p>
                </div>

                <div class="manga-panel">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-retro-purple/20 border-2 border-retro-purple flex items-center justify-center mr-4">
                            <span class="text-2xl">🎨</span>
                        </div>
                        <h3 class="text-xl font-bold text-retro-purple font-pixel">Design Aficionado</h3>
                    </div>
                    <p class="text-gray-300">
                        Inspired by retro aesthetics, manga art, and Islamic geometric patterns to create unique visual experiences.
                    </p>
                </div>
            </div>

            <div class="manga-panel">
                <h2 class="text-3xl font-bold mb-6 text-retro-teal font-pixel">Technical Skills</h2>
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <h3 class="text-lg font-semibold mb-3 text-retro-cyan">Frontend</h3>
                        <ul class="space-y-2 text-gray-300">
                            <li class="flex items-center">
                                <span class="text-retro-teal mr-2">▸</span>
                                HTML5, CSS3, JavaScript (ES6+)
                            </li>
                            <li class="flex items-center">
                                <span class="text-retro-teal mr-2">▸</span>
                                React, Vue.js, Tailwind CSS
                            </li>
                            <li class="flex items-center">
                                <span class="text-retro-teal mr-2">▸</span>
                                Three.js, WebGL, Canvas API
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold mb-3 text-retro-indigo">Backend</h3>
                        <ul class="space-y-2 text-gray-300">
                            <li class="flex items-center">
                                <span class="text-retro-indigo mr-2">▸</span>
                                Node.js, Python, PHP
                            </li>
                            <li class="flex items-center">
                                <span class="text-retro-indigo mr-2">▸</span>
                                RESTful APIs, GraphQL
                            </li>
                            <li class="flex items-center">
                                <span class="text-retro-indigo mr-2">▸</span>
                                Databases (SQL &amp; NoSQL)
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold mb-3 text-retro-emerald">DevOps &amp; Tools</h3>
                        <ul class="space-y-2 text-gray-300">
                            <li class="flex items-center">
                                <span class="text-retro-emerald mr-2">▸</span>
                                Git, Docker, CI/CD
                            </li>
                            <li class="flex items-center">
                                <span class="text-retro-emerald mr-2">▸</span>
                                AWS, Cloud Services
                            </li>
                            <li class="flex items-center">
                                <span class="text-retro-emerald mr-2">▸</span>
                                Testing &amp; Quality Assurance
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold mb-3 text-retro-purple">Design &amp; UX</h3>
                        <ul class="space-y-2 text-gray-300">
                            <li class="flex items-center">
                                <span class="text-retro-purple mr-2">▸</span>
                                UI/UX Design Principles
                            </li>
                            <li class="flex items-center">
                                <span class="text-retro-purple mr-2">▸</span>
                                Responsive Design
                            </li>
                            <li class="flex items-center">
                                <span class="text-retro-purple mr-2">▸</span>
                                Accessibility (WCAG)
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

