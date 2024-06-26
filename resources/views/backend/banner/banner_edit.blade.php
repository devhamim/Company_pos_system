@extends('layouts.dashboard')
@section('content')
<div class="container-fluid flex-grow-1 container-p-y pt-5">
    <div class="row">
        <div class="col-lg-8 col-md-10 col-sm-12 m-auto">
        <div class="card mb-4">
            <h6 class="card-header">Sliders</h6>
            <div class="card-body">
                <form method="POST" action="{{route('banner.update')}}" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <label class="form-label">Sliders Title</label>
                            <input type="text" name="banner_title" class="form-control" placeholder="Title" value="{{$banner->banner_title}}">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Sliders Description</label>
                            <textarea name="banner_desp" class="form-control" id="" cols="30" rows="5" placeholder="Description">{{$banner->banner_desp}}</textarea>
                        </div>
                        <div class="form-group upload_file">
                            <label class="form-label w-100">Sliders image</label>
                            <label class="btn btn-outline-primary  mt-2">
                                Sliders image
                                <input type="file" name="banner_image" onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])" class="image">
                            </label> &nbsp;
                            <img class="mt-3" id="image" src="{{asset('uploads/banner')}}/{{$banner->banner_image}}" width="100" height="auto" />
                        </div>
                        <div>
                            <input type="hidden" name="banner_id" value="{{$banner->id}}">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
