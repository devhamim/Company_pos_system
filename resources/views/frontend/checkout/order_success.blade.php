@extends('frontend.master.master')

@section('content')
<section class=" position-relative pt-120 pb-100 bg-light pt-5 mt-5" style="height: 50vh">
    <div class="auto-container">
        <div class="row">
            @csrf
                <div class="col-lg-6 m-auto rounded" style="background: #bbffb9; padding: 20px 40px">
                    <h3>order success</h3>
                </div>
        </div>
    </div>
</section>
@endsection

