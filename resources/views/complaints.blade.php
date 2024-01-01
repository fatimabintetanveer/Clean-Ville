<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Issues - Clean Ville</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/misc.css') }}">
</head>

<body>
    @include('partials.admin_header')
    <div class="view-issues-page-container">     
    <h2 class="h2">Reported Issues</h2>
        <section class="issue">
            @foreach ($complaints as $complaint)     
            <div class="issue-details">
                <h2>Title: {{$complaint->complaint_type}}</h2>
                <p>Description: {{$complaint->description}}</p>
                <p>Reported by: {{$complaint->user_name}}</p>
                
            </div>
            @endforeach
        </section>

    </div>
    <x-footer />
</body>
</html>
