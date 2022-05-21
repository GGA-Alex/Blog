<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />

    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />

    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" />

    <title>Homepage | Atlas Template</title>

    <meta property="og:title" content="Homepage | Atlas Template" />

    <meta property="og:locale" content="en_US" />

    <link rel="canonical" href="https://atlas.tailwindmade.com/" />

    <meta property="og:url" content="https://atlas.tailwindmade.com/" />

    <meta name="description"
        content="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua." />

    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}" />

    <meta property="og:site_name" content="Atlas Template" />

    <meta property="og:image" content="https://atlas.tailwindmade.com/assets/img/social.jpg" />

    <meta name="twitter:card" content="summary_large_image" />

    <meta name="twitter:site" content="@tailwindmade" />

    <link crossorigin="crossorigin" href="https://fonts.gstatic.com" rel="preconnect" />

    <link as="style" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="preload" />

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" />

    <link crossorigin="anonymous" href="{{ asset('assets/styles/main.min.css') }}" media="screen" rel="stylesheet" />

    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.5.0/highlight.min.js"></script>

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.5.0/styles/atom-one-dark.min.css" />

    <script>
        hljs.initHighlightingOnLoad();
    </script>

    <!--Alpine Js V3-->
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>


<body x-data="global()" x-init="themeInit()"
    :class="isMobileMenuOpen ? 'max-h-screen overflow-hidden relative' : ''" class="dark:bg-primary">

    <div id="main">
        <div class="container mx-auto">
            <div class="flex items-center justify-between py-6 lg:py-10">
                <a href="/" class="flex items-center">
                    <span href="/" class="mr-2">
                        <img src="{{ asset('/assets/img/logo.svg') }}" alt="logo" />
                    </span>
                    <p class="hidden font-body text-2xl font-bold text-primary dark:text-white lg:block">
                        Bloggie
                    </p>
                </a>
                @include('layouts.blogLayouts.cambioTema')
                @include('layouts.blogLayouts.menuComputadora')
            </div>
        </div>

        @include('layouts.blogLayouts.menuMovil')

        <div>
            <div class="container mx-auto">
                <div class="border-b border-grey-lighter py-16 lg:py-20">
                    <h1
                        class="pt-3 font-body text-4xl font-semibold text-primary dark:text-white md:text-5xl lg:text-6xl">
                        Hola!
                    </h1>
                    <h1
                        class="pt-3 font-body text-4xl font-semibold text-primary dark:text-white md:text-5xl lg:text-6xl">
                        Esto es bloggie
                    </h1>
                </div>

                <div class="py-16 lg:py-20">
                    @yield('contenido')
                </div>
            </div>
        </div>

        <div class="container mx-auto">
            <div
                class="flex flex-col items-center justify-between py-10 sm:flex-row sm:py-12">
                <div class="mr-auto flex flex-col items-center sm:flex-row">
                    <a href="/" class="mr-auto sm:mr-6">
                        <img src="{{ asset('assets/img/logo.svg') }}" alt="logo" />
                    </a>
                    <p class="pt-5 font-body font-light text-primary dark:text-white sm:pt-0">
                        ©2020 Bloggie.
                    </p>
                </div>
            </div>
        </div>

    </div>

    <script src="{{ asset('assets/js/main.js') }}"></script>


</body>

</html>
