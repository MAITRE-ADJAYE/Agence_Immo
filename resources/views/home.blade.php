@extends('base')

@section('content')
    <div class="bg-light p-5 mb-5 text-center">
        <div class="container">
            <h1>Agence lorem</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis numquam, maiores sint quidem modi distinctio
                a consectetur quae, voluptates velit temporibus earum ea placeat commodi architecto tempora repellat pariatur praesentium?</p>
        </div>
    </div>

    <div class="container">
        <h2>Nos derniers bien</h2>
        <div class="row">
            @foreach ($properties as $property)
            <div class="col">
                @include('property.card')
            </div>
            @endforeach
        </div>
    </div>
@endsection
