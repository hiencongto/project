@extends('layouts.site_voxo')
@section('content')
    <div>
        <div class="title-header">
            <h5>Edit Category</h5>
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

                                    <form class="theme-form theme-form-2 mega-form" method="post" >
                                        @csrf
                                        <div class="row">
                                            <div class="mb-4 row align-items-center">
                                                <label class="form-label-title col-sm-2 mb-0">Category</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" name="name" value="{{$category->name}}">
                                                </div>
                                            </div>

                                            <div class="mb-4 row align-items-center">
                                                <label class="form-label-title col-sm-2 mb-0">Description</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" name="description" value="{{$category->description}}">
                                                </div>
                                            </div>

                                            <div class="mb-4 row align-items-center">
                                                <label class="col-sm-2 col-form-label form-label-title">Status</label>
                                                <div class="col-sm-10">
                                                    <select class="js-example-basic-single w-100" name="status">
                                                        <option value="1" selected="{{$category->status}}">In stock</option>
                                                        <option value="0">Out of stock</option>
                                                    </select>
                                                </div>
                                            </div>


                                            <div class="row align-items-center">
                                                <label
                                                    class="col-lg-2 col-md-3 col-form-label form-label-title">
                                                </label>
                                                <div>
                                                    <button type="submit" class="align-items-center btn btn-theme" >
                                                        <i data-feather="plus-square"></i>Update Category
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

