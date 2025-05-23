

@extends('admin.layout')

@section('content')

@push('style')

<link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet">    
@endpush


<div class="container mt-5">
    <h2 class="mb-4">Create Room</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

     {{-- Global Error Messages --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>There were some problems with your input:</strong>
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

    <form id="createForm" action="{{ route('room.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="room_number" class="form-label">Room Number</label>
                <input type="text" class="form-control" id="room_number" name="room_number" required>
            </div>

            <div class="col-md-6">
                <label for="type" class="form-label">Type</label>
                <select class="form-select" id="type" name="type" required>
                    <option value="">-- Select Type --</option>
                    <option value="SINGLE ROOM">Single Room</option>
                    <option value="DOUBLE ROOM">Double Room</option>
                    <option value="LUXURY ROOM">Luxury Room</option>
                </select>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="price" class="form-label">Price ($)</label>
                <input type="number" step="0.01" class="form-control" id="price" name="price" required>
            </div>

            <div class="col-md-6">
                <label for="status" class="form-label">Status</label>
                <select class="form-select" id="status" name="status" required>
                    <option value="">-- Select Status --</option>
                    <option value="available">Available</option>
                    <option value="unavailable">Unavailable</option>
                </select>
            </div>
        </div>

        <div class="row mb-3">

            <div class="col-md-6">
                <label for="type" class="form-label">Adult</label>
                <select class="form-select" id="type" name="adult" required>
                    <option value="">-- Select Adult --</option>
                    <option value="1">Adult 1</option>
                    <option value="2">Adult 2</option>
                    <option value="3">Adult 3</option>
                </select>
            </div>

            <div class="col-md-6">
                <label for="type" class="form-label">Child</label>
                <select class="form-select" id="type" name="child" required>
                    <option value="">-- Select Child --</option>
                    <option value="1">Child 1</option>
                    <option value="2">Child 2</option>
                    <option value="3">Child 3</option>
                </select>
            
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description (optional)</label>
            <textarea class="form-control d-none" id="description" name="description" rows="3"></textarea>

            id="createForm"
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Room Image </label>
            <input type="file" class="form-control" id="image" name="image">
        </div>

        <button type="submit" class="btn btn-md w-25 btn-primary ">Create Room</button>
    </form>
</div>

@push('scripts')

<script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>


<script>
    const quill = new Quill('#editor', {
      theme: 'snow'
    });

    document.querySelector("#createForm").addEventListener('submit' , function(e) {
        e.preventDefault();

        const textArea = document.querySelector("#description");

        const html = quill.getSemanticHTML();

        textArea.value = html;

        document.querySelector("#createForm").submit();

    });
  </script>
    
@endpush
@endsection
