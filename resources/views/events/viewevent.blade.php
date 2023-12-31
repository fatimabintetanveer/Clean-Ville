<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Events - Clean Ville</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/event.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    @if(auth()->check())
         @if(auth()->user()->role === 'admin')
            @include('partials.admin_header')
         @else
            @include('partials.user_header')
        @endif
    @endif


    <div class="event-page-container">
    <div class="search">
    <div class="search-bar">
        <form action="{{ route('events.search') }}" method="GET">
            <input type="text" name="search" placeholder="Search by title...">
            <button type="submit">Search</button>
        </form>
    </div>
</div>

    <x-flash_message />
    <div class="event-display">
    @foreach($events as $event)
        <section class="event">
        <img src="{{ Storage::disk('public')->url($event->image) }}" alt="{{ $event->title }}">
            <div class="event-details">
                <h2>{{ $event->title }}</h2>
                <p>From: {{ \Carbon\Carbon::parse($event->start_date)->format('d-M-Y') }}     To: {{ \Carbon\Carbon::parse($event->end_date)->format('d-M-Y') }}</p>
                <p>Location: {{ $event->location }}</p>
                <p>Description: {{ $event->description }}</p>
                <h3 class='tasks'>Tasks:</h3>
                <ul>
                    @foreach($event->tasks as $task)
                        <li>{{ $task->description }}</li>
                    @endforeach
                </ul>

                @if(auth()->check())
                    @if(auth()->user()->role === 'admin')
                        <!-- Admin actions -->
                        <button class="cta-button" onclick="location.href='{{ route('events.edit', ['eventId' => $event->id]) }}'">Edit</button>
                        <button class="cta-button" onclick="deleteEvent({{ $event->id }})">Delete</button>
                    @else
                        <!-- User actions -->
                        @if(now()->gte($event->end_date))
                            <button type="button" class="cta-button" data-bs-toggle="modal" data-bs-target="#VolunteerNotAvailableModal">Volunteer</button>
                        @else
                        <button class="cta-button"  onclick="location.href='{{ route('volunteer.select', ['eventId' => $event->id]) }}'">Volunteer</button>
                        
                        @endif

                                                    
                        
                   

                    @endif
               
                 @endif
            </div>
        </section>
     @endforeach
</div>
    </div>

      <!-- Modal for Volunteering Not Available -->
      <div class="modal fade" id="VolunteerNotAvailableModal" tabindex="-1" aria-labelledby="VolunteerNotAvailableModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="VolunteerNotAvailableModalLabel">Volunteering Not Available</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Volunteering is not available for this event.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                    </div>
                                </div>
                            </div>



        
    <script>
        function deleteEvent(eventId) {
            if (confirm('Are you sure you want to delete this event?')) {
                fetch(`/delete_event/${eventId}`, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                    },
                })
                .then(response => {
                    if (response.ok) {
                        location.reload();
                    } else {
                        console.error('Failed to delete event');
                        setTimeout(() => location.reload(), 1000);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
            }
        }
        </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <!-- Include Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>


</body>
</html>
