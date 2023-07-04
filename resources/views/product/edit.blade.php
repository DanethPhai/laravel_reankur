@extends('layouts.app')

@section('content')

<div class="container mt-5 mb-5">

    <h2>Update Product</h2>
    <hr>

        <div class="d-flex align-items-center flex-wrap text-nowrap">
            <a href="{{route('product.index')}}" class="btn btn-info btn-icon-text mb-2 mb-md-0">
                All Post
            </a>
        </div>


    <div class="card">
        <div class="card-body">

            <form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">ឈ្មោះ<span class="text-danger">*</span></label>
                    <input id="name"  value="{{$product->name}}" name="name" type="text" class="form-control" placeholder="ឈ្មោះ" required>
                </div>
                <div class="mb-3">
                    <label for="major" class="form-label">ឯកទេស</label>
                    <select id="major" value="{{$product->major}}" name="major" class="form-control">
                        <option value="ភាសាអង់គ្លេស">ភាសាអង់គ្លេស</option>
                        <option value="គណិតវិទ្យា">គណិតវិទ្យា</option>
                        <option value="រូបវិទ្យា">រូបវិទ្យា</option>
                        <option value="គីមិវិទ្យា">គីមិវិទ្យា</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="level" class="form-label">កម្រិត<span class="text-danger">*</span></label>
                    <select id='level' name='level' value="{{$product->level}}" class="form-control" aria-placeholder="Choose">
                        <option value="ថ្នាក់មត្តេយ្យសិក្សា">មត្តេយ្យសិក្សា</option>
                        <option value="ថ្នាក់បឋមសិសក្សា">បឋមសិសក្សា</option>
                        <option value="ថ្នាក់អនុវិទ្យាល័យ">អនុវិទ្យាល័យ</option>
                        <option value="ថ្នាក់វិទ្យាល័យ">វិទ្យាល័យ</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="time" class="form-label"> ម៉ោងសិក្សា <span class="text-danger">*</span></label>
                    <input id="time" name="time" type="time" value="{{$product->time}}" class="form-control">
                </div>


                <div class="mb-3">
                    <label for="cost" class="form-label">តម្លៃ<span class="text-danger">*</span></label>
                    <input id="cost" name="cost" type="cost" value="{{$product->cost}}" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="tel" class="form-label">លេខទូរសព្ទ<span class="text-danger">*</span></label>
                    <input id="tel" name="tel" type="tel" value="{{$product->tel}}" class="form-control" placeholder="012345678">
                </div>

                <div class="mb-3">
                    <label for="picture" class="form-label">រូបថត <span class="text-danger">*</span></label>
                    <input id="picture" name="picture" type="file" value="{{$product->picture}}" class="form-control">

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



