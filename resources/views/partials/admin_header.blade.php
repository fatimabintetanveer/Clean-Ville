<!-- resources/views/partials/admin_header.blade.php -->

<header>

    <div class="logo">
        <img src="{{ asset('/images/Clean ville.png') }}" alt="Cleaning Scheduler Logo">
    </div>
    <nav>
        <ul>
            <li><a href="{{ auth()->check() ? route('user.dashboard', ['userId' => auth()->id()]) : route('login') }}" class="{{ Request::is('dashboard*') ? 'active' : '' }}">Dashboard</a></li>
            <li><a href="{{ url('/create_event') }}" class="{{ Request::is('create_event*') ? 'active' : '' }}">Create Event</a></li>
            <li><a href="{{ url('/view_event') }}" class="{{ Request::is('view_event*') ? 'active' : '' }}">View Events</a></li>
            <li><a href="{{ url('/complaints') }}">Complaints</a></li>
            <li>  @auth
                <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button  class="logout" type="submit">Logout</button>
                    </form>
                    @endauth
            </li>
        </ul>
    </nav>
</header>

