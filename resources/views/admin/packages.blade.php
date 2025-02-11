@extends(layouts.admin)
@section('content')
<div class="container">
    <h2>Packages</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($packages as $package)
            <tr>
                <td>{{ $package->id }}</td>
                <td>{{ $package->name }}</td>
                <td>{{ $package->description }}</td>
                <td>{{ $package->price }}</td>
                <td>
                    <a href="{{ route('admin.packages.edit', $package->id) }}" class="btn btn-primary btn-sm">Edit</a>
                    <form action="{{ route('admin.packages.destroy', $package->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
