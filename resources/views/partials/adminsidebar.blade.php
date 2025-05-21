<!-- Sidebar -->
<div class="bg-dark text-white vh-100 p-3" style="width: 250px;">
    <h4 class="text-center pb-4 border-bottom">Admin Panel</h4>

    <ul class="nav flex-column">
        <li class="nav-item mb-2">
            <a class="nav-link text-white d-flex align-items-center" href="{{ route('admin.main') }}">
                <i class="bi bi-speedometer2 me-2"></i> Dashboard
            </a>
        </li>

        <li class="nav-item mb-2">
            <a class="nav-link text-white d-flex align-items-center" href="#">
                <i class="bi bi-people me-2"></i> Customers
            </a>
        </li>

        <li class="nav-item mb-2">
            <a class="nav-link text-white d-flex align-items-center" href="{{ route('room.index') }}">
                <i class="bi bi-door-open me-2"></i> Rooms
            </a>
        </li>

        <li class="nav-item mb-2">
            <a class="nav-link text-white d-flex align-items-center" href="#">
                <i class="bi bi-calendar-check me-2"></i> Bookings
            </a>
        </li>

        <li class="nav-item mb-2">
            <a class="nav-link text-white d-flex align-items-center" href="#">
                <i class="bi bi-bar-chart-line me-2"></i> Reports
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link text-white d-flex align-items-center" href="#">
                <i class="bi bi-info-circle me-2"></i> Status
            </a>
        </li>

        <li class="nav-item">                
                <a class="nav-link text-danger d-flex align-items-center" href="{{ route('logout') }}">
                    <i class="bi bi-box-arrow-right mr-1 "></i>Logout
                </a>
        </li>
    </ul>
</div>