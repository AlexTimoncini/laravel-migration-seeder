@extends('layout.app')

@section('title', 'Home')

@section('main-section')
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($trains as $train)
            <div class="card col-3 m-2 p-0">
                <div class="card-header">
                    {{ $train->departure_station }} -> {{ $train->arrival_station }}
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">{{ $train->company }} - {{ $train->train_code }}</li>
                    <li class="list-group-item">{{ $train->departure_time }} -> {{ $train->arrival_time }}</li>
                    <li class="list-group-item">{{ ($train->on_time === 'Yes') ? 'In Orario' : 'Lievemente in ritardo'  }}</li>
                </ul>
            </div>
            @endforeach
        </div>
    </div>
@endsection