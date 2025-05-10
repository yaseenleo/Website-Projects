<title>{{ $title }}</title>
<meta name="description" content="{{ $description }}" />

@if (!$robots)

    <meta name="robots" content="noindex, nofollow, noarchive" />
    <meta name="googlebot" content="noindex, nofollow" />

@endif

<link rel="canonical" href="{{ request()->url() }}" />
<meta property="og:title" content="{{ $title }}" />
<meta property="og:description" content="{{ $description }}" />
<meta property="og:type" content="Website" />
<meta property="og:url" content="{{ request()->url() }}" />
<meta property="og:image" content="{{ asset('assets/frontend/images/logo/american-book-writer.svg') }}" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="@americanBookWriter" />
<meta name="twitter:title" content="{{ $title }}" />
<meta name="twitter:description" content="{{ $description }}" />
