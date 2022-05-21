<div class="hidden lg:block">
    <ul class="flex items-center">
        <li class="group relative mr-6 mb-1">
            <div
                class="absolute left-0 bottom-0 z-20 h-0 w-full opacity-75 transition-all group-hover:h-2 group-hover:bg-yellow">
            </div>
            <a href="/"
                class="relative z-30 block px-2 font-body text-lg font-medium text-primary transition-colors group-hover:text-green dark:text-white dark:group-hover:text-secondary">Inicio</a>
        </li>

        <li class="group relative mr-6 mb-1">
            <div
                class="absolute left-0 bottom-0 z-20 h-0 w-full opacity-75 transition-all group-hover:h-2 group-hover:bg-yellow">
            </div>
            <a href="{{ route('login') }}"
                class="relative z-30 block px-2 font-body text-lg font-medium text-primary transition-colors group-hover:text-green dark:text-white dark:group-hover:text-secondary">Iniciar sesión</a>
        </li>

        <li class="group relative mr-6 mb-1">
            <div
                class="absolute left-0 bottom-0 z-20 h-0 w-full opacity-75 transition-all group-hover:h-2 group-hover:bg-yellow">
            </div>
            <a href="{{ route('register') }}"
                class="relative z-30 block px-2 font-body text-lg font-medium text-primary transition-colors group-hover:text-green dark:text-white dark:group-hover:text-secondary">Registrarse</a>
        </li>

        <li>
            <i class="bx cursor-pointer text-3xl text-primary dark:text-white" @click="themeSwitch()"
                :class="isDarkMode ? 'bxs-sun' : 'bxs-moon'"></i>
        </li>
    </ul>
</div>
