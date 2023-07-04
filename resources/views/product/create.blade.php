@extends('layouts.app')

@section('content')
<div  class=" m-4">

    <div class="d-flex align-items-center flex-wrap text-nowrap">
        <a href="{{url('/')}}" class="btn btn-info btn-icon-text mb-2 mb-md-0">
            All Post category
        </a>
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

            <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="mb-3">
                    <label for="name" class="form-label">ឈ្មោះ<span class="text-danger">*</span></label>
                    <input id="name" name="name" type="text" class="form-control" placeholder="ឈ្មោះ" required>
                </div>
                <div class="mb-3">
                    <label for="major" class="form-label">ឯកទេស</label>
                    <select id="major" name="major" class="form-control">
                        <option value="ភាសាអង់គ្លេស">ភាសាអង់គ្លេស</option>
                        <option value="គណិតវិទ្យា">គណិតវិទ្យា</option>
                        <option value="រូបវិទ្យា">រូបវិទ្យា</option>
                        <option value="គីមិវិទ្យា">គីមិវិទ្យា</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="level" class="form-label">កម្រិត<span class="text-danger">*</span></label>
                    <select id='level' name='level' class="form-control" aria-placeholder="Choose">
                        <option value="ថ្នាក់មត្តេយ្យសិក្សា">មត្តេយ្យសិក្សា</option>
                        <option value="ថ្នាក់បឋមសិសក្សា">បឋមសិសក្សា</option>
                        <option value="ថ្នាក់អនុវិទ្យាល័យ">អនុវិទ្យាល័យ</option>
                        <option value="ថ្នាក់វិទ្យាល័យ">វិទ្យាល័យ</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="time" class="form-label"> ម៉ោងសិក្សា <span class="text-danger">*</span></label>
                    <input id="time" name="time" type="time" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="cost" class="form-label">តម្លៃ<span class="text-danger">*</span></label>
                    <input id="cost" name="cost" type="cost" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="tel" class="form-label">លេខទូរសព្ទ<span class="text-danger">*</span></label>
                    <input id="tel" name="tel" type="tel" class="form-control" placeholder="012345678">
                </div>

                <div class="mb-3">
                    <label for="picture" class="form-label">រូបថត <span class="text-danger">*</span></label>
                    <input id="picture" name="picture" type="file" class="form-control">

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



