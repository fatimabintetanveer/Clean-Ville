<!-- resources/views/home.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clean Ville</title>
    <link rel="stylesheet"  href="{{ asset('css/styles.css') }}">
</head>
<body>
    @include('partials.home_header');
    <x-flash_message />
    
    <section class="introduction">
        <h1>Empower Your Community to Clean and Thrive!</h1>
        <p>Creating a Cleaner World, One Space at a Time</p>
        <a href="{{ url('/login') }}" class="cta-button">Get Started</a>
    </section>
    <div id="aboutus">
    <div class="aboutus p-4"> 
        <div class="container">
            <h2>Our Vision</h2>
            <p>Empower communities to create a cleaner and greener world for current and future generations. Together, we envision a world where public spaces are vibrant, sustainable, and welcoming to all.</p>

            <h2>Our Mission</h2>
            <p>Promote cleanliness and sustainability through our dedication to organizing public space cleaning events, efficient resource management, and active community engagement. We are on a mission to make our communities healthier and more environmentally friendly.
            </p>

            <h2>Why CleanVille?</h2>
            <p>At CleanVille, we believe that a clean environment is fundamental to the well-being of our community members and the planet. We collaborate with enthusiastic volunteers, local authorities, and community organizations to create a meaningful impact on our public spaces, making them safer, cleaner, and more beautiful.</p>

            <h2>Join Us</h2>
            <p>Together, we can transform public spaces into clean, inviting, and sustainable places for everyone to enjoy. Join CleanVille today and be part of the change. Let's work hand in hand towards a better future, where communities thrive and nature flourishes.</p>
        </div>
    </div>
</div>

    <x-footer />

</body>
</html>