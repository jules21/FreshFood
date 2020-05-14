@extends('layouts.master')
@section('title', ' All Products')
@section('page-title', 'View all Products')
    
@section('content')
<div class="row">
    <div class="col-sm-10 col-sm-offset-1">
      <div class="box box-info">
        <div class="card card-body">
          <h3 class="box-title">Product Pics</h3>
          <p class="pull-right"><a class="btn btn-sm bg-olive" href="#">
            <i class="fa fa-camera"></i> Upload photos</a></p>
        </div>
      </div>
        
      <div class="row">
          @foreach ($photos as $photo)
              
          @endforeach
        <div class="col-sm-6 col-md-4 col-lg-3" style="">
            <form class="img_delete_form" action="{{ route('uploads.destroy', $photo->id) }}" method="post">
                @csrf
              <input type="hidden" name="_method" value="DELETE">
              <button type="submit" class="btn btn-flat btn-danger btn-sm"><i class="mdi mdi-window-close"></i></button>
            </form>
            <img class="img-responsive" style="height:150px;object-fit:contain" src="{{ asset('photos/'. $photo->id) }}" title="image">
          </div>
        </div>
    <script>
        var img_delete_form = document.querySelectorAll('.img_delete_form');
         img_delete_form.forEach(function (val) {
          val.addEventListener('click', function(e, i) {
            e.preventDefault();
            var a = confirm('Are you sure you want to delete this image');
            if (a) {
              val.submit();
            }
          });
        });
      </script>
    </div>
  </div>
@endsection









