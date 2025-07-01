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
                <div class="d-flex align-items-center mb-4">
                    <a href="{{ url('/') }}" class="me-2 text-decoration-none text-secondary" title="Back">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 0 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 7.5H14.5A.5.5 0 0 1 15 8z"/>
                        </svg>
                    </a>
                    <h2 class="mb-0 text-center flex-grow-1 fs-4">Dental Clinic Register</h2>
                </div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-2">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="name" name="name" required autofocus>
                    </div>
                    <div class="mb-2">
                        <label for="no" class="form-label">Contact Number</label>
                        <input type="text" class="form-control" id="no" name="no" required>
                    </div>
                    <div class="mb-2">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" name="address" required>
                    </div>
                    <div class="mb-2">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-2">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="password" name="password" required>
                            <span class="input-group-text" id="togglePassword" style="cursor:pointer;">
                                <svg id="eyeIcon" xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.133 13.133 0 0 1 1.172 8z"/>
                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zm0 1a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3z"/>
                                </svg>
                            </span>
                        </div>
                        <small id="passwordHelpBlock" class="form-text text-muted">
                            Create a password for your account.
                        </small>
                    </div>
                    <button type="submit" class="btn w-100 mb-2" style="background-color: #ADEED9; color: #222; border: none;">Register</button>
                </form>
            </div>
            <div class="d-none d-md-flex align-items-center justify-content-center bg-white flex-fill" style="min-width: 500px;">
                <img src="{{ asset('images/6952945.jpg') }}" alt="Dental Clinic" class="img-fluid p-4" style="max-height: 500px;">
            </div>
        </div>
    </div>
    <script src="/app.js"></script>
</script>
</body>

</html>