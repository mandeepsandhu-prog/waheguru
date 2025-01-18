<!DOCTYPE html>
<html>
<head>
    <title>Visitors List</title>
</head>
<body>
    <h1>Visitors List</h1>
    <table border="1" style="width: 100%; border-collapse: collapse;">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Occupation</th>
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
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
