<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/signup.css') }}">
    <link rel="stylesheet"  href="{{ asset('css/styles.css') }}">

    <title>Sign Up - Public Space Cleaning Scheduler</title>
    
</head>

<body>
@include('partials.home_header');

<div class="body-container">
            
    <div class="signup-container ">
        <form class="signup-form" method="POST" action="/users">
            @csrf
            <h2>Register</h2>

            <div>
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" value="{{old('name')}}" >
            @error('name')
            <p class="error">{{$message}}</p>
            @enderror

            </div>

            <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email"  value="{{old('email')}}" >
            @error('email')
            <p class="error">{{$message}}</p>
            @enderror

            </div>

            <div>
            <label for="contact_no">Contact No:</label>
            <input type="tel" id="contact_no" name="contact_no"  value="{{old('contact_no')}}" >
            @error('contact_no')
            <p class="error">{{$message}}</p>
            @enderror

            </div>

            <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" value="{{old('password')}}" >
            @error('password')
            <p class="error">{{$message}}</p>
            @enderror
        </div>

        <div>
            <label for="password">Confirm Password:</label>
            <input type="password" id="password_confirmation" name="password_confirmation" value="{{old('password_confirmation')}}">
            @error('password_confirmation')
            <p class="error">{{$message}}</p>
            @enderror
        </div>

            <button type="submit" class="cta-button">Register</button>
        </form>
        <div class="extra-links">
            <p>Already have an account? <a href="/login">Log in here</a></p>
        </div>
    </div>
</div>
    <x-footer /> 
</body>
</html>
