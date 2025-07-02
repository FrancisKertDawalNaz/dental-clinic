<nav class="d-flex flex-column bg-white shadow-sm p-3 vh-100" style="min-width: 200px; position: fixed; top: 70px; left: 0; z-index: 1020;">
    <h4 class="mb-3 text-center" style="font-weight: 500;">Patient Menu</h4>
    <ul class="nav nav-pills flex-column gap-1">
        <li class="nav-item">
            <a class="nav-link d-flex align-items-center text-dark sidebar-link" href="#" style="font-weight: 100;">
                <span class="me-2"><i class="bi bi-house-door"></i></span> Dashboard
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link d-flex align-items-center text-dark sidebar-link" href="#" style="font-weight: 100;">
                <span class="me-2"><i class="bi bi-calendar-event"></i></span> My Appointments
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link d-flex align-items-center text-dark sidebar-link" href="#" style="font-weight: 100;">
                <span class="me-2"><i class="bi bi-clipboard2-plus"></i></span> Services / Book Appointment
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link d-flex align-items-center text-dark sidebar-link" href="#" style="font-weight: 100;">
                <span class="me-2"><i class="bi bi-journal-medical"></i></span> Dental History
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link d-flex align-items-center text-dark sidebar-link" href="#" style="font-weight: 100;">
                <span class="me-2"><i class="bi bi-capsule"></i></span> Prescriptions
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link d-flex align-items-center text-dark sidebar-link" href="#" style="font-weight: 100;">
                <span class="me-2"><i class="bi bi-credit-card"></i></span> Billing / Payments
            </a>
        </li>
        <li>
            <hr class="my-4">
        </li>
        <li class="nav-item mt-8">
            <form id="logoutForm" method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="button" id="logoutBtn" class="nav-link d-flex align-items-center text-danger sidebar-link" style="font-weight: 100; background: none; border: none; width: 100%; text-align: left;">
                    <span class="me-2"><i class="bi bi-box-arrow-right"></i></span> Logout
                </button>
            </form>
        </li>
    </ul>
</nav>
<style>
    .sidebar-link {
        transition: background 0.2s, color 0.2s;
        border-radius: 0.375rem;
    }

    .sidebar-link:hover,
    .sidebar-link:focus {
        background: #ADEED9;
        color: #222 !important;
    }

    .sidebar-link.active {
        background: #ADEED9;
        color: #222 !important;
        font-weight: 500;
    }
</style>