<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ - Clean Ville</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/misc.css') }}">
</head>

<body>
    @include('partials.user_header')
        <div class="faq-page-container">
        <h1>Frequently Asked Questions</h1>
        @foreach($faqs as $faq)
            <section class="faq">
                <h2>{{ $faq->question }}</h2>
                <p>{{ $faq->answer }}</p>
                
            </section>
        @endforeach
    </div>

<x-footer />
</body>
</html>
