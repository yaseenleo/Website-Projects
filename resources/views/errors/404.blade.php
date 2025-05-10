<x-app-layout>

    <x-slot name="metadata">

        <x-frontend.seo-metadata
            title="{{ config('app.name') }} - 404 - The page can't be found"
            description="Page not found"
            robots="false"
        />

        <link rel="stylesheet" href="{{ mix('assets/frontend/css/error.css') }}" />

    </x-slot>

    <div class="clearfix"></div>
    <div id="notfound">
        <div class="notfound">
            <div class="notfound-404">
                <h1>Oops!</h1>
                <h2>404 - THE PAGE CAN'T BE FOUND</h2>
            </div>
            <a href="{{ route('home') }}">Go TO Homepage</a>
        </div>
    </div>
    <div class="clearfix"></div>

</x-app-layout>
