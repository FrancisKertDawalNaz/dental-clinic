<nav class="navbar navbar-expand-lg navbar-light shadow-sm px-3" style="background-color: #ADEED9;">
    <div class="container-fluid">
        <!-- Clinic Logo/Name -->
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="{{ asset('images/logo.png') }}" alt="Dental Clinic Logo" style="height: 32px; width: 32px;" class="me-2">
            <span class="fw-bold text-white">Dental Clinic</span>
        </a>

        <!-- Optional Search Bar with Icon -->
        <div class="d-none d-md-flex flex-grow-1 justify-content-center">
            <form class="w-50">
                <div class="input-group">
                    <span class="input-group-text bg-white border-end-0" style="font-size: 1.1rem;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.099zm-5.442 1.398a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11z" />
                        </svg>
                    </span>
                    <input class="form-control border-start-0" type="search" placeholder="Search services, dentists, appointments..." aria-label="Search" style="box-shadow:none;">
                </div>
            </form>
        </div>

        <ul class="navbar-nav ms-auto align-items-center gap-2">
            <!-- Notification Icon -->
            <li class="nav-item dropdown">
                <a class="nav-link position-relative" href="#" id="notificationDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-bell" style="font-size: 1.3rem; color: #FFB823;"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" style="font-size: 0.5rem;">3</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="notificationDropdown" style="min-width: 300px;">
                    <li class="dropdown-header">Notifications</li>
                    <li><a class="dropdown-item" href="#">Upcoming appointment tomorrow at 10:00 AM</a></li>
                    <li><a class="dropdown-item" href="#">Prescription ready for pickup</a></li>
                    <li><a class="dropdown-item" href="#">Reminder: Dental cleaning due next week</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item text-center" href="#">View all notifications</a></li>
                </ul>
            </li>

            <!-- Messages Icon (Optional) -->
            <li class="nav-item position-relative">
                <a class="nav-link" href="#">
                    <i class="bi bi-chat-dots" style="font-size: 1.3rem; color: #FFB823;"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary" style="font-size: 0.5rem;">1</span>
                </a>
            </li>

            <!-- Profile Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://ui-avatars.com/api/?name={{ urlencode(session('patient_name', 'Patient Name')) }}&background=ADEED9&color=222&rounded=true&size=32" alt="Profile" class="rounded-circle me-2" width="32" height="32">
                    <span class="text-white">
                        {{ session('patient_name', 'Patient Name') }}
                    </span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                    <li><a class="dropdown-item d-flex align-items-center" href="#"><i class="bi bi-person me-2"></i>View Profile</a></li>
                    <li><a class="dropdown-item d-flex align-items-center" href="#"><i class="bi bi-gear me-2"></i>Account Settings</a></li>
                    <li><a class="dropdown-item d-flex align-items-center" href="#"><i class="bi bi-key me-2"></i>Change Password</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>