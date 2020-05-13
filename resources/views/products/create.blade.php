    @extends('layouts.master')
@section('title', 'Add New Product')
@section('page-title', 'Create New Product')
@section('content')
<div class="row">
    <div class="col-10 mx-auto">
        <div class="card m-b-20">
            <div class="card-body">
                <h4 class="mt-0 header-title">Create New Product</h4>
                <p class="text-muted m-b-30">Please fill the form below in order to have product added in system.</p>
                        {{-- input fields --}}
                <form action="{{ route('products.store') }}" method="post">
                    @csrf
                @method('POST')
                <div class="form-group row">
                    <label for="product-name" class="col-sm-2 col-form-label">Product Name</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" placeholder="Enter Product Name" name="name"
                            id="product-name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="unity_measure" class="col-sm-2 col-form-label">Unity Measure</label>
                    <div class="col-sm-10">
                        <select class="custom-select" name="Measure_id" required>
                            <option selected="selected" disabled>Choose unity</option>
                            @foreach ($measures as $measure)
                            <option value="{{$measure->id}}">{{$measure->name}} ({{$measure->unit}})</option>
                            @endforeach
                        </select></div>
                </div>
                <div class="form-group row">
                    <label for="product-quantiy" class="col-sm-2 col-form-label">Quantity per unit</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" placeholder="Enter Product Quantity" name="quantity_per_unit"
                            id="product-quantity">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="product-quantiy" class="col-sm-2 col-form-label">Price per unit</label>
                    <div class="col-sm-10 input-group">
                        <input class="form-control" type="number" min="0" placeholder="Enter Product Price" name="product_price"
                            id="product-quantity">
                            <div class="input-group-append">
                                <span class="input-group-text">RWF</span>
                            </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Category</label>
                    <div class="col-sm-10">
                        <select class="custom-select" name="category_id" required>
                            <option selected="selected" disabled>Choose Category</option>
                            @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select></div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Product Description</label>
                    <div class="col-sm-10">
                        <textarea required="" class="form-control" rows="5" name="details"></textarea>
                    </div>
                </div>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Add Product</button> 

                </form>
            </div>
        </div>
    </div><!-- end col -->
</div>
@endsection