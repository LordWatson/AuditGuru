<button @click="theme = theme === 'light' ? 'dark' : 'light'; $dispatch('theme-change', theme);">
    Toggle Theme
</button>
