@extends('layouts.app')

@section('content')
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
            color: #a318ad;
        }

        .container {
            margin-top: 50px;
            max-width: 1200px;
        }

        h1 {
            font-size: 2.5rem;
            font-weight: bold;
            text-align: center;
            margin-bottom: 30px;
            color:#36020de6;
        }

        h2 {

            color: #36020de6;
        }

        .btn {
            margin: 5px;
            border-radius: 5px;
            padding: 10px 20px;
        }

        .alert {
            margin-bottom: 20px;
            border-radius: 5px;
        }

        .transparent-table {
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            padding: 20px;
        }

        .table {
            margin-bottom: 0;
        }

        .table th {
            background-color: #36020de6;
            color: white;
            font-weight: bold;
        }

        .table th, .table td {
            vertical-align: middle;
            text-align: center;
            padding: 15px;
        }

        .table tbody tr:hover {
            background-color: #f1f1f1;
            transition: background-color 0.3s ease;
        }

        .table .btn {
            width: 80px;
        }
    </style>

    <div class="container">
        <h1>𝑪𝒂𝒕𝒆𝒈𝒐𝒓𝒚 𝑴𝒂𝒏𝒂𝒈𝒆𝒎𝒆𝒏𝒕</h1>

        <div class="text-center mb-4">
            <a href="{{ route('categories.create') }}" class="btn btn-secondary">𝘼𝙙𝙙 𝙉𝙚𝙬 𝘾𝙖𝙩𝙚𝙜𝙤𝙧𝙮</a>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <div class="transparent-table">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Is Active</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->description }}</td>
                            <td>{{ $category->is_active ? 'Active' : 'Inactive' }}</td>
                            <td>
                                <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-success">Edit</a>
                                <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
