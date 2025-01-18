
@extends('layouts.app')

@section('content')
    <h1>Add Visitor</h1>
    <form method="POST" action="{{ route('visitors.store') }}">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" required>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" class="form-control" name="phone" required>
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <textarea class="form-control" name="address" required></textarea>
        </div>
        <div class="mb-3">
            <label for="occupation" class="form-label">Occupation</label>
            <input type="text" class="form-control" name="occupation" required>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
@endsection
