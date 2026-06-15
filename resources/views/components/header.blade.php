<header class="bg-background border-b border-border sticky top-0 z-50">
    <nav class="max-w-7xl mx-auto px-4 h-16 flex items-center justify-between">

        <a href="{{ route('home') }}" class=" text-xl font-bold text-text-heading ">
            <span class="text-primary">{{ config('app.name') }}</span>
        </a>


        <div class="hidden md:flex items-center gap-6">
            <a href="{{ route('home') }}" class="text-text hover:text-link-hover">Home</a>
            <a href="{{ route('shop') }}" class="text-text hover:text-link-hover">Shop</a>
            <a href="{{ route('categories') }}" class="text-text hover:text-link-hover">Categories</a>
            <a href="{{ route('deals') }}" class="text-text hover:text-link-hover">Deals</a>
        </div>

        <div class="flex items-center gap-6">
            <button class="relative text-text">
                <i class="ri-shopping-cart-line text-xl"></i>
                <span
                    class="absolute -top-2 -right-2 bg-secondary text-white text-xs w-5 h-5 rounded-full flex items-center justify-center font-bold">
                    3
                </span>
            </button>

            <x-theme.toggle-theme />
            <x-user.user-avatar />
        </div>
    </nav>
</header>
