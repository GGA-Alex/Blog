@extends('layouts.blogLayouts.blogLayout')

@section('slogan')
    <div class="border-b border-grey-lighter py-16 lg:py-20">
        <h1 class="pt-3 font-body text-4xl font-semibold text-primary dark:text-white md:text-5xl lg:text-6xl">
            Hola!
        </h1>
        <h1 class="pt-3 font-body text-4xl font-semibold text-primary dark:text-white md:text-5xl lg:text-6xl">
            Esto es bloggie
        </h1>
    </div>
@endsection

@section('contenido')
    <div class="flex items-center pb-6">
        <img src="{{ asset('assets/img/icon-story.png') }}" alt="icon story" />
        <h3 class="ml-3 font-body text-2xl font-semibold text-primary dark:text-white">
            Blogs
        </h3>
        <a href="{{ route('blog.index') }}"
            class="flex items-center pl-10 font-body italic text-green transition-colors hover:text-secondary dark:text-green-light dark:hover:text-secondary">
            Todos los posts
            <img src="/assets/img/long-arrow-right.png" class="ml-3" alt="arrow right" />
        </a>
    </div>
    @foreach ($posts as $post)
        <div class="pt-8">
            <div class="border-b border-grey-lighter pt-10 pb-8">
                <div class="flex items-center">
                    @foreach ($post->tags as $tag)
                        <span
                            class="mb-4 ml-4 inline-block rounded-full bg-green-light px-2 py-1 font-body text-sm text-green-dark">{{ $tag->name }}</span>
                    @endforeach
                </div>
                <a href="{{ route('blog.show', compact('post')) }}"
                    class="block font-body text-lg font-semibold text-primary transition-colors hover:text-green dark:text-white dark:hover:text-secondary">{{ $post->name }}r</a>
                <div class="flex items-center pt-4">
                    <p class="pr-2 font-body font-light text-primary dark:text-white">
                        {{ $post->created_at->format('d/m/Y') }}
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
