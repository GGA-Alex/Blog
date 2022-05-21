@extends('layouts.blogLayouts.blogLayout')

@section('contenido')
    <div class="flex items-center pb-6">
        <img src="{{ asset('assets/img/icon-story.png') }}" alt="icon story" />
        <h3 class="ml-3 font-body text-2xl font-semibold text-primary dark:text-white">
            Blogs
        </h3>
        <a href="/blog"
            class="flex items-center pl-10 font-body italic text-green transition-colors hover:text-secondary dark:text-green-light dark:hover:text-secondary">
            Todos los posts
            <img src="/assets/img/long-arrow-right.png" class="ml-3" alt="arrow right" />
        </a>
    </div>
    @foreach ($posts as $post)
    <div class="pt-8">
        <div class="border-b border-grey-lighter pt-10 pb-8">
            <div class="flex items-center">
                @foreach ( $post->tags as $tag)
                    <span
                    class="mb-4 ml-4 inline-block rounded-full bg-yellow-light px-2 py-1 font-body text-sm text-yellow-dark">{{ $tag->name }}</span>
                @endforeach
            </div>
            <a href="/post"
                class="block font-body text-lg font-semibold text-primary transition-colors hover:text-green dark:text-white dark:hover:text-secondary">{{ $post->name }}r</a>
            <div class="flex items-center pt-4">
                <p class="pr-2 font-body font-light text-primary dark:text-white">
                    {{ $post->created_at->format('d/m/Y') }}
                </p>
                <span class="font-body text-grey dark:text-white">//</span>
                <p class="pl-2 font-body font-light text-primary dark:text-white">
                    {{ $post->user->name }} &nbsp;
                </p>
                <span class="font-body text-grey dark:text-white">//</span>
                <p class="pl-2 font-body font-light text-primary dark:text-white">
                    {{ $post->category->name }}
                </p>
            </div>
        </div>
    </div>

    @endforeach
@endsection
