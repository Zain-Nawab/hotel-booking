@extends('admin.layout')

@section('content')
<div class="content container-fluid py-4">
    <h1 class="mb-4 fw-bold text-dark">
        <i class="bi bi-speedometer2 me-2"></i>Dashboard
    </h1>

    <div class="row g-4 mb-4">
        <div class="col-md-3">
            <div class="card shadow-sm border-0">
                <div class="card-body text-center">
                    <i class="bi bi-door-open display-5 text-info mb-2"></i>
                    <h6 class="card-title">Total Rooms</h6>
                    <p class="fs-4 fw-semibold mb-0">{{ $totalRooms }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow-sm border-0">
                <div class="card-body text-center">
                    <i class="bi bi-calendar-check display-5 text-success mb-2"></i>
                    <h6 class="card-title">Total Bookings</h6>
                    <p class="fs-4 fw-semibold mb-0">{{ $totalBookings }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow-sm border-0">
                <div class="card-body text-center">
                    <i class="bi bi-people display-5 text-warning mb-2"></i>
                    <h6 class="card-title">Total Customers</h6>
                    <p class="fs-4 fw-semibold mb-0">{{ $totalUsers }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow-sm border-0">
                <div class="card-body text-center">
                    <i class="bi bi-currency-dollar display-5 text-danger mb-2"></i>
                    <h6 class="card-title">Total Revenue</h6>
                    <p class="fs-4 fw-semibold mb-0">${{ number_format($totalRevenue, 2) }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Recent Bookings</h5>
        </div>
        <div class="card-body p-0">
            <table class="table table-hover mb-0">
                <thead class="table-light">
                    <tr>
                        <th>Customer</th>
                        <th>Room</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($recentBookings as $booking)
                        <tr>
                            <td>{{ $booking->customer_name }}</td>
                            <td>{{ $booking->room->number ?? 'N/A' }}</td>
                            <td>{{ $booking->created_at->format('Y-m-d') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="text-center text-muted">No recent bookings found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection