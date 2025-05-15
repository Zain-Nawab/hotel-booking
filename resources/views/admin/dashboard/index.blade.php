@extends('admin.layout')

@section('content')

 <div class="sidebar">
        <h4 class="text-center py-3">Admin Panel</h4>
        <a class="ms-3" href="#"><i class="bi bi-speedometer2"></i>  Dashboard</a>
        <a class="ms-3" href="#"><i class="bi bi-people card-icon "></i>  Customers</a>
        <a class="ms-3" href="{{ route('room.create') }}"><i class="bi bi-door-open card-icon"></i>  Rooms</a>
        <a class="ms-3"href="#"><i class="bi bi-calendar-check card-icon"></i>  Bookings</a>
        <a class="ms-3" href="#"><i class="bi bi-bar-chart-line card-icon"></i>  Reports</a>
        
        <a class="ms-3" href="#">Status</a>
    </div>
    <div class="content">
        <h1 class="mb-4"><i class="bi bi-speedometer2"></i>  Dashboard</h1>

        <div class="row mb-4">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Total Rooms</h5>
                        <p class="card-text display-6">{{ $totalRooms }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Total Bookings</h5>
                        <p class="card-text display-6">{{ $totalBookings }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Total Costumer</h5>
                        <p class="card-text display-6">{{ $totalUsers }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Total Revenue</h5>
                        <p class="card-text display-6">${{ number_format($totalRevenue, 2) }}</p>
                    </div>
                </div>
            </div>
        </div>

        <h3>Recent Bookings</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Customer</th>
                    <th>Room</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($recentBookings as $booking)
                    <tr>
                        <td>{{ $booking->customer_name }}</td>
                        <td>{{ $booking->room->number ?? 'N/A' }}</td>
                        <td>{{ $booking->created_at->format('Y-m-d') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection