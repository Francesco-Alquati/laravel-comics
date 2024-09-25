@extends('layouts.app')

@section('content')
    <div class="container-home">
        <div class="row">
            <div class="col-12">
                <div class="jumbo"></div>
            </div>
        </div>
    </div>
    <div class="container-home">
        <div class="row">
            <div class="col-12">
                <div class="h-55 bg-blue"></div>
            </div>
        </div>
    </div>
    <div class="container-home position-relative">
        <div class="row">
            <div class="col-12">
                <div class="content">
                    <img class="p-absolute-comic translate-middle" src="data:image/jpeg;base64,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" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="container-comics">
        <div class="row mt-5 mb-5">
            <div class="col-8">
                <h4 class="text-uppercase mb-4">action comics #1000: the deluxe edition</h4>
                <div class="input-group border border-primary-subtle mb-3">
                    <div class="rounded-0 bg-l-green text-white">
                        <div class="p-2"><span class="text-grey">U.S. Price: </span>$19.99</div>
                    </div>
                    <div class="rounded-0 bg-l-green text-white">
                        <div class="p-2 text-end w-281"><span class="text-grey text-uppercase">available</span></div>
                    </div>
                    <button class="btn rounded-0 bg-l-green border-start text-white dropdown-toggle">Check Availability</button>
                    <ul class="dropdown-menu dropdown-menu-end">
                      <li><a class="dropdown-item" href="#">Napoli</a></li>
                      <li><a class="dropdown-item" href="#">Milano</a></li>
                      <li><a class="dropdown-item" href="#">Venezia</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Roma</a></li>
                    </ul>
                  </div>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil blanditiis facilis esse numquam, earum perferendis veniam ab neque aspernatur mollitia similique recusandae cupiditate beatae commodi saepe est quis repellat aliquam!</p>
            </div>
            <div class="col-4 text-start">
                <img src="{{ Vite::asset('resources/images/adv.jpg')}}" alt="">
            </div>
        </div>
    </div>
    <div class="container-home bg-light-grey">
        <div class="container-comics">
            <div class="row">
                <div class="col-6">
                    <h5 class="mt-4">Talent</h5>
                    <hr>
                    <div class="row">
                        <div class="col-6">Art by:</div>
                        <div class="col-6 fs-11">
                            <a href="#">Josè Luis Garcia-Lopez</a>,
                            <a href="#">Josè Luis Garcia-Lopez</a>,
                            <a href="#">Josè Luis Garcia-Lopez</a>,
                            <a href="#">Josè Luis Garcia-Lopez</a>,
                            <a href="#">Josè Luis Garcia-Lopez</a>,
                            <a href="#">Josè Luis Garcia-Lopez</a>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-6">Written by:</div>
                        <div class="col-6 fs-11">
                            <a href="#">Josè Luis Garcia-Lopez</a>,
                            <a href="#">Josè Luis Garcia-Lopez</a>,
                            <a href="#">Josè Luis Garcia-Lopez</a>,
                            <a href="#">Josè Luis Garcia-Lopez</a>,
                            <a href="#">Josè Luis Garcia-Lopez</a>,
                            <a href="#">Josè Luis Garcia-Lopez</a>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="col-6">
                    <h5 class="mt-4">Specs</h5>
                    <hr>
                    <div class="row">
                        <div class="col-6">Series:</div>
                        <div class="col-6">
                            <a class="text-uppercase" href="#">Action Comics</a>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-6">U.S. Price:</div>
                        <div class="col-6">$19.99</div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-6">On Sale Date:</div>
                        <div class="col-6">Oct 02 2018</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-2 border border-secondary-subtle">
                
            </div>
            <div class="col-2 border border-secondary-subtle">
                <img src="{{ Vite::asset('resources/images/cta-icons.png')}}"alt="">
            </div>
            <div class="col-2 border border-secondary-subtle">
                <img src="{{ Vite::asset('resources/images/cta-icons.png')}}"alt="">
            </div>
            <div class="col-2 border border-secondary-subtle">
                <img src="{{ Vite::asset('resources/images/cta-icons.png')}}"alt="">
            </div>
            <div class="col-2 border border-secondary-subtle">
                <img src="{{ Vite::asset('resources/images/cta-icons.png')}}"alt="">
            </div>
            <div class="col-2 border border-secondary-subtle">
                
            </div>
        </div>
    </div>

@endsection