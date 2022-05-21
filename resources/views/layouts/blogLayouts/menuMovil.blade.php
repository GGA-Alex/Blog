<div class="pointer-events-none fixed inset-0 z-50 flex bg-black bg-opacity-80 opacity-0 transition-opacity lg:hidden"
    :class="isMobileMenuOpen ? 'opacity-100 pointer-events-auto' : ''">
    <div class="ml-auto w-2/3 bg-green p-4 md:w-1/3">
        <i class="bx bx-x absolute top-0 right-0 mt-4 mr-4 text-4xl text-white" @click="isMobileMenuOpen = false"></i>
        <ul class="mt-8 flex flex-col">

            <li class="">
                <a href="/" class="mb-3 block px-2 font-body text-lg font-medium text-white">Inicio</a>
            </li>

            <li class="">
                <a href="{{ route('login') }}" class="mb-3 block px-2 font-body text-lg font-medium text-white">Iniciar sesión</a>
            </li>

            <li class="">
                <a href="{{ route('register') }}" class="mb-3 block px-2 font-body text-lg font-medium text-white">Registrarse</a>
            </li>

        </ul>
    </div>
</div>
