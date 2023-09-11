@extends('layouts.main')

@section('page-title', 'HOMEPAGE')

@section('content')
    <div class="container">
        <h1 class="mb-4">
            MOVIES
        </h1>
        <div class="row">
            @foreach($movies as $movie)
                <div class="col-2 mb-4">
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
                        <a href="{{ route('movie.show', ['id' => $movie->id]) }}" class="btn btn-primary">
                            Check details
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection