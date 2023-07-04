@extends('layouts.app')

@section('content')

<br>

<div class="container">

    <div class="col g-0"></div>

    <div class="card m-5" style="max-width: 1040px;">

    @foreach ($products as $product)
        <div class="card m-5" style="max-width: 1040px;">

            <div class="row g-0">
            <div class="col-md-4">
                <img src="images/{{ $product->picture }}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <p class="card-title">Name: {{ $product->name }}</p>
                    <p class="card-title">Major: {{ $product->major }}</p>
                    <p class="card-text">Level: {{ $product->level}} </p>
                    <p class="card-text">Time: {{ $product->time}} </p>
                    <p class="card-title">Price: ៛{{ $product->cost }}</p>
                    <p class="card-title">Tel: {{ $product->tel }}</p>
                    <a href="{{ route('product.show', $product->id) }}" class="btn btn-primary">View Detail</a>
                </div>
            </div>
            </div>
        </div>
    @endforeach

</div>
@endsection
