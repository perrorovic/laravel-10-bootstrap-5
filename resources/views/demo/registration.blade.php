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
                    <h1 class="fw-light mb-0 fs-2 text-center">Laravel Demo <br> <span class="fw-bold">Registration Form</span></h1>
                </div>
                <div class="modal-body p-5 pt-0">
                    <form action="registration" method="post">
                    @csrf
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control rounded-3" id="fullname" name="fullname" required placeholder="Fullname">
                            <label for="fullname">Fullname</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control rounded-3" id="email" name="email" required placeholder="Email Address">
                            <label for="email">Email Address</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="text" class="form-control rounded-3" id="address" name="address" required placeholder="Home Address">
                            <label for="address">Home Address</label>
                        </div>
                        <button class="w-100 mb-3 btn btn-lg rounded-3 btn-primary" name="registration" >Registration</button>
                        <small class="text-body-secondary">Your email address will be used to confirm and verify your registration. <br>We will not use your email address for anything else.</small>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>