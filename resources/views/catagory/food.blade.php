@extends('temp.sing')
@section('content')
<center>
    <h3 >Catagory</h3>
    <div class="m-5">
        <a href="{{route('products.index')}}" class="btn btn-info btn-icon-text p-5">
            Food
        </a>
    </div>
    <div class=" m-5">
        <a href="{{route('products.index')}}" class="btn btn-info btn-icon-text p-5">
            Study
        </a>
    </div>
</center>
@endsection
