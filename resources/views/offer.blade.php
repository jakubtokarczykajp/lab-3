@extends('layouts.app')

@section('content')
    <h1>Nasza oferta</h1>
    <div class="row">
        @foreach($offers as $offer)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $offer['title'] }}</h5>
                        <p class="card-text">{{ $offer['price'] }} zł/miesiąc</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <form method="GET" action="{{ url('/offer/pdf') }}">
        <button type="submit">Download PDF</button>
    </form>
@endsection
