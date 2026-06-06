<header class="fixed top-0 left-0 right-0 z-50 bg-[#fef7ff]/80 backdrop-blur-md flex justify-between items-center px-6 py-4 w-full transition-all duration-300">
    <div class="flex items-center gap-12">
        <div class="flex items-center gap-2 mb-3">
            <img src="{{ asset('images/logo.png') }}" alt="Company logo" class="w-24 h-auto mx-auto block mb-1.5 mt-2" />
        </div>

        <nav class="hidden md:flex items-center gap-8">
            <a class="text-sm text-[#4a4452] hover:text-[#6E4AB6] transition-all font-medium" href="#">Personal</a>
            <a class="text-sm text-[#4a4452] hover:text-[#6E4AB6] transition-all font-medium" href="#">Business</a>
            <a class="text-sm text-[#4a4452] hover:text-[#6E4AB6] transition-all font-medium" href="#">Wealth</a>
            <a class="text-sm text-[#4a4452] hover:text-[#6E4AB6] transition-all font-medium" href="#">About</a>
        </nav>
    </div>

    <div class="flex items-center gap-6">
        <a href="{{ url('/register') }}">
            <button class="hidden sm:block  text-sm text-[#6E4AB6] font-semibold px-6 py-2 hover:bg-[#ede6f0] rounded-full transition-all active:scale-95">Register</button>
        </a>
        <a href="{{ url('/login') }}">
            <button class="bg-[#6E4AB6] text-[#ffffff]  text-sm font-semibold px-8 py-2 rounded-full shadow-sm hover:shadow-lg hover:brightness-110 transition-all active:scale-95">Log in</button>
         </a>
    </div>
</header>