@extends('layouts.main')

@section('page-title', 'CONTACT')

@section('content')
    <div class="container">
        <h1 class="mb-4">
            MOVIES
        </h1>
        <div class="row">
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
        </div>
    </div>
@endsection