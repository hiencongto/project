@extends('layouts.site_voxo')
@section('content')
    <div>
        <div class="title-header">
            <h5>Edit Brand</h5>
        </div>

        <!-- New Product Add Start -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-header-2">
                                        <h5>Brand Information</h5>
                                    </div>

                                    <form class="theme-form theme-form-2 mega-form" method="post"  enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="mb-4 row align-items-center">
                                                <label class="form-label-title col-sm-2 mb-0">Brand Name</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" name="name" value="{{$brand->name}}">
                                                </div>
                                            </div>

                                            <div class="mb-4 row align-items-center">
                                                <label class="col-sm-2 col-form-label form-label-title">Status</label>
                                                <div class="col-sm-10">
                                                    <select class="js-example-basic-single w-100" name="status">
                                                        <option value="1" {{$brand->status == 1 ? 'selected' : ''}}>In stock</option>
                                                        <option value="0" {{$brand->status == 0 ? 'selected' : ''}}>Out of stock</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="mb-4 row align-items-center">
                                                <label class="col-sm-2 col-form-label form-label-title">Image</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="file" id="formFileMultiple" name="image" multiple >
                                                </div>
                                            </div>

                                            <input class="form-control" type="hidden" id="formFileMultiple" name="oldImage" value="{{$brand->image}}" >
                                            <div class="mb-4 row align-items-center">
                                                <label class="col-sm-2 col-form-label form-label-title">Image</label>
                                                <div class="col-sm-10">
                                                    <img src="{{asset('images/'.$brand->image)}}" class="img-fluid"   alt="">
                                                </div>
                                            </div>

                                            <div class="row align-items-center">
                                                <label
                                                    class="col-lg-2 col-md-3 col-form-label form-label-title">
                                                </label>
                                                <div>
                                                    <button type="submit" class="align-items-center btn btn-theme" >
                                                        <i data-feather="plus-square"></i>Edit brand
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

