@extends('layouts.app')

@section('content')

<h1 class="text-center">Admin All Table Products</h1>
<br>


<div class="container">
    <div class="row">
        <div class="col-md-12" style="display:flex">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Major</th>
                        <th scope="col">Level</th>
                        <th scope="col">Time</th>
                        <th scope="col">Price</th>
                        <th scope="col">Tel</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <th scope="row">{{ $product->id }}</th>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->major }}</td>
                                <td>{{ $product->level }}</td>
                                <td>{{ $product->time }}</td>
                                <td>{{ $product->cost }}</td>
                                <td>{{ $product->tel }}</td>
                                <td><a href="{{ route('product.edit', $product->id)}}" class="btn btn-primary">Edit</a></td>
                                <td><a href="{{ route('product.show', $product->id)}}" class="btn btn-secondary">View</a></td>
                                <td><a href="{{ route('product.create')}}" class="btn btn-info">Create</a></td>
                                <td>
                                    <form action="{{ route('admin.product.delete', $product->id)}}" method="POST">
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
</div>


@endsection
