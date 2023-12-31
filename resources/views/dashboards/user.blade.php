@auth
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Clean Ville</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/event.css') }}">
</head>

<body>
   
    @include('partials.user_header')
    <x-flash_message />
    <div class="dashboard-container">
        <section class="welcome-message">
            <h2>Welcome, {{auth()->user()->name}}!</h2>
        
        </section>
        <section class="calendar-view">
           
        </section>
        <section class="task-assignments">
            <h3 class='task'>Event Details </h3>
            <table>
                <thead>
                    <tr>
                        <th>Event</th>
                        <th>Location</th>
                        <th>Task</th>
                        <th>Date</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($volunteers as $volunteer)
                        <tr>
                            <td>{{ $volunteer->event->title }}</td>
                            <td>{{ $volunteer->event->location }}</td>
                            <td>{{ $volunteer->task->description }}</td>
                            <td>{{ \Carbon\Carbon::parse($volunteer->preferred_date)->format('d-M-Y') }}</td>
                            <td>{{ $volunteer->user->volunteerStatus->status }} </td>
                        
                            
                        </tr>
                    @endforeach
                   
                </tbody>
            </table>
        </section>
        
    </div>
    

    <x-footer />
</body>
</html>
@endauth