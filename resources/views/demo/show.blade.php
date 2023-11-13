<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrations Form</title>
    <link rel="icon" href="{{ asset('laravel.ico') }}" type="image/x-icon" />
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        body {
            display: flex;
            justify-content: center;
            overflow-y: scroll;
            margin: 0;
            padding: 20px 0;
        }

        .container {
            max-width: 400px;
            padding: 0 15px;
            width: 100%;
        }
    </style>

</head>

<body>

    <div class="container">
        <h2 class="text-center">Registration List</h2>

        <div class="list-group">
            @foreach ($registrations as $registration)
            <div class="list-group-item">
                <h5 class="mb-1">Fullname : {{ substr($registration->fullname, 0, 3) }}****</h5>
                <p class="mb-1">Email : {{ substr($registration->email, 0, 4) }}****</p>
                <small>Address : {{ substr($registration->address, 0, 5) }}****</small>
            </div>
            @endforeach
        </div>
    </div>

</body>

</html>