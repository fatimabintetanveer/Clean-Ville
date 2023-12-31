<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Clean Ville</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

</head>

<body>
    
    <div class="body-container">

    
    <div class="icon-container">
    <a href="/" class="home-link">
        <i class="fas fa-home text-white"></i>
    </a>
    </div>
    <section class="mission">
        <h1>Our Mission</h1>
        <p>At CleanVille, we are dedicated to the cause of promoting cleanliness and sustainability. Our mission is to empower communities to come together, take action, and make a positive impact on our public spaces. We believe that a clean environment is essential for the well-being of our community members and the planet.
        </p>
        <h1>Our Vision</h1>
        <p>At CleanVille, we are dedicated to the cause of promoting cleanliness and sustainability. Our mission is to empower communities to come together, take action, and make a positive impact on our public spaces. We believe that a clean environment is essential for the well-being of our community members and the planet.
        </p>

    </section>


    <div class="login-container">
        <form class="login-form" method="POST" action="/users/authenticate">
            @csrf
            <h2>Login</h2>
            
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="{{old('email')}}" />
                @error('email')
                <p class="error">{{$message}}</p>
                @enderror
            </div>

            <div>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" value="{{old('password')}}" />
                @error('password')
                 <p class="error">{{$message}}</p>
                @enderror
            </div>

            <div>
                <button type="submit" class="cta-button">Login</button>
            </div>
        </form>
        <div class="extra-links">
            
            <p>Don't have an account? <a href="/signup">Register here</a></p>
        </div>
    </div>

</div>

    <x-footer /> 
</body>
   
</html>