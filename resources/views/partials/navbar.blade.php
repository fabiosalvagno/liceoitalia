<nav x-data="{ open: false }" class="bg-pink-300 shadow-md">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
        <!-- Logo -->
        <div class="text-xl font-bold text-white">Liceo Italia</div>

        <!-- Hamburger (solo su mobile) -->
        <div class="md:hidden">
            <button @click="open = !open" class="text-white focus:outline-none">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>

        <!-- Menu Desktop -->
        <ul class="hidden md:flex space-x-6">
            <li><a href="{{ url('/') }}" class="text-white hover:underline">Home</a></li>
            <li><a href="{{ url('/about') }}" class="text-white hover:underline">About</a></li>
            <li><a href="{{ url('/books') }}" class="text-white hover:underline">Books</a></li>
            <li><a href="https://docs.google.com/forms/..." target="_blank" class="text-white font-bold hover:underline">Contact</a></li>
        </ul>
    </div>

    <!-- Menu Mobile -->
    <div x-show="open" x-transition class="md:hidden px-4 pb-4 space-y-2">
        <a href="{{ url('/') }}" class="block text-white hover:underline">Home</a>
        <a href="{{ url('/about') }}" class="block text-white hover:underline">About</a>
        <a href="{{ url('/books') }}" class="block text-white hover:underline">Books</a>
        <a href="https://docs.google.com/forms/..." target="_blank" class="block text-white font-bold hover:underline">Contact</a>
    </div>
</nav>
