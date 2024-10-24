@extends('layouts.app')

@section('content')
    <h1>Pets</h1>
    <a href="{{ route('pets.create') }}" class="btn btn-primary">Add New Pet</a>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Species</th>
                <th>Breed</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pets as $pet)
                <tr>
                    <td>{{ $pet->name }}</td>
                    <td>{{ $pet->species }}</td>
                    <td>{{ $pet->breed }}</td>
                    <td>
                        <a href="{{ route('pets.show', $pet) }}" class="btn btn-sm btn-info">View</a>
                        <a href="{{ route('pets.edit', $pet) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('pets.destroy', $pet) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
