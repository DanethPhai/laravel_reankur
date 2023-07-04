@extends('temp.sing')

@section('content')
    <div class="card m-5">
        <div class="card-body">

            @if ($message = session('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif

            <div class="table-responsive">
                    @foreach($teachers as $index => $val)

                    <div class="card m-2" style="max-width: 100%;">

                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="/img/{{ $val->imagep }}" class="img-fluid rounded-start" alt="...">
                            </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <div class="mt-2">{{$val->name}}</div>
                                <div class="mt-2"> {{$val->birth}}</div>
                                <div class="mt-2">{{$val->tel}}</div>
                                <div class="mt-2">{{$val->level}}</div>
                                <div class="mt-2">{{$val->major}}</div>
                                <div class="mt-2 mb-2">{{ $val->created_at }}</div>
                                <form action="{{ route('teacher.destroy',$val->id) }}" method="POST">
                                    {{ csrf_field()  }}
                                    @method('DELETE')
                                    <a class="btn btn-sm btn-warning" href="{{route('teacher.edit', $val->id)}}"><i data-feather="link"></i> Edit</a>
                                    <button class="btn btn-sm btn-danger" type="submit"><i data-feather="trash"></i> Delete</button>
                                </form>
                            </div>


                        </div>

                        <div class="d-flex align-items-center flex-wrap text-nowrap mt-3">
                            <a href="{{url('/products/create')}}" class="btn btn-info btn-icon-text mb-2 mb-md-0 m-3">
                                <i data-feather="plus"></i> Post
                            </a>
                        </div>

                        </div>
                    </div>



{{--
                    <div class="card m-5" style="max-width: 100%;">

                        <div class="col-md-4" >
                            <img class="img-fluid  position-absolute top-50 start-30 translate-middle-y" alt="img" src="/img/{{ $val->imagep }}" width="200px">
                        </div>

                        <div class="col-md-8" >
                            <div class="mt-2">{{$val->name}}</div>
                            <div class="mt-2"> {{$val->birth}}</div>
                            <div class="mt-2">{{$val->tel}}</div>
                            <div class="mt-2">{{$val->level}}</div>
                            <div class="mt-2">{{$val->major}}</div>
                            <div class="mt-2 mb-2">{{ $val->created_at }}</div>

                                <form action="{{ route('teacher.destroy',$val->id) }}" method="POST">
                                    {{ csrf_field()  }}
                                    @method('DELETE')
                                    <a class="btn btn-sm btn-warning" href="{{route('teacher.edit', $val->id)}}"><i data-feather="link"></i> Edit</a>
                                    <button class="btn btn-sm btn-danger" type="submit"><i data-feather="trash"></i> Delete</button>
                                </form>
                        </div>

                            <div class="d-flex align-items-center flex-wrap text-nowrap mt-3">
                                <a href="{{url('/products/create')}}" class="btn btn-info btn-icon-text mb-2 mb-md-0 m-3">
                                    <i data-feather="plus"></i> Post
                                </a>
                            </div>

                    </div> --}}

                    @endforeach
            </div>
        </div>

    </div>
@endsection
