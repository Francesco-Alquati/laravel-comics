@extends('layouts.app')

@section('content')
    <div class="container-home">
        <div class="row">
            <div class="col-12">
                <div class="jumbo"></div>
            </div>
        </div>
    </div>
    <div class="container-home bg-darkgrey position-relative">
        <div class="row">
            <div class="col-12">
                <div class="content">
                    <button class="button-current text-uppercase p-absolute-button translate-middle">Current series</button>
                </div>
            </div>
            <div class="card-container">
                <div class="row">
                    @foreach ($comics as $comic)
                        <div class="col-2 mt-5">
                            <div class="comics-card">
                                <img src="{{ $comic['thumb'] }}" alt="{{ $comic ['title'] }}">
                                <div class="mt-2 text-white text-uppercase fs-10">{{ $comic ['series'] }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="text-center mt-5 mb-3">
                <button class="button-more text-uppercase">Load more</button>
            </div>
        </div>
    </div>
    <div class="bg-blue h-130 mx-auto z-index-1">
        <ul class="list-unstyled h-100 text-uppercase d-flex justify-content-center align-items-center">
            @foreach ($links as $link)
            <li>
                <img src="{{ $link['img'] }}" alt="{{ $link ['label'] }}">
                <a href=""></a>
            </li>
            @endforeach
        </ul>
    </div>
@endsection
