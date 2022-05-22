@extends('layouts.blogLayouts.blogLayout')

@section('contenido')
    <div class="border-b border-grey-lighter pb-8 sm:pb-12">
        @foreach ($post->tags as $tag)
        <span
        class="mb-5 inline-block rounded-full bg-green-light px-2 py-1 font-body text-sm text-green sm:mb-8">{{ $tag->name }}</span>
        @endforeach
        <h2
            class="block font-body text-3xl font-semibold leading-tight text-primary dark:text-white sm:text-4xl md:text-5xl">
            {{ $post->name }}
        </h2>
        <div class="flex items-center pt-5 sm:pt-8">
            <p class="pr-2 font-body font-light text-primary dark:text-white">
                {{ $post->created_at->format('d/m/Y') }}
            </p>
            <span class="vdark:text-white font-body text-grey">//</span>
            <p class="pl-2 font-body font-light text-primary dark:text-white">
                {{ $post->user->name }}
            </p>
        </div>
    </div>
    <div class="prose prose max-w-none border-b border-grey-lighter py-8 dark:prose-dark sm:py-12">
        {{ $post->body }}
    </div>
@endsection
