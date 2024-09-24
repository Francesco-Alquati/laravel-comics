@extends('layouts.app')

@section('content')
    <div class="container-jumbo">
        <div class="row">
            <div class="col-12">
                <div class="jumbo"></div>
            </div>
        </div>
    </div>
    <div class="container-jumbo bg-darkgrey position-relative">
        <div class="row">
            <div class="col-12">
                <div class="content">
                    <button class="button-current text-uppercase p-absolute-button translate-middle">Current series</button>
                </div>
            </div>
            <div class="card-container">
                <div class="row">
                    <div class="col-2 mt-5">
                        <div class="comics-card">
                            <img :src="" alt="">
                            <div class="mt-2 text-white text-uppercase fs-10"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5 mb-3">
                <button class="button-more text-uppercase">Load more</button>
            </div>
        </div>
    </div>
@endsection
