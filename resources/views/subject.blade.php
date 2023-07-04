@extends('layouts.app')

@section('content')

    <div class="col g-0">
        <div class="card m-5" style="max-width: 100%">

            <div class="row g-0 m-1">
                    <div class="col-md-4 ">
                        <img src="https://cdn.pixabay.com/photo/2015/11/15/07/47/geometry-1044090__480.jpg" class="img-fluid rounded" alt="...">
                    </div>
                    <div class="col-md-4 ">
                        <img src="https://as1.ftcdn.net/v2/jpg/04/07/37/74/1000_F_407377427_cAi21m47R3TLy1vulqo0W7P9aWV9eiQ7.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-4 ">
                        <img src="https://img.freepik.com/free-photo/english-british-england-language-education-concept_53876-133735.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
            </div>



            <div class="container">
                <div class="row g-0 ">
                    <div class="d-grid gap-2 col-3 mx-auto">
                        <a href="{{url('/')}}" class="btn btn-info btn-icon-text mb-2 ">
                            Mathematic
                        </a>
                    </div>
                    <div class="d-grid gap-2 col-3 mx-auto">
                        <a href="{{url('/')}}" class="btn btn-info btn-icon-text mb-2 ">
                            Biology
                        </a>
                    </div>
                    <div class="d-grid gap-2 col-3 mx-auto">
                        <a href="{{url('/')}}" class="btn btn-info btn-icon-text mb-2 ">
                            English
                        </a>
                    </div>

                </div>

            </div>

            <div class="row g-0 m-3">
                <div class="col-md-4 ">
                    <img src="https://www.thoughtco.com/thmb/6MsMmUK27akFhb8i89kj95J5iko=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/GettyImages-545286316-433dd345105e4c6ebe4cdd8d2317fdaa.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-4 ">
                    <img src="https://www.vedantu.com/seo/content-images/bc692335-2c03-4559-9cf0-dff766298eef.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-4 ">
                    <img src="https://img.freepik.com/free-vector/boys-playing-football-school_1308-28036.jpg" class="img-fluid rounded-start" alt="...">
                </div>
            </div>

            <div class="container">
                <div class="row g-0 ">
                    <div class="d-grid gap-2 col-3 mx-auto">
                        <a href="{{url('/')}}" class="btn btn-info btn-icon-text mb-2 ">
                            Chemistry
                        </a>
                    </div>
                    <div class="d-grid gap-2 col-3 mx-auto">
                        <a href="{{url('/')}}" class="btn btn-info btn-icon-text mb-2 ">
                            Physic
                        </a>
                    </div>
                    <div class="d-grid gap-2 col-3 mx-auto">
                        <a href="{{url('/')}}" class="btn btn-info btn-icon-text mb-2 ">
                            Primary School
                        </a>
                    </div>

                </div>

            </div>
        </div>


    </div>

  @endsection
