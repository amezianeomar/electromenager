@extends('layouts.Master_page')

@section('content')
<div class="bg-white min-h-[70vh] flex flex-col items-center justify-center px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full text-center space-y-8">
        <div>
            <h1 class="text-9xl font-extrabold text-brand-100 tracking-widest">404</h1>
            <div class="bg-brand-600 px-2 text-sm rounded rotate-12 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-white">
                Page Not Found
            </div>
        </div>
        <h2 class="mt-6 text-3xl font-extrabold text-slate-900">
            Oops! Nothing to see here.
        </h2>
        <p class="mt-2 text-sm text-slate-600">
            The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.
        </p>
        <div class="mt-8">
            <a href="{{ url('/') }}" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-full shadow-sm text-white bg-brand-600 hover:bg-brand-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brand-500 transition transform hover:scale-105">
                <i class="fa-solid fa-arrow-left mr-2"></i> Go Back Home
            </a>
        </div>
    </div>
</div>
@endsection
