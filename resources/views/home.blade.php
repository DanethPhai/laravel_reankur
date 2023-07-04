@extends('layouts.app')

@section('content')

<div className="d-flex flex-column justify-content-center align-items-center p-5">
    <main className="m-2 w-50 d-flex flex-column ">
      
      <div class="card  max-width: 940px mb-2">
        <div class="d-flex flex-row">
          <div class="d-flex flex-column justify-content-center align-items-center mt-2">
            <img
              src="https://www.news-medical.net/image.axd?picture=2018%2F4%2Fshutterstock_By_Andrii_Vodolazhsky.jpg"
              class=" w-100 p-2"
              alt="..."></img>
          </div>

          <div class="col-md-8">
            <div class="card-body ">
              <p class="card-text">
                បង្រៀនជីវវិទ្យា ដោយខ្ញុំបាទ យ៉ាន សុខកែវ សម្រាប់សិស្សជាក្រុម។
                <br /> ថ្នាក់អនុវិទ្យាល័យ ម៉ោងដែលបង្រៀន 5:30-7:00pm{" "}
              </p>

              <p class="card-text">តម្លៃ៖ 250,000 រៀល </p>

              <p class="card-text">
                <small class="text-muted">លេខទំនាក់ទំនង 098 876 543</small>
              </p>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>


@endsection
