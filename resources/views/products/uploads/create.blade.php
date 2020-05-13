@extends('layouts.master')
@section('title', 'Add New Product')
@section('page-title', 'Create New Product')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card m-b-20">
            <div class="card-body">
                <h4 class="mt-0 header-title">Dropzone</h4>
                <p class="text-muted m-b-30">DropzoneJS is an open source library that provides drag’n’drop file uploads
                    with image previews.</p>
                <div class="m-b-30">
                    <form action="{{ route('uploads.store',  Request::route('product')) }}" class="dz-clickable" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="form-group">
                        <label for="Photos">Photos</label>
                        <input type="file" name="photos[]" multiple accept="image/*"  id="gallery-photo-add">
                        <div class="gallery"></div>
                    </div>
                    {{-- <button type="submit" --}}
                        {{-- class="btn btn-primary waves-effect waves-light">Send Files</button> --}}
                        <div class="text-center m-t-15"><button type="submit"
                                class="btn btn-primary waves-effect waves-light">Send Files</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- end col -->
</div>
@endsection


@section('extra-js')
<script>
 $(function() {
    // Multiple images preview in browser
    var imagesPreview = function(input, placeToInsertImagePreview) {

        if (input.files) {
            var filesAmount = input.files.length;

            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();

                reader.onload = function(event) {
                    $($.parseHTML('<img width="100">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                }

                reader.readAsDataURL(input.files[i]);
            }
        }

    };

    $('#gallery-photo-add').on('change', function() {
        imagesPreview(this, 'div.gallery');
    });
});
  </script>
@endsection