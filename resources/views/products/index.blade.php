@extends('layouts.master')
@section('title', ' All Products')
@section('page-title', 'View all Products')
    
@section('content')
<div class="row">
    <div class="col-12">
@if (empty($products))
alert not product found!
@else
<div class="card m-b-20">
    <div class="card-body">
        <h4 class="mt-0 header-title">all Products</h4>
        <p class="text-muted m-b-30">Table view of all Products</p>
        <div class="table-rep-plugin">
            <div class="table-responsive b-0" data-pattern="priority-columns">
                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Product Name</th> 
                            <th>Category</th>
                            <th>Quantity</th>
                            <th>Price <span class="badge badge-primary">RWF</span></th>
                            <th>Unit</th>
                            <th>Description</th>
                            <th>Photo</th>
                        </tr>
                    </thead>
                    <tbody> 
                        @foreach ($products as $product)
                        <tr>
                                <td>{{$product->id}}</td>
                                <td><a href="{{ route('products.show', $product->id) }}">{{$product->name}}</a></td>
                                <td>{{$product->category->name}}</td>
                                <td>{{$product->quantity_per_unit}}</td>
                                <td>{{$product->price['price']}}</td>
                                <td>{{$product->unity_measure}}</td>
                            <td>{{$product->details}}</td>
                            <td><img src="{{ asset('photos/'.$product->Photos[0]['name']) }}" width="100" alt="photo"></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endif
    </div><!-- end col -->
</div>
@endsection