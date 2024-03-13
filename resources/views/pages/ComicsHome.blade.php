@extends('layouts.layout')

@vite('resources/js/app.js')
@section('MainListFilms')
    <div class="container-fluid listFilms position-relative ">
        <div class="btn-absolut">
            <button class="btn btn-primary text-uppercase fs-6"> current series</button>
        </div>

        @foreach ($films as $element)
            <div class="cardFilms">
                <div>
                    <img class="" src="{{ $element['thumb'] }}" alt="Title" height="100" width="100" />
                </div>
                <div class="card-body">
                    <h4 class="card-title">{{ $element['series'] }}</h4>
                </div>
            </div>
        @endforeach


        <button class="btn btn-primary text-uppercase rounded-0 ">load more</button>


    </div>


    <div class="container-fluid bg-primary ">
        <div class="container d-flex justify-content-center  gap-4 p-4">

            <div>
                <img src="{{Vite::asset('resources/images/buy-comics-digital-comics.png')}}" alt="digital comics" height="40" width="40">
                <span class="text-white text-uppercase  ">digital comics</span>
            </div>
            <div>
                <img src="{{Vite::asset('resources/images/buy-comics-merchandise.png')}}" alt="dc merchandise" height="40" width="40">
                <span class="text-white text-uppercase ">dc merchandise</span>
            </div>
            <div>
                <img src="{{Vite::asset('resources/images/buy-comics-subscriptions.png')}}" alt="subscription" height="40" width="40">
                <span class="text-white text-uppercase ">subscription</span>
            </div>
            <div>
                <img src="{{Vite::asset('resources/images/buy-comics-shop-locator.png')}}" alt="comic shop locator" height="40" width="40">
                <span class="text-white text-uppercase ">comic shop locator</span>
            </div>
            <div>
                <img src="{{Vite::asset('resources/images/buy-dc-power-visa.svg')}}" alt="dc power visa" height="40" width="40">
                <span class="text-white text-uppercase ">dc power visa</span>
            </div>

        </div>

    </div>
@endsection
