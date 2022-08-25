@extends('layouts.site_voxo')
@section('content')
    <div>
        <div class="title-header">
            <h5>Add New Brand</h5>
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
                                    @foreach ($errors->all() as $error)
                                        <p style="color: red">{{ $error }}</p><br>
                                    @endforeach
                                    <form class="theme-form theme-form-2 mega-form" method="post"  enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="mb-4 row align-items-center">
                                                <label class="form-label-title col-sm-2 mb-0">Brand Name</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" placeholder="Brand Name" name="name">
                                                </div>
                                            </div>

{{--                                            <div class="mb-4 row align-items-center">--}}
{{--                                                <label class="col-sm-2 col-form-label form-label-title">Status</label>--}}
{{--                                                <div class="col-sm-10">--}}
{{--                                                    <input class="form-control" type="number" placeholder="Price" name="price">--}}
{{--                                                    <select class="js-example-basic-single w-100" name="status">--}}
{{--                                                        <option value="1">1</option>--}}
{{--                                                        <option value="2">2</option>--}}
{{--                                                    </select>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
                                            <input type="hidden" name="status" value="1">

                                            <div class="mb-4 row align-items-center">
                                                <label class="col-sm-2 col-form-label form-label-title">Images</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="file" id="formFileMultiple" name="image" multiple>
                                                </div>
                                            </div>

                                            <div class="row align-items-center">
                                                <label
                                                    class="col-lg-2 col-md-3 col-form-label form-label-title">
                                                </label>
                                                <div>
                                                    <button type="submit" class="align-items-center btn btn-theme" >
                                                        <i data-feather="plus-square"></i>Add new
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

