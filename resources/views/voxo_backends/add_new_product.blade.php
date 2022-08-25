@extends('layouts.site_voxo')
@section('content')
        <div>
            <div class="title-header">
                <h5>Add New Product</h5>
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
                                            <h5>Product Information</h5>
                                        </div>
                                        <p style="color: greenyellow"> {{$msg ?? ''}}</p>
                                        @foreach ($errors->all() as $error)
                                            <p style="color: red">{{ $error }}</p><br>
                                        @endforeach
                                        <form class="theme-form theme-form-2 mega-form" method="post"  enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="mb-4 row align-items-center">
                                                    <label class="form-label-title col-sm-2 mb-0">Product
                                                        Name</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="text" placeholder="Product Name" name="name">
                                                    </div>
                                                </div>

                                                <div class="mb-4 row align-items-center">
                                                    <label class="col-sm-2 col-form-label form-label-title">Price</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="text" placeholder="Price" name="price">
                                                    </div>
                                                </div>

                                                <div class="mb-4 row align-items-center">
                                                    <label class="col-sm-2 col-form-label form-label-title">Category</label>
                                                    <div class="col-sm-10">
                                                        <select class="js-example-basic-single w-100" name="category_id">
                                                            @foreach($categories as $category)
                                                                <option value="{{$category->id}}"> {{$category->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="mb-4 row align-items-center">
                                                    <label class="col-sm-2 col-form-label form-label-title">Brand</label>
                                                    <div class="col-sm-10">
                                                        <select class="js-example-basic-single w-100" name="brand_id">
                                                        @foreach($brands as $brand)
                                                            <option value="{{$brand->id}}">{{$brand->name}}</option>
                                                        @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="mb-4 row align-items-center">
                                                    <label class="col-sm-2 col-form-label form-label-title">Quantity</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="number" placeholder="Quantity" name="quantity">
                                                    </div>
                                                </div>

                                                <div class="mb-4 row align-items-center">
                                                    <label class="col-sm-2 col-form-label form-label-title">Description</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="text" placeholder="Description" name="description">
                                                    </div>
                                                </div>

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

{{--                                <div class="card">--}}
{{--                                    <div class="card-body">--}}
{{--                                        <div class="card-header-2">--}}
{{--                                            <h5>Description</h5>--}}
{{--                                        </div>--}}

{{--                                        <form class="theme-form theme-form-2 mega-form">--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col-12">--}}
{{--                                                    <div class="row">--}}
{{--                                                        <label class="form-label-title col-sm-2 mb-0">Product Description</label>--}}
{{--                                                        <div class="col-sm-10">--}}
{{--                                                            <div id="editor"></div>--}}
{{--                                                        </div>--}}

{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </form>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="card">--}}
{{--                                    <div class="card-body">--}}
{{--                                        <div class="card-header-2">--}}
{{--                                            <h5>Product Images</h5>--}}
{{--                                        </div>--}}

{{--                                        <form class="theme-form theme-form-2 mega-form">--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="mb-4 row align-items-center">--}}
{{--                                                    <label--}}
{{--                                                        class="col-sm-2 col-form-label form-label-title">Images</label>--}}
{{--                                                    <div class="col-sm-10">--}}
{{--                                                        <input class="form-control form-choose" type="file"--}}
{{--                                                               id="formFileMultiple" multiple>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}

{{--                                                <div class="row align-items-center">--}}
{{--                                                    <label--}}
{{--                                                        class="col-sm-2 col-form-label form-label-title">Thumbnail--}}
{{--                                                        Image</label>--}}
{{--                                                    <div class="col-sm-10">--}}
{{--                                                        <input class="form-control form-choose" type="file"--}}
{{--                                                               id="formFileMultiple1" multiple>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </form>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="card">--}}
{{--                                    <div class="card-body">--}}
{{--                                        <div class="card-header-2">--}}
{{--                                            <h5>Product Videos</h5>--}}
{{--                                        </div>--}}

{{--                                        <form class="theme-form theme-form-2 mega-form">--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="mb-4 row align-items-center">--}}
{{--                                                    <label class="col-sm-2 col-form-label form-label-title">Video--}}
{{--                                                        Provider</label>--}}
{{--                                                    <div class="col-sm-10">--}}
{{--                                                        <select class="js-example-basic-single w-100" name="state">--}}
{{--                                                            <option>Vimeo</option>--}}
{{--                                                            <option>Youtube</option>--}}
{{--                                                            <option>Dailymotion</option>--}}
{{--                                                            <option>Vimeo</option>--}}
{{--                                                        </select>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}

{{--                                                <div class="row align-items-center">--}}
{{--                                                    <label class="form-label-title col-sm-2 mb-0">Video--}}
{{--                                                        Link</label>--}}
{{--                                                    <div class="col-sm-10">--}}
{{--                                                        <input class="form-control" type="text"--}}
{{--                                                               placeholder="Video Link">--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </form>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="card">--}}
{{--                                    <div class="card-body">--}}
{{--                                        <div class="card-header-2">--}}
{{--                                            <h5>Shipping</h5>--}}
{{--                                        </div>--}}

{{--                                        <form class="theme-form theme-form-2 mega-form">--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="mb-4 row align-items-center">--}}
{{--                                                    <label class="form-label-title col-sm-2 mb-0">Weight--}}
{{--                                                        (kg)</label>--}}
{{--                                                    <div class="col-sm-10">--}}
{{--                                                        <input class="form-control" type="number"--}}
{{--                                                               placeholder="Weight">--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}

{{--                                                <div class="row align-items-center">--}}
{{--                                                    <label--}}
{{--                                                        class="col-sm-2 col-form-label form-label-title">Dimensions--}}
{{--                                                        (cm)</label>--}}
{{--                                                    <div class="col-sm-10">--}}
{{--                                                        <select class="js-example-basic-single w-100" name="state">--}}
{{--                                                            <option>Length</option>--}}
{{--                                                            <option>Width</option>--}}
{{--                                                            <option>Height</option>--}}
{{--                                                        </select>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </form>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="card">--}}
{{--                                    <div class="card-body">--}}
{{--                                        <div class="card-header-2">--}}
{{--                                            <h5>Inventory</h5>--}}
{{--                                        </div>--}}

{{--                                        <form class="theme-form theme-form-2 mega-form">--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="mb-4 row align-items-center">--}}
{{--                                                    <label class="form-label-title col-sm-2 mb-0">SKU</label>--}}
{{--                                                    <div class="col-sm-10">--}}
{{--                                                        <input class="form-control" type="text">--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}

{{--                                                <div class="row align-items-center">--}}
{{--                                                    <label class="col-sm-2 col-form-label form-label-title">Stock--}}
{{--                                                        Status</label>--}}
{{--                                                    <div class="col-sm-10">--}}
{{--                                                        <select class="js-example-basic-single w-100" name="state">--}}
{{--                                                            <option>In Stock</option>--}}
{{--                                                            <option>Out Of Stock</option>--}}
{{--                                                            <option>On Backorder</option>--}}
{{--                                                        </select>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </form>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="card">--}}
{{--                                    <div class="card-body">--}}
{{--                                        <div class="card-header-2">--}}
{{--                                            <h5>Link Products</h5>--}}
{{--                                        </div>--}}

{{--                                        <form class="theme-form theme-form-2 mega-form">--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="mb-4 row align-items-center">--}}
{{--                                                    <label class="form-label-title col-sm-2 mb-0">Upsells</label>--}}
{{--                                                    <div class="col-sm-10">--}}
{{--                                                        <input class="form-control" type="search">--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}

{{--                                                <div class="row align-items-center">--}}
{{--                                                    <label--}}
{{--                                                        class="form-label-title col-sm-2 mb-0">Cross-Sells</label>--}}
{{--                                                    <div class="col-sm-10">--}}
{{--                                                        <input class="form-control" type="search">--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </form>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection

