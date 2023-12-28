<?php

namespace App\Http\Controllers;
use App\Models\Event;
use App\Models\Task;
use App\Models\EventVolunteer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    public function create()
    {
        return view('events.create_event');
    }

    public function showEvents(Request $request)
    {
        $search = $request->input('search');
        
        if ($search) {
            $events = Event::where('title', 'like', '%' . $search . '%')->get();
        } else {
            $events = Event::all();
        }
    
        return view('events.viewevent', ['events' => $events]);
    }
    
    
    public function store(Request $request)
    {
        //dd($request->all());
        // Validate the request data
        $request->validate([
            'event-name' => 'required|string|max:255',
            'fromperiod' => 'required|date',
            'toperiod' => 'required|date',
            'event-location' => 'required|string',
            'event-description' => 'required|string',
            'event-image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        // Store the event image
        $imagePath = $request->file('event-image')->store('event_images', 'public');
    
        // Create the event
        $event = Event::create([
            'title' => $request->input('event-name'),
            'description' => $request->input('event-description'),
            'start_date' => $request->input('fromperiod'),
            'end_date' => $request->input('toperiod'),
            'location' => $request->input('event-location'),
            'image' => $imagePath,
        ]);
    
        // Extract tasks as an array from the comma-separated string
        $tasks = explode(',', $request->input('event-tasks'));
    
        // Create tasks for the event
        foreach ($tasks as $taskName) {
            $event->tasks()->create([
                'description' => $taskName,
            ]);
        }
    
        // Redirect back with a success message
        return redirect()->route('user.dashboard', ['userId' => auth()->id()])->with('success', 'Event created successfully!');
    }


    public function editEvent($eventId)
    {
        $event = Event::findOrFail($eventId);

        return view('events.edit_event', ['event' => $event]);
    }




   
    public function updateEvent(Request $request, $eventId)
    {
        $request->validate([
            'event-name' => 'required|string|max:255',
            'fromperiod' => 'required|date',
            'toperiod' => 'required|date',
            'event-location' => 'required|string',
            'event-description' => 'required|string',
            'event-image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);

        $event = Event::findOrFail($eventId);

        // Update event details
        $event->update([
            'title' => $request->input('event-name'),
            'description' => $request->input('event-description'),
            'start_date' => $request->input('fromperiod'),
            'end_date' => $request->input('toperiod'),
            'location' => $request->input('event-location'),
        ]);

        // Update tasks
        $tasks = explode(',', $request->input('event-tasks'));
        $event->tasks()->delete(); // Remove existing tasks
        foreach ($tasks as $taskName) {
            $event->tasks()->create([
                'description' => $taskName,
            ]);
        }


            // Store the new image
            $imagePath = $request->file('event-image')->store('event_images', 'public');

            // Update event with the new image path
            $event->update(['image' => $imagePath]);
        

        return redirect()->route('events.show', ['eventId' => $eventId])->with('success', 'Event updated successfully!');
    

    }
    
    public function deleteEvent($eventId)
    {
        $event = Event::findOrFail($eventId);
        $event->delete();

        return redirect()->route('events.show')->with('success', 'Event deleted successfully!');
    }


    

    public function getDateRange(Request $request,$eventId)
{
   
    $event = Event::find($eventId);

    if (!$event) {
        return response()->json(['error' => 'Event not found'], 404);
    }

    $dateRange = $event->getDateRange();

    return view('events.select_date', compact('event', 'dateRange'));
}



public function saveVolunteer(Request $request,$eventId)
{   
   
    // Validate the request as needed

    // Get user ID from the authenticated user
    $userId = auth()->user()->id;

    // Get data from the request
    $eventId = $request->input('eventId');
    $preferredDate = $request->input('preferredDate');

    // Save the volunteer information to the database
    EventVolunteer::create([
        'user_id' => $userId,
        'event_id' => $eventId,
        'preferred_date' => $preferredDate,
    ]);

    // Respond with a success message or other appropriate response
    return redirect()->route('events.show');
}






}
