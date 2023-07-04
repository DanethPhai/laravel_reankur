@extends('temp.sing')

@section('content')
    <div >
        <div>
            <h4 class="mb-3 mb-md-0">Add New Post</h4>
        </div>
        <div class="d-flex align-items-center flex-wrap text-nowrap">
            <a href="{{route('teacher.index')}}" class="btn btn-info btn-icon-text mb-2 mb-md-0">
                All Post
            </a>
        </div>
    </div>

    <div class="card">
        <div class="card-body">

            @if ($errors->any())
                <div class="mt-2 alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('teacher.update', $teacher->id) }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">ឈ្មោះ</label>
                    <input id="name"  value="{{$teacher->name}}" name="name" type="text" class="form-control" placeholder="ឈ្មោះ">
                </div>

                <div class="mb-3">
                    <label for="birth" class="form-label">ថ្ងៃ​ ខែ ឆ្នាំកំណើត</label>
                    <input id="birth"  value="{{$teacher->birth}}"  name="birth" type="date" class="form-control" placeholder="ថ្ងៃ​ ខែ ឆ្នាំកំណើត">
                </div>

                <div class="mb-3">
                    <label for="tel" class="form-label">លេខទូរសព្ទ</label>
                    <input id="tel"  value="{{$teacher->tel}}"  name="tel" type="tel" class="form-control" placeholder="012345678">
                </div>

                <div class="mb-3">
                    <label for="level" class="form-label">កម្រិត</label>
                    <select id='level'  value="{{$teacher->level}}"  name='level' class="form-control" aria-placeholder="Choose">
                        <option value="ថ្នាក់មត្តេយ្យសិក្សា">មត្តេយ្យសិក្សា</option>
                        <option value="ថ្នាក់បឋមសិសក្សា">បឋមសិសក្សា</option>
                        <option value="ថ្នាក់អនុវិទ្យាល័យ">អនុវិទ្យាល័យ</option>
                        <option value="ថ្នាក់វិទ្យាល័យ">វិទ្យាល័យ</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="major" class="form-label">ឯកទេស</label>
                    <select id="major"  value="{{$teacher->major}}"  name="major" class="form-control">
                        <option value="ភាសាអង់គ្លេស">ភាសាអង់គ្លេស</option>
                        <option value="គណិតវិទ្យា">គណិតវិទ្យា</option>
                        <option value="រូបវិទ្យា">រូបវិទ្យា</option>
                        <option value="គីមិវិទ្យា">គីមិវិទ្យា</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="imagep" class="form-label">រូបថតផ្ទាល់ខ្លួន </label>
                    <input id="imagep"  value="{{$teacher->imagep}}"  name="imagep" type="file" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">រូបថតសញ្ញាបត្រ័បញ្ជាក់កាសិក្សា </label>
                    <input id="image"  value="{{$teacher->image}}"  name="image" type="file" class="form-control">
                </div>

                <div>
                    <button type="submit" class="btn btn-success btn-icon-text mb-2 mb-md-0" >
                        save
                    </button>

                </div>


            </form>
        </div>

    </div>
@endsection

