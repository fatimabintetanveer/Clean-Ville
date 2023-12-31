<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volunteer Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/volunteer_registration.css') }}">
   
</head>
<body>
    <header>
        <a href="/dashboard/{{auth()->user()->id}}" class="logo">
            <img src="{{ asset('/images/Clean ville.png') }}" alt="Cleaning Scheduler Logo">
        </a>
    </header>
    <div class="container">
        <form action="{{ route('volunteer.save', ['eventId' => $event->id]) }}" method="post">
            @csrf
            <input type="hidden" name="eventId" value="{{ $event->id }}">

            <h3 class="mb-4">Volunteer Registration</h3>

            <div class="form-group">
                <label for="preferredDate">Select Preferred Date:</label>
                @foreach($dateRange as $date)
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="date_{{ $date }}" name="preferredDate" value="{{ $date }}" required>
                        <label class="form-check-label" for="date_{{ $date }}">{{ \Carbon\Carbon::parse($date)->format('d-M-Y') }}</label>
                    </div>
                @endforeach
            </div>

            <button type="submit" class="btn btn-primary">Save Changes</button>
        </form>
    </div>


    <x-footer />
</body>
</html>
