<!-- resources/views/partials/user_header.blade.php -->
@auth
<header>

        <div class="logo">
        <img src="{{ asset('images/Clean ville.png') }}" alt="Cleaning Scheduler Logo">
        </div>
        <nav>
            <ul>
            
                <li><a href="{{ route('user.dashboard', ['userId' => auth()->id()]) }}" class="{{ Request::is('dashboard*') ? 'active' : '' }}">Dashboard</a></li>
                <li><a  href="{{ url('/view_event') }}" class="{{ Request::is('view_event*') ? 'active' : '' }}">View Events</a></li>
                <li><a href="/reportissue"  class="{{ Request::is('reportissue*') ? 'active' : '' }}">Report Issue</a></li>
                <li><a href="/faqs" class="{{ Request::is('faqs*') ? 'active' : '' }}">FAQs</a></li>
                <li>
                    <form action="/logout" method="post">
                        @csrf
                        <button class="logout" type="submit">Logout</button>
                    </form>
                    
            </li>
            </ul>
        </nav>
    </header>
    @endauth