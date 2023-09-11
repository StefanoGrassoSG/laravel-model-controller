@extends('layouts.main')

@section('page-title', 'HOMEPAGE')

@section('content')
    <div class="container">
        <div class="row">
            @foreach($movies as $movie)
                <div class="col-2">
                    <div class="card">
                        <div class="card-body">
                            <h2>
                                {{ $movie->title }}
                            </h2>
                            <h4>
                                {{ $movie->nationality }}
                            </h4>
                            <h6>
                                {{ $movie->vote }}
                            </h6>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection