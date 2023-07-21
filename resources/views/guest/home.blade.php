@extends('layout.app')

@section('title', 'Home')

@section('main-section')
    <div class="container">
        <div class="row">
            @foreach ($trains as $train)
            <div class="card">
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
    @dd($trains);
@endsection