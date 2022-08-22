@extends('layouts.site_voxo')
@section('content')
    <div>
        <div class="title-header">
            <h5>Add New Category</h5>
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
                                        <h5>Category Information</h5>
                                    </div>

                                    <form class="theme-form theme-form-2 mega-form" method="post"  enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="mb-4 row align-items-center">
                                                <label class="form-label-title col-sm-2 mb-0">Category</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" placeholder="Category" name="name">
                                                </div>
                                            </div>

                                            <div class="mb-4 row align-items-center">
                                                <label class="form-label-title col-sm-2 mb-0">Description</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" placeholder="Description" name="description">
                                                </div>
                                            </div>

                                            <input type="hidden" name="status" value="1">
                                                </div>
                                            </div>

{{--                                            <div class="mb-4 row align-items-center">--}}
{{--                                                <label class="col-sm-2 col-form-label form-label-title">Images</label>--}}
{{--                                                <div class="col-sm-10">--}}
{{--                                                    <input class="form-control" type="file" id="formFileMultiple" name="image" multiple>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

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


