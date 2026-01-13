<nav x-data="{ mobileMenuOpen: false }" class="fixed w-full z-50 transition-all duration-300 bg-white/80 backdrop-blur-md border-b border-white/20 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            {{-- Logo --}}
            <div class="flex-shrink-0 flex items-center">
                <a href="{{ url('/') }}" class="text-2xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-brand-600 to-indigo-600 hover:opacity-80 transition">
                    <i class="fa-solid fa-bolt mr-2 text-brand-500"></i>ElectroManager
                </a>
            </div>

            {{-- Desktop Menu --}}
            <div class="hidden md:flex space-x-8 items-center">
                <a href="{{ url('/') }}" class="text-slate-600 hover:text-brand-600 font-medium transition-colors duration-200 {{ request()->is('/') ? 'text-brand-600' : '' }}">
                    Home
                </a>
                <a href="{{ url('/produits/hicking') }}" class="text-slate-600 hover:text-brand-600 font-medium transition-colors duration-200 {{ request()->is('produits/hicking') ? 'text-brand-600' : '' }}">
                    Hiking Gear
                </a>
                <a href="{{ url('/produits/electromenager') }}" class="text-slate-600 hover:text-brand-600 font-medium transition-colors duration-200 {{ request()->is('produits/electromenager') ? 'text-brand-600' : '' }}">
                    Appliances
                </a>
                <a href="#" class="px-5 py-2.5 rounded-full bg-brand-600 text-white font-medium hover:bg-brand-700 transition shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                    Sign In
                </a>
            </div>

            {{-- Mobile Menu Button --}}
            <div class="flex items-center md:hidden">
                <button @click="mobileMenuOpen = !mobileMenuOpen" type="button" class="text-slate-600 hover:text-brand-600 p-2 rounded-md focus:outline-none">
                    <i class="fa-solid fa-bars text-2xl" x-show="!mobileMenuOpen"></i>
                    <i class="fa-solid fa-xmark text-2xl" x-show="mobileMenuOpen" x-cloak></i>
                </button>
            </div>
        </div>
    </div>

    {{-- Mobile Menu --}}
    <div x-show="mobileMenuOpen" 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-2"
         class="md:hidden bg-white border-b border-slate-100 shadow-lg" x-cloak>
        <div class="px-4 pt-2 pb-6 space-y-2">
            <a href="{{ url('/') }}" class="block px-3 py-3 rounded-md text-base font-medium text-slate-700 hover:text-brand-600 hover:bg-brand-50 transition">Home</a>
            <a href="{{ url('/produits/hicking') }}" class="block px-3 py-3 rounded-md text-base font-medium text-slate-700 hover:text-brand-600 hover:bg-brand-50 transition">Hiking Gear</a>
            <a href="{{ url('/produits/electromenager') }}" class="block px-3 py-3 rounded-md text-base font-medium text-slate-700 hover:text-brand-600 hover:bg-brand-50 transition">Appliances</a>
        </div>
    </div>
</nav>
<div class="h-20"></div> {{-- Spacer for fixed navbar --}}
