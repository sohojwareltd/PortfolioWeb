<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Project;
use App\Models\Post;
use App\Models\ContactSubmission;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $services = Service::query()
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->take(3)
            ->get();

        $projects = Project::query()
            ->where('is_active', true)
            ->when(true, fn ($q) => $q->orderByDesc('is_featured'))
            ->orderBy('sort_order')
            ->take(6)
            ->get();

        $posts = Post::query()
            ->where('is_published', true)
            ->latest('published_at')
            ->take(3)
            ->get();

        return view('pages.home', compact('services', 'projects', 'posts'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function services()
    {
        $services = Service::query()
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        return view('pages.services', compact('services'));
    }

    public function projects()
    {
        $projects = Project::query()
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        return view('pages.projects', compact('projects'));
    }

    public function projectShow(string $slug)
    {
        $project = Project::query()
            ->where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();

        return view('pages.project-show', compact('project'));
    }

    public function blog()
    {
        $posts = Post::query()
            ->where('is_published', true)
            ->latest('published_at')
            ->get();

        return view('pages.blog', compact('posts'));
    }

    public function blogShow(string $slug)
    {
        $post = Post::query()
            ->where('slug', $slug)
            ->where('is_published', true)
            ->firstOrFail();

        return view('pages.blog-show', compact('post'));
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function submitContact(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'subject' => ['nullable', 'string', 'max:255'],
            'message' => ['required', 'string'],
        ]);

        ContactSubmission::create([
            ...$data,
            'status' => 'new',
        ]);

        return back()->with('success', 'Message sent successfully!');
    }
}
