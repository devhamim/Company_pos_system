@extends('layouts.dashboard')
@section('content')
<div class="container-fluid flex-grow-1 container-p-y pt-5">
    <form method="POST" action="{{ route('product.update') }}" enctype="multipart/form-data">
        @csrf
    <div class="row">
        <div class="col-lg-10 col-md-10 col-sm-12 m-auto">
        <div class="card mb-4">
            <div class="card-header">
                <h6>Products</h6>
            </div>
            <div class="card-body">
                {{-- <div class="row">

                    <div class="col-lg-6">
                        <div class="position-relative">
                            <label class="floating-label" for="Category">Category *</label>
                            <select class="select2-demo form-control select2-hidden-accessible" multiple style="width: 100%" name="category_id[]" tabindex="-1" aria-hidden="true">
                                <optgroup label="">
                                    @php
                                        $after_explode = explode(',', $product->category_id);
                                    @endphp
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" {{ in_array($category->id, $after_explode) ? 'selected' : '' }}>
                                            {{ $category->category_name }}
                                        </option>
                                    @endforeach
                                </optgroup>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-6 col-lg-6">
                        <div class="form-group">
                            <label class="form-label">Regular Price *</label>
                            <input type="number" name="product_price" class="form-control" placeholder="Regular Price" value="{{$product->product_price}}">
                            @error('product_price')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6 col-lg-6">
                        <div class="form-group">
                            <label class="form-label">Product Name *</label>
                            <input type="text" name="product_name" class="form-control" placeholder="Product Name" value="{{$product->product_name}}">
                            <input type="hidden" name="product_id" class="form-control" placeholder="product_id" value="{{$product->id}}">
                            <input type="hidden" name="added_by" class="form-control" placeholder="added_by" value="{{$product->added_by}}">
                            @error('product_name')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6 col-lg-6">
                        <div class="form-group">
                            <label class="form-label">Sale Price *</label>
                            <input type="number" name="product_discount" class="form-control" placeholder="Sale Price" value="{{$product->product_discount != null ? $product->product_discount : ''}}">
                            @error('product_discount')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6 col-lg-6">
                        <div class="form-group">
                            <label class="form-label">SKU *</label>
                            <input type="text" name="sku" class="form-control" placeholder="SKU" value="{{$product->sku != null ? $product->sku : ''}}">
                            @error('sku')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6 col-lg-6">
                        <div class="form-group">
                            <label class="form-label">Stock</label>
                            <input type="number" name="quantity" class="form-control" placeholder="Quantity" value="{{$product->quantity != null ? $product->quantity : ''}}">
                            @error('quantity')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group upload_file">
                            <label class="form-label w-100">Preview image</label>
                            <label class="btn btn-outline-primary  mt-2">
                                Preview image
                                <input type="file" name="preview_image" class="image">
                            </label>
                            @error('preview_image')
                                <strong class="text-danger">{{$message}}</strong>
                            @enderror
                            <img width="90" class="mt-3 mb-3" id="image1" height="auto" src="{{asset('uploads/products/preview')}}/{{$product->preview_image}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group upload_file">
                            <label class="form-label w-100">Gallery images</label>
                            <label class="btn btn-outline-primary  mt-2">
                                Gallery images
                                <input type="file" multiple name="gallery_image[]" class="image">
                            </label>
                            @error('gallery_image')
                                <strong class="text-danger">{{$message}}</strong>
                            @enderror

                            @foreach ($gallery as $gallery)
                            <img width="90" class="mt-3 mb-3 mr-2" id="image" height="auto" src="{{asset('uploads/products/gallery')}}/{{$gallery->gallery_image}}" alt="">
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label w-100 mb-2">Product description</label>
                            <textarea id="summernote" name="description" class="form-control" placeholder="Product description">{!! $product->description !!}</textarea>
                            @error('description')
                                <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-label mb-2">Status</label>
                            <select name="status" id="status" class="form-control">
                                <option value="1" {{$product->status == 1 ? 'selected' : ''}}>Active</option>
                                <option value="2" {{$product->status == 2 ? 'selected' : ''}}>Deactive</option>
                            </select>
                        </div>
                    </div>

                </div> --}}
            </div>
            <div class="col-md-4 mb-4 ml-3 m-auto pb-5 text-center">
                <button class="btn btn-primary">Submit</button>
            </div>
            </div>
        </div>
    </div>
    </form>

    </div>
</div>
@endsection

@section('footer_script')

@endsection
