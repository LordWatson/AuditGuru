<button class="mb-6" @click="theme = theme === 'light' ? 'dark' : 'light'; $dispatch('theme-change', theme);">
    <span x-show="theme === 'light'" class="icon">
        <!-- Light Theme Icon (e.g., Sun) -->
        <i class="fas fa-sun"></i>
    </span>
    <span x-show="theme === 'dark'" class="icon">
        <!-- Dark Theme Icon (e.g., Moon) -->
        <i class="dark:text-gray-200 fas fa-moon"></i>
    </span>
</button>
