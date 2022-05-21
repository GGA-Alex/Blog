@extends('layouts.blogLayouts.blogLayout')

@section('contenido')
    <div>
        <img src="/assets/img/icon-blog.png" alt="icon envelope" />
    </div>

    <h1 class="pt-5 font-body text-4xl font-semibold text-primary dark:text-white md:text-5xl lg:text-6xl">
        Blog
    </h1>

    <div class="pt-3 sm:w-3/4">
        <p class="font-body text-xl font-light text-primary dark:text-white">
            Articulos, tutoriales, snippets y cualquier cosa que te puedas imaginar.
        </p>
    </div>

    <div class="pt-8 lg:pt-12">
        @foreach ($posts as $post)
            <div class="pt-8">
                <div class="border-b border-grey-lighter pt-10 pb-8">
                    <div class="flex items-center">
                        @foreach ($post->tags as $tag)
                            <span
                                class="mb-4 ml-4 inline-block rounded-full bg-green-light px-2 py-1 font-body text-sm text-green-dark">{{ $tag->name }}</span>
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
        {{ $posts->links('vendor.pagination.default') }}
    </div>
@endsection
