<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm px-3">
    <div class="container-fluid">
        <!-- Clinic Logo/Name -->
        <a class="navbar-brand d-flex align-items-center" href="#">
            <span class="me-2" style="font-size: 1.5rem;">🏥</span>
            <span class="fw-bold">Dental Clinic</span>
        </a>

        <!-- Optional Search Bar -->
        <form class="d-none d-md-flex mx-auto w-50">
            <input class="form-control" type="search" placeholder="Search services, dentists, appointments..." aria-label="Search">
        </form>

        <ul class="navbar-nav ms-auto align-items-center gap-2">
            <!-- Notification Icon -->
            <li class="nav-item dropdown">
                <a class="nav-link position-relative" href="#" id="notificationDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <span style="font-size: 1.3rem;">🔔</span>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" style="font-size: 0.7rem;">3</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="notificationDropdown" style="min-width: 300px;">
                    <li class="dropdown-header">Notifications</li>
                    <li><a class="dropdown-item" href="#">Upcoming appointment tomorrow at 10:00 AM</a></li>
                    <li><a class="dropdown-item" href="#">Prescription ready for pickup</a></li>
                    <li><a class="dropdown-item" href="#">Reminder: Dental cleaning due next week</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item text-center" href="#">View all notifications</a></li>
                </ul>
            </li>

            <!-- Messages Icon (Optional) -->
            <li class="nav-item position-relative">
                <a class="nav-link" href="#">
                    <span style="font-size: 1.3rem;">💬</span>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary" style="font-size: 0.7rem;">1</span>
                </a>
            </li>

            <!-- Profile Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://ui-avatars.com/api/?name=Patient+Name&background=ADEED9&color=222&rounded=true&size=32" alt="Profile" class="rounded-circle me-2" width="32" height="32">
                    <span>Patient Name</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                    <li><a class="dropdown-item" href="#">View Profile</a></li>
                    <li><a class="dropdown-item" href="#">Account Settings</a></li>
                    <li><a class="dropdown-item" href="#">Change Password</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item text-danger" href="#">Logout</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
