@extends('freshfood.app')
@section('title', 'Home')
@section('content')
@include('freshfood.partials.menu')
    <div class="container-fluid">
        <div class="fullBackground mt-1" id="itemsSlider" style="height: 480px" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('items/vegetables.jpg')}}"  width="100%" height="500">
                    <div class="carousel-caption">
                        <h3>Vegetables</h3>
                    </div>   
                </div>
                <div class="carousel-item">
                    <img src="{{asset('items/fruits.jpg')}}"  width="100%" height="480">
                    <div class="carousel-caption">
                        <h3>Fruits</h3>
                    </div>   
                </div>
                <div class="carousel-item">
                <img src="{{asset('items/meat.jpg')}}" width="100%" height="480">
                    <div class="carousel-caption">
                        <h3>Meat</h3>
                    </div>   
                </div>
            </div>
        </div>
    </div>
@stop