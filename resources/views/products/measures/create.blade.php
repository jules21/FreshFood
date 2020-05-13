@extends('layouts.master')
@section('title', 'Add New Measurement')
@section('page-title', 'Create New Measurement')
@section('content')
<div class="row">
    <div class="col-10 mx-auto">
        <div class="card m-b-20">
            <div class="card-body">
                <h4 class="mt-0 header-title">Create New Measurent</h4>
                <p class="text-muted m-b-30">Please fill the form below in order to have product Measure unit added in system.</p>
                        {{-- input fields --}}
                <form action="{{ route('categories.store') }}" method="post">
                    @csrf
                @method('POST')
                <div class="form-group row">
                    <label for="Measure-name" class="col-sm-2 col-form-label">Measure Name</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" placeholder="Enter Measure Name" name="name"
                            id="Measure-name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Measure-name" class="col-sm-2 col-form-label">Measure Unit</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" placeholder="Enter Measure unit" name="unit"
                            id="Measure-name">
                    </div>
                </div>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Add New Unit</button> 
                </form>
            </div>
        </div>
    </div><!-- end col -->
</div>
@endsection