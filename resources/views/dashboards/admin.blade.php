@auth
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Public Space Cleaning Scheduler</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/event.css') }}">

</head>

<body>
@include('partials.admin_header')
<x-flash_message />
    <div class="dashboard-container">
        <section class="welcome-message">
            <h2>Welcome, {{ auth()->user()->name }}!</h2>
        </section>
        <section class="calendar-view">
            <!-- Add your calendar view content here -->
        </section>
        <section class="task-assignments">
            <h3>Task Assignments</h3>
            <table>
                <thead>
                    <tr>
                        <th>Volunteer</th>
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
                            <td>{{ $volunteer->user->name }}</td>
                            <td>{{ $volunteer->event->title }}</td>
                            <td>{{ $volunteer->event->location }}</td>
                            <td>{{ $volunteer->task->description }}</td>
                            <td>{{ \Carbon\Carbon::parse($volunteer->preferred_date)->format('d-M-Y') }}</td>
                            
                            <td class="volunteer_status">
                            <form method="post" action="{{ route('user.updateStatus', ['volunteerId' => $volunteer->id]) }}">
                                @csrf
                                
                               
                                <select name="status" class="status_dropdown">
                                    <option value="Pending" @if($volunteer->user->volunteerStatus->status === 'Pending') selected @endif>Pending</option>
                                    <option value="Completed" @if($volunteer->user->volunteerStatus->status === 'Completed') selected @endif>Completed</option>
                                    <option value="In Progress" @if($volunteer->user->volunteerStatus->status === 'In Progress') selected @endif>In Progress</option>
                                </select>
                                <button type="submit">Update Status</button>
                            </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
    </div>
</body>
</html>
@endauth