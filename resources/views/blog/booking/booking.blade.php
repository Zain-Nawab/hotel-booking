@extends('master')

@section('content')
<div class="container py-5">
    <h2 class="mb-4"><i class="bi bi-calendar-check me-2"></i>Booking Room #{{ $room->room_number }}</h2>

    <form action="{{ route('room.book.store', $room->id) }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="check_in" class="form-label">Check-In Date</label>
            <input type="date" class="form-control" name="check_in" required>
        </div>

        <div class="mb-3">
            <label for="check_out" class="form-label">Check-Out Date</label>
            <input type="date" class="form-control" name="check_out" required>
        </div>

        <div class="mb-3">
            <label for="guests" class="form-label">Number of Guests</label>
            <input type="number" class="form-control" name="guests" min="1" required>
        </div>

        <button type="submit" class="btn btn-success">
            <i class="bi bi-credit-card me-2"></i>Confirm Booking
        </button>
    </form>
</div>
@endsection
