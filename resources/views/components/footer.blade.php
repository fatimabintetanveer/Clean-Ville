<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<footer class="py-3 mt-auto" style="background-image: linear-gradient(to right, rgba(136, 234, 135, 0.354), rgb(133, 226, 161));">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">

      @auth
      <li class="nav-item"><a class="nav-link px-2 text-muted" href="{{ route('user.dashboard', ['userId' => auth()->id()]) }}" class="{{ Request::is('dashboard*') ? 'active' : '' }}">Dashboard</a></li>
      <li class="nav-item"><a class="nav-link px-2 text-muted"  href="{{ url('/view_event') }}" class="{{ Request::is('view_event*') ? 'active' : '' }}">View Events</a></li>
      <li class="nav-item"><a class="nav-link px-2 text-muted" href="/reportissue"  class="{{ Request::is('reportissue*') ? 'active' : '' }}">Report Issue</a></li>
      <li class="nav-item"><a class="nav-link px-2 text-muted" href="/faqs" class="{{ Request::is('faqs*') ? 'active' : '' }}">FAQs</a></li>
      <li class="nav-item">
          <form action="/logout" method="post">
              @csrf
              <button class="nav-link px-2 text-muted" type="submit">Logout</button>
          </form>
          
      </li>


      

      @else
      <li class="nav-item"><a href="/" class="nav-link px-2 text-muted">Home</a></li>
      <li class="nav-item"><a href="/#abuotus" class="nav-link px-2 text-muted">About Us</a></li>
      <li class="nav-item"><a href="/login" class="nav-link px-2 text-muted">Login</a></li>
      <li class="nav-item"><a href="/signup" class="nav-link px-2 text-muted">Register</a></li>

      @endauth
    </ul>

  
    <p class="text-center text-muted">&copy; 2023 CleanVille, Inc</p>
  </footer>