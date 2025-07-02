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
    <link href="/css/app.css" rel="stylesheet">
</head>

<body>
    <div class="d-flex justify-content-center align-items-center vh-100 bg-light" style="background: rgba(255,255,255,0.7); position: relative;">
        <img src="/images/bg1.jpg" alt="Background" style="position: fixed; top: 0; left: 0; width: 100vw; height: 100vh; object-fit: cover; z-index: 0; opacity: 0.5; pointer-events: none;">
        <div class="card shadow p-0 d-flex flex-row overflow-hidden" style="min-width: 700px; max-width: 900px;">
            <div class="p-4 flex-fill" style="min-width: 350px; position: relative; z-index: 1;">
                <h2 class="mb-2 text-center fs-4">Dental Clinic Login</h2>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-1">
                        <label for="register_role" class="form-label">Role</label>
                        <select class="form-select" id="register_role" name="role" required>
                            <option value="patient" selected>Patient</option>
                            <option value="admin">Admin</option>
                            <option value="dentist">Dentist</option>
                        </select>
                    </div>
                    <div class="mb-1">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" required autofocus>
                    </div>
                    <div class="mb-1">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="password" name="password" required>
                            <span class="input-group-text" id="togglePassword" style="cursor:pointer;">
                                <svg id="eyeIcon" xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.133 13.133 0 0 1 1.172 8z" />
                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zm0 1a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3z" />
                                </svg>
                            </span>
                        </div>
                        <small id="passwordHelpBlock" class="form-text text-muted">
                            Enter your account password to log in to the dental clinic system.
                        </small>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="remember" name="remember">
                        <label class="form-check-label" for="remember">Remember me</label>
                    </div>
                    <button id="loginBtn" type="button" class="btn w-100 mb-2" style="background-color: #ADEED9; color: #222; border: none;">Login</button>
                    <button type="button" class="btn btn-outline-secondary w-100 border-2 border-secondary focus:border-primary focus:text-primary" data-bs-toggle="modal" data-bs-target="#registerModal">Register</button>
                </form>
            </div>
            <div class="d-none d-md-flex align-items-center justify-content-center bg-white flex-fill" style="min-width: 500px;">
                <img src="{{ asset('images/6952945.jpg') }}" alt="Dental Clinic" class="img-fluid p-4" style="max-height: 500px;">
            </div>
        </div>
        </img>

        <!-- Register Modal -->
        <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content" style="backdrop-filter: blur(12px);">
                    <div class="modal-body p-0 d-flex flex-row overflow-hidden">
                        <div class="p-4 flex-fill" style="min-width: 350px;">
                            <div class="d-flex align-items-center mb-4">
                                <button type="button" class="btn btn-link text-secondary p-0 me-2" data-bs-dismiss="modal" aria-label="Close" title="Back">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 0 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 7.5H14.5A.5.5 0 0 1 15 8z" />
                                    </svg>
                                </button>
                                <h2 class="mb-0 text-center flex-grow-1 fs-4" id="registerModalLabel">Dental Clinic Register</h2>
                            </div>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <small id="patient" class="mb-1 form-text text-muted">
                                        For patient only
                                </small>
                                <div class="mb-1">
                                    <label for="register_name" class="form-label">Full Name</label>
                                    <input type="text" class="form-control" id="register_name" name="name" required autofocus>
                                </div>
                                <div class="mb-1">
                                    <label for="register_no" class="form-label">Contact Number</label>
                                    <input type="text" class="form-control" id="register_no" name="no" required>
                                </div>
                                <div class="mb-1">
                                    <label for="register_address" class="form-label">Address</label>
                                    <input type="text" class="form-control" id="register_address" name="address" required>
                                </div>
                                <div class="mb-1">
                                    <label for="register_email" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="register_email" name="email" required>
                                </div>
                                <div class="mb-1">
                                    <label for="register_password" class="form-label">Password</label>
                                    <div class="input-group">
                                        <input type="password" class="form-control" id="register_password" name="password" required>
                                        <span class="input-group-text" id="toggleRegisterPassword" style="cursor:pointer;">
                                            <svg id="registerEyeIcon" xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.133 13.133 0 0 1 1.172 8z" />
                                                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zm0 1a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3z" />
                                            </svg>
                                        </span>
                                    </div>
                                    <small id="registerPasswordHelpBlock" class="form-text text-muted">
                                        Create a password for your account.
                                    </small>
                                </div>
                                <button type="submit" class="btn w-100 mb-2" style="background-color: #ADEED9; color: #222; border: none;">Register</button>
                            </form>
                        </div>
                        <div class="d-none d-md-flex align-items-center justify-content-center bg-white flex-fill" style="min-width: 450px;">
                            <img src="{{ asset('images/6952945.jpg') }}" alt="Dental Clinic" class="img-fluid p-4" style="max-height: 450px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Spinner Modal -->
        <div class="modal fade" id="loadingModal" tabindex="-1" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content bg-transparent border-0 shadow-none">
                    <div class="modal-body d-flex flex-column align-items-center justify-content-center p-5">
                        <div class="spinner-border text-success mb-3" style="width: 4rem; height: 4rem;" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                        <div class="progress w-100" style="height: 8px;">
                            <div id="loadingBar" class="progress-bar bg-success" role="progressbar" style="width: 0%"></div>
                        </div>
                        <div class="mt-3 fw-bold text-dark">Loading... Please wait</div>
                    </div>
                </div>
            </div>
        </div>

        <script src="/app.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>