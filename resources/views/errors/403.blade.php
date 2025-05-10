<x-app-layout>

    <x-slot name="metadata">

        <x-frontend.seo-metadata
            title="{{ config('app.name') }} - 403 - Access Forbidden"
            description="Access to the requested resource is forbidden."
            robots="false"
        />

        <link rel="stylesheet" href="{{ mix('assets/frontend/css/error.css') }}" />

    </x-slot>

    <div class="clearfix"></div>
    <div id="notfound">
        <div class="notfound">
            <div class="notfound-404">
                <h1>Oops!</h1>
                <h2>403 - ACCESS FORBIDDEN</h2>
            </div>
            <a href="{{ route('home') }}">Go TO Homepage</a>
        </div>
    </div>
    <div class="clearfix"></div>

</x-app-layout>
