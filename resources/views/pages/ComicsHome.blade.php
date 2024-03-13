@extends('layouts.layout')

@vite('resources/js/app.js')
@section('MainListFilms')
    <div class="container-fluid listFilms position-relative ">
        <div class="btn-absolut">
            <button class="btn btn-primary"> current series</button>
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
@endsection
