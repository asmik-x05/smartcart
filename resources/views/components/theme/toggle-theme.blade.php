<button onclick="toggleTheme()" class="bg-surface border border-border p-2 rounded-lg text-text cursor-pointer">
    <i class="ri-sun-fill hidden dark:block"></i>
    <i class="ri-moon-fill dark:hidden"></i>
</button>

<script>
    function toggleTheme() {
        document.documentElement.classList.toggle('dark');

        localStorage.setItem(
            'theme',
            document.documentElement.classList.contains('dark') ?
            'dark' :
            'light'
        );
    }
</script>
