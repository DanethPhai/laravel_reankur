@extends('layouts.app')

@section('content')


<div class="container">

    <div class="col g-0"></div>

    @foreach ($products as $product)
        <div class="card m-5" style="max-width: 100%;">

            <div class="row g-0">
                <div class="col-md-4">
                    <img src="images/{{ $product->picture }}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <p class="card-title">{{ $product->name }}</p>
                        <p class="card-title">Price: ${{ $product->major }}</p>
                        <p class="card-text">{{ $product->level}} </p>
                        <p class="card-title">{{ $product->time }}</p>
                        <p class="card-title">{{ $product->cost }}</p>
                        <p class="card-title">Price: ${{ $product->tel }}</p>
                        <a href="{{ route('product.show', $product->id) }}" class="btn btn-primary">View Detail</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

</div>


@endsection
