@extends('layouts.master')
@section('title', ' All measures')
@section('page-title', 'View all measures')
    
@section('content')
<div class="row">
    <div class="col-12">
@if (empty($measures))
alert not measure found!
@else
<div class="card m-b-20">
    <div class="card-body">
        <h4 class="mt-0 header-title">all measures unit</h4>
        <p class="text-muted m-b-30">Table view of all unit measures</p>
        <div class="table-rep-plugin">
            <div class="table-responsive b-0" data-pattern="priority-columns">
                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            {{-- <th>#</th> --}}
                            <th>measure Name</th> 
                            <th>unit</th>
                        </tr>
                    </thead>
                    <tbody> 
                        @foreach ($measures as $measure)
                        <tr>
                            {{-- <td> {{$index + 1 }}<td> --}}
                                <td>{{$measure->name}}</td>
                                <td>{{$measure->unit}}</td>
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