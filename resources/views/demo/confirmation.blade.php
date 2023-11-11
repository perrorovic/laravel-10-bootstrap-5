<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrations Form</title>
    <link rel="icon" href="{{ asset('laravel.ico') }}" type="image/x-icon"/>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>

    <div class="modal modal-sheet d-block p-4 bg-body-secondary d-flex justify-content-center align-items-center">
        <div class="modal-dialog center-block">
            <div class="modal-content rounded-4 shadow">
                <div class="modal-header p-5 pb-4 border-bottom-0 justify-content-center">
                    <h1 class="fw-light mb-0 fs-2 text-center">Thank you!</span></h1>
                </div>
                <div class="modal-body p-5 pt-0">
                    <p class="mb-4">Your registration form have been submitted to our application! <br>Thank you, for filling up the form! <br><br> Please check your email address inbox for verification!</p>
                    <button type="button" id="returnButton" class="w-100 btn btn-lg rounded-3 btn-secondary" name="return">Return</button>
                </div>
            </div>
        </div>
    </div>

</body>

<script>
    document.getElementById('returnButton').addEventListener('click', function() {
        window.location.href = '{{ url('demo/registration') }}';
    });
</script>

</html>