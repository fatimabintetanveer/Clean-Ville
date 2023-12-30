<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Issue - Clean Ville</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/misc.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dashboard.css') }}">
</head>
<style>

</style>
<body>
    @include('partials.user_header')
    <div class="issue-page-container">
        <section class="issue-form">
            <h2>Report an Issue</h2>
            <form method="POST" action="/reportissue">
                @csrf
                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                <label for="issue-type">Issue Type:</label>
                <select id="complaint-type" name="complaint_type">
                    <option value="Garbage Collection">Garbage Collection</option>
                    <option value="Graffiti/Street Art">Graffiti/Street Art</option>
                    <option value="Park Maintenance">Park Maintenance</option>
                    <option value="Illegal Dumping">Illegal Dumping</option>
                    <option value="Water Leakage">Water Leakage</option>
                    <option value="Litter Accumuation">Litter Accumuation</option>
                    <option value="Tree Maintenance">Tree Maintenance</option>
                </select>
                <label for="description">Description:</label>
                <textarea id="description" name="description" rows="4" cols="50" placeholder="Describe the issue..."></textarea>
                <button type="submit">Submit</button>
            </form>
        </section>
    </div>

    <x-footer />
</body>
</html>