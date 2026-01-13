@extends('layouts.Master_page')

@section('content')
<div class="bg-white">
    <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
        <h2 class="text-3xl font-extrabold tracking-tight text-slate-900 mb-8 capitalize">
            {{ $categorie }} Collection
        </h2>

        <div class="grid grid-cols-1 gap-y-10 sm:grid-cols-2 gap-x-6 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8"
             x-data="{ shown: false }" x-init="setTimeout(() => shown = true, 100)">
            
            @foreach($produits as $index => $produit)
                <div class="group relative bg-white border border-slate-200 rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 opacity-0 translate-y-4"
                     :class="{'opacity-100 translate-y-0': shown}"
                     style="transition-delay: {{ $index * 100 }}ms">
                    
                    {{-- Image Aspect Ratio --}}
                    <div class="w-full min-h-80 bg-slate-200 aspect-w-1 aspect-h-1 rounded-t-2xl overflow-hidden group-hover:opacity-90 lg:h-80 lg:aspect-none relative">
                        <img src="{{ $produit['image'] }}" alt="{{ $produit['name'] }}" class="w-full h-full object-center object-cover lg:w-full lg:h-full transition duration-700 ease-in-out group-hover:scale-110">
                        
                        {{-- Quick Action Overlay --}}
                        <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300 bg-black/20">
                             <span class="bg-white text-slate-900 font-semibold py-2 px-4 rounded-full shadow-lg transform scale-75 group-hover:scale-100 transition">View Details</span>
                        </div>
                    </div>

                    <div class="p-6">
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="text-lg font-semibold text-slate-900">
                                    <a href="#">
                                        <span aria-hidden="true" class="absolute inset-0"></span>
                                        {{ $produit['name'] }}
                                    </a>
                                </h3>
                                <p class="mt-1 text-sm text-slate-500 capitalize">{{ $categorie }}</p>
                            </div>
                            <p class="text-lg font-bold text-brand-600">${{ $produit['price'] }}</p>
                        </div>
                        
                        <div class="mt-6">
                            <button type="button" class="w-full bg-slate-900 border border-transparent rounded-lg py-3 px-8 flex items-center justify-center text-base font-medium text-white hover:bg-brand-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brand-500 transition-colors shadow-lg shadow-brand-500/30">
                                Buy Now
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
