<div class="flex items-center lg:hidden">
    <i class="bx mr-8 cursor-pointer text-3xl text-primary dark:text-white" @click="themeSwitch()"
        :class="isDarkMode ? 'bxs-sun' : 'bxs-moon'"></i>

    <svg width="24" height="15" xmlns="http://www.w3.org/2000/svg" @click="isMobileMenuOpen = true"
        class="fill-current text-primary dark:text-white">
        <g fill-rule="evenodd">
            <rect width="24" height="3" rx="1.5" />
            <rect x="8" y="6" width="16" height="3" rx="1.5" />
            <rect x="4" y="12" width="20" height="3" rx="1.5" />
        </g>
    </svg>
</div>
