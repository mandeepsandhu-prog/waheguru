
@extends('layouts.app')

@section('content')
    <h1>Visitor List</h1>
    <a href="{{ route('visitors.create') }}" class="btn btn-primary mb-3">Add Visitor</a>
    <a href="{{ route('visitors.exportExcel') }}" class="btn btn-success mb-3">Download Excel</a>
    <a href="{{ route('visitors.exportPdf') }}" class="btn btn-secondary mb-3">Download PDF</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Occupation</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($visitors as $visitor)
                <tr>
                    <td>{{ $visitor->id }}</td>
                    <td>{{ $visitor->name }}</td>
                    <td>{{ $visitor->phone }}</td>
                    <td>{{ $visitor->address }}</td>
                    <td>{{ $visitor->occupation }}</td>
                    <td>
                        <a href="{{ route('visitors.edit', $visitor->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('visitors.destroy', $visitor->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="pagination">
    {{ $visitors->links() }}
</div>

    
@endsection
