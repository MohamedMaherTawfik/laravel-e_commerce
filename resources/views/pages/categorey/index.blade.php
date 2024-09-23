@extends('layout.blade.php')
@section('content')



<div class="container">

    <h3 align="center">Category</h3>

    </br>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="form-area">
                <form method="POST" action="{{ route('categorey.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label>Category Name</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="col-md-6">
                            <label>Status</label>
                            <select class="form-control" name="status">
                                <option selected>Select menu</option>
                                <option value="1">True</option>
                                <option value="2">False</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <input type="submit" class="btn btn-primary" value="Register">
                        </div>
                    </div>

                </form>
            </div>
            <table class="table mt-5">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Category Name</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $key => $category)
                        <tr>

                            <td scope="col">{{ ++$key }}</td>
                            <td scope="col">{{ $category->name }}</td>
                            <td scope="col">
                                @if ($category->status == 1)
                                    true
                                @else
                                    false
                                @endif
                            </td>
                            <td scope="col">
                                <a href="{{ route('category.edit', $category->id) }}">
                                    <button class="btn btn-primary btn-sm">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                    </button>
                                </a>
                                <form action="{{ route('category.destroy', $category->id) }}" method="POST"
                                    style="display: inline-block">
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
    </div>



    @endsection
    @push('css')
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
            }

            .container {
                max-width: 1000px;
                margin: 0 auto;
                padding: 20px;
            }

            /* Category heading with improved formatting */
            h3 {
                text-align: center;
                margin-bottom: 20px;
                font-size: 1.5rem;
                font-weight: bold;
            }

            /* Form area with enhanced layout and spacing */
            .form-area {
                border: 1px solid #ddd;
                border-radius: 4px;
                padding: 20px;
                margin-bottom: 20px;
            }

            .row {
                margin-bottom: 10px;
            }

            .col-md-6 {
                padding: 0 10px;
            }

            .form-area label {
                display: block;
                margin-bottom: 5px;
                font-weight: bold;
            }

            .form-control {
                width: 100%;
                padding: 10px;
                border: 1px solid #ccc;
                border-radius:
                    4px;
                box-sizing: border-box;
            }

            .btn-primary {
                background-color: #007bff;
                border-color:
                    #007bff;
                color: #fff;
                padding: 10px 20px;
                border-radius: 4px;
                cursor: pointer;
            }

            /* Table styling for clarity and readability */
            .table {
                width: 100%;
                border-collapse: collapse;
                border: 1px solid #ddd;
                margin-bottom: 0;
            }

            .table th,
            .table td {
                padding: 10px;
                border: 1px solid #ddd;
                text-align: left;
            }

            .table thead th {
                background-color: #f5f5f5;
            }

            /* Buttons with improved style and hover effect */
            .btn-primary,
            .btn-danger {
                transition: all 0.2s ease-in-out;
            }

            .btn-primary:hover,
            .btn-danger:hover {
                background-color: #0062cc;
                border-color: #0062cc;
            }

            .btn-danger {
                background-color: #dc3545;
                border-color: #dc3545;
            }

            /* Inline form for delete button (optional) */
            form[style*="display: inline-block"] {
                margin-left: 10px;
            }
        </style>
    @endpush