<nav class="d-flex flex-column bg-white shadow-sm p-3 vh-100" style="min-width: 200px; position: fixed; top: 70px; left: 0; z-index: 1020;">
    <h4 class="mb-1 text-center">Patient Menu</h4>
    <ul class="nav nav-pills flex-column gap-2">
        <li class="nav-item">
            <a class="nav-link d-flex align-items-center" href="#">
                <span class="me-2">🏠</span> Dashboard
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link d-flex align-items-center" href="#">
                <span class="me-2">📅</span> My Appointments
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link d-flex align-items-center" href="#">
                <span class="me-2">🦷</span> Services / Book Appointment
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link d-flex align-items-center" href="#">
                <span class="me-2">📜</span> Dental History
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link d-flex align-items-center" href="#">
                <span class="me-2">💊</span> Prescriptions
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link d-flex align-items-center" href="#">
                <span class="me-2">💳</span> Billing / Payments
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link d-flex align-items-center" href="#">
                <span class="me-2">🔔</span> Notifications
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link d-flex align-items-center" href="#">
                <span class="me-2">⚙️</span> Settings / Account Info
            </a>
        </li>
        <li class="nav-item mt-3">
            <a href="{{ route('logout') }}" class="nav-link d-flex align-items-center text-danger">
                <span class="me-2">🚪</span> Logout
            </a>
        </li>
    </ul>
</nav>