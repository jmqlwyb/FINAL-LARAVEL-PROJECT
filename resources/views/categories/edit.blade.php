@extends('layouts.app')

@section('content')
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
            color: #343a40;
        }

        .container {
            margin-top: 50px;
            max-width: 600px;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 2rem;
            font-weight: bold;
            text-align: center;
            margin-bottom: 30px;
            color: #a318ad;
        }

        .form-group label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .btn {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
        }

        .form-control {
            border-radius: 5px;
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .form-group input[type="checkbox"] {
            margin-top: 10px;
        }

        .form-group input[type="checkbox"] + label {
            display: inline-block;
            margin-left: 5px;
            font-weight: normal;
        }

        @media (max-width: 768px) {
            .container {
                padding: 15px;
                margin: 20px;
            }

            h1 {
                font-size: 1.5rem;
            }
        }
    </style>

    <div class="container">
        <h1>Edit Category</h1>

        <form action="{{ route('categories.update', $category->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" value="{{ $category->name }}" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name="description" class="form-control" rows="4">{{ $category->description }}</textarea>
            </div>


            <input type="hidden" name="is_active" value="0">

            <div class="form-group">
                <label for="is_active">Is Active:</label>
                <input type="checkbox" name="is_active" value="1" {{ $category->is_active ? 'checked' : '' }}>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>

    </div>
@endsection
