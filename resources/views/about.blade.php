<!DOCTYPE html>
<html>

<head>
    <title>About Us-CleanVille</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>
<style>
    /* Styling for about us page */
    body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
    background-image: url({{ asset('images/signupbg.png') }});
    margin: 0;
    padding: 0;
}

header {
    background-color: #007BFF;
    color: #fff;
    text-align: center;
    display: flex;
}

h1 {
    font-size: 38px;
    padding-left: 483px;
}

.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
}

h2 {
    font-size: 24px;
    color: #007BFF;
}

p {
    font-size: 16px;
    line-height: 1.6;
}

.home-link {
    position: absolute;
    top: 25px;
    left: 20px;
    text-decoration: none;
    color: #0c0c0c;
    font-size: 30px;
}

@media (max-width: 768px) {
            h1 {
                font-size: 24px;
            }

            .container {
                margin: 10px;
                padding: 10px;
            }

            .home-link {
                font-size: 20px;
            }

            h2 {
                font-size: 20px;
            }

            p {
                font-size: 14px;
            }
        }
</style>
<body>
    <header>
        <a  href="{{ url('/') }}"  class="home-link">
            <i class="fas fa-home"></i>
        </a>
        <h1>About CleanVille</h1>
    </header>
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
</body>

</html>
