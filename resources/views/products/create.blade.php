@extends('temp.sing')

@section('content')
    <div  class=" m-4">

        <div class="d-flex align-items-center flex-wrap text-nowrap">
            <a href="{{route('products.index')}}" class="btn btn-info btn-icon-text mb-2 mb-md-0">
                All Post category
            </a>
        </div>
        <div class="mt-2 mb-3">
            <h4 class="mb-3 mb-md-0">Add New Post</h4>
        </div>


        <div class="container">
            <div class="container my-10 ">

                @if ($errors->any())
                    <div class="mt-2 alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="mb-3">
                        <label for="name" class="form-label">Title<span class="text-danger">*</span></label>
                        <input id="name" name="name" type="text" class="form-control" placeholder="Product Name">
                    </div>
                    <div class="mb-3">
                        <label for="detail" class="form-label">Detail<span class="text-danger">*</span></label>
                        <textarea class="form-control" placeholder="Detail Product Name" name="detail" id="detail" cols="12" rows="3"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Image <span class="text-danger">*</span></label>
                        <input id="image" name="image" type="file" class="form-control">
                    </div>

                    <div>
                        <button type="submit" class="btn btn-success btn-icon-text mb-2 mb-md-0" >
                            Post
                        </button>

                    </div>

                </form>
            </div>

        </div>
    </div>
@endsection

