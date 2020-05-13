@extends('layouts.master')
@section('title', ' All categories')
@section('page-title', 'View all categories')
    
@section('content')
<div class="row">
    <div class="col-12">
@if (empty($categories))
alert not category found!
@else
<div class="card m-b-20">
    <div class="card-body">
        <h4 class="mt-0 header-title">all categories</h4>
        <p class="text-muted m-b-30">Table view of all categories</p>
        <div class="table-rep-plugin">
            <div class="table-responsive b-0" data-pattern="priority-columns">
                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            {{-- <th>#</th> --}}
                            <th>category Name</th> 
                            {{-- <th>Action</th> --}}
                        </tr>
                    </thead>
                    <tbody> 
                        @foreach ($categories as $category)
                        <tr>
                            {{-- <td> {{$index + 1 }}<td> --}}
                                <td>{{$category->name}}</td>
                                {{-- <td>#</td> --}}
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