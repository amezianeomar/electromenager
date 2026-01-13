@extends('layouts.Master_page')

@section('content')
<div class="relative bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto">
        <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
            <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
                <polygon points="50,0 100,0 50,100 0,100" />
            </svg>

            {{-- Decorative element for spacing --}}
            <div class="h-1"></div> 

            <div class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28" 
                 x-data="{ shown: false }" x-init="setTimeout(() => shown = true, 100)">
                <div class="sm:text-center lg:text-left">
                    <h1 class="text-4xl tracking-tight font-extrabold text-slate-900 sm:text-5xl md:text-6xl opacity-0 translate-y-4 transition duration-1000 ease-out" 
                        :class="{'opacity-100 translate-y-0': shown}">
                        <span class="block xl:inline">Equip Yourself for</span>
                        <span class="block text-brand-600 xl:inline">Life's Adventures</span>
                    </h1>
                    <p class="mt-3 text-base text-slate-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0 opacity-0 translate-y-4 transition duration-1000 delay-300 ease-out"
                       :class="{'opacity-100 translate-y-0': shown}">
                        Discover top-tier hiking gear for the wilderness and modern appliances for your home. Quality, durability, and style in one place.
                    </p>
                    <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start opacity-0 translate-y-4 transition duration-1000 delay-500 ease-out"
                         :class="{'opacity-100 translate-y-0': shown}">
                        <div class="rounded-md shadow">
                            <a href="{{ url('/produits/hicking') }}" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-brand-600 hover:bg-brand-700 md:py-4 md:text-lg md:px-10 transition transform hover:scale-105">
                                Shop Hiking
                            </a>
                        </div>
                        <div class="mt-3 sm:mt-0 sm:ml-3">
                            <a href="{{ url('/produits/electromenager') }}" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-brand-700 bg-brand-100 hover:bg-brand-200 md:py-4 md:text-lg md:px-10 transition transform hover:scale-105">
                                Shop Appliances
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
        <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full transition duration-1000 ease-in-out hover:scale-105" src="https://images.unsplash.com/photo-1501555088652-021faa106b9b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2560&q=80" alt="Hiking landscape">
    </div>
</div>
@endsection
