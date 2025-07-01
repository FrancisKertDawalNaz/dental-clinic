<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dental Clinic</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="d-flex justify-content-center align-items-center vh-100 bg-light">
        <div class="card shadow p-0 d-flex flex-row overflow-hidden" style="min-width: 700px; max-width: 900px;">
            <div class="p-4 flex-fill" style="min-width: 350px;">
                <h2 class="mb-4 text-center fs-4">Dental Clinic Login</h2>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" required autofocus>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                        <small id="passwordHelpBlock" class="form-text text-muted">
                            Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                        </small>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="remember" name="remember">
                        <label class="form-check-label" for="remember">Remember me</label>
                    </div>
                    <button type="submit" class="btn w-100" style="background-color: #ADEED9; color: #222; border: none;">Login</button>
                </form>
            </div>
            <div class="d-none d-md-flex align-items-center justify-content-center bg-white flex-fill" style="min-width: 500px;">
                <img src="{{ asset('images/6952945.jpg') }}" alt="Dental Clinic" class="img-fluid p-4" style="max-height: 500px;">
            </div>
        </div>
    </div>
</body>

</html>