@extends('layouts.page.default')
@section('content')
    <section class="d-none">
        <div class="jumbotron jumbotron-slider-1 rounded-0">
            <div class="container">
                @foreach($paquete_iti as $paquetes)
                    <h2 class="text-white my-5 h1"><strong>{{($paquetes->titulo)}} {{($paquetes->duracion)}} DAYS TOURS</strong></h2>
                    <h2 class="text-white my-5 h1">Our excursions and packages depart 365 days a year</h2>
                @endforeach
                <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
            </div>
        </div>
    </section>

    <section class="header-video">
        <div id="title" class="text-white">
            <div class="container-fluid">
                <div class="row justify-content-between">
                    <div class="col-3 mt-2">
                        <a href="{{route('home_path')}}"><img src="{{asset('images/logos/logo-gotoperu-ave-w.png')}}" alt="" class="img-fluid"></a>
                    </div>
                    {{--<div class="col text-center">--}}
                    {{--<i class="h4"></i>--}}
                    {{--</div>--}}
                    <div class="col-3 text-right pt-3 sticky-top">
                        <a href="tel:+2029963000" class="mx-3 h4">(202) 996-3000</a>
                        <a href="tel:+2029963000" class="mx-3 h2"><i class="fa fa-bars"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div id="overlay">
            <video class="" id="hero-vid" poster="{{asset('images/slider/package-1.jpg')}}" autoplay loop muted>
                <source src="{{asset('media/video6.mp4')}}" />
                <source src="{{asset('media/video6.m4v')}}" type="video/mp4" />
                <source src="{{asset('media/video6.webm')}}" type="video/webm" />
                <source  src="{{asset('media/video6.ogv')}}" type="video/ogg" />
            </video>
            {{--<div id="state" class=""><span class="fa fa-pause"></span></div>--}}
            {{--<img id="hero-pic" class="d-none" src="http://www.markhillard.com/sandbox/media/polina.jpg" alt="">--}}
            {{----}}
        </div>
        <div class="content-header">
            <div class="container-fluid">
                <div class="row content-header-row align-items-center no-gutters">
                    <div class="col-3 bg-rgba-white rounded">
                        <h3 class="text-g-yellow p-2"><i class="fa fa-map-marker"></i> Route</h3>

                        <div class="pb-4 position-relative">
                            @foreach($paquetes->itinerario->sortBy('dia')->take(8) as $itinerario)
                                <p class="m-0 p-2">
                                    <b class="font-weight-bold">Day {{$itinerario->dia}}: </b> {{ucwords(strtolower($itinerario->titulo))}}
                                </p>
                            @endforeach
                                @if($paquetes->duracion > 8)
                                    <div class="gradient-destinations"></div>
                                    <a href="#" class="btn-link font-weight-normal b-routes p-2" data-toggle="modal" data-target="#route-modal">All Routes <i class="fa fa-chevron-right"></i></a>
                                @endif
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="route-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Route</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col box-route-ininerary p-4">
                                                @foreach($paquetes->itinerario->sortBy('dia') as $itinerario)
                                                    <p>
                                                        <strong>Day {{$itinerario->dia}}: </strong> {{ucwords(strtolower($itinerario->titulo))}}
                                                    </p>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{--<div class="text-right">--}}
                        {{--<a href="" class="btn-link font-weight-normal">All Packages <i class="fa fa-chevron-right"></i></a>--}}
                        {{--</div>--}}
                    </div>
                    <div class="col">
                        <div class="row my-4 justify-content-center">
                            <h2 class="text-g-yellow font-weight-light">
                             @foreach($paquete_iti as $paquetes)
                                {{($paquetes->titulo)}} <span class="text-white">{{($paquetes->duracion)}} DAYS TOURS</span>
                                @endforeach
                            </h2>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-6 text-center">
                                <a href="#Inquire" class="btn btn-lg btn-g-yellow">INQUIRE NOW</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <nav class="nav nav-pills nav-fill nav-goto navbar-expand-lg d-none d-sm-flex">
        {{--<a class="nav-item nav-link active" href="#">Active</a>--}}
        <a class="nav-item nav-link text-light active" href="">TOURS PACKAGES</a>
        <a class="nav-item nav-link text-light" href="">DESTINATIONS</a>
        <a class="nav-item nav-link text-light" href="">ABOUT US</a>
        <a class="nav-item nav-link text-light" href="">GETTING TO PERU</a>
        <a class="nav-item nav-link text-light" href="">TESTIMONIALS</a>
        <a class="nav-item nav-link text-light bg-g-yellow rounded-0" href="#Inquire">INQUIRE</a>
        {{--<a class="nav-item nav-link disabled" href="#">Disabled</a>--}}
    </nav>
    @include('layouts.page.included')


    <section>
        <div class="container">
            <div class="row">

            </div>
        </div>
    </section>

    {{--<section class="py-5 bg-white">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col text-center">--}}
                    {{--@foreach($paquete_iti as $paquetes)--}}
                    {{--<h1 class="text-secondary h5"><strong>PERU TRAVEL PACKAGES</strong></h1>--}}
                    {{--<h1 class="text-g-green text-uppercase"><span class="d-block h5 text-secondary">Travel Packages:</span>{{strtolower($paquetes->titulo)}}</h1>--}}
                    {{--@endforeach--}}
                    {{--<div class="alert alert-g-yellow" role="alert">--}}
                        {{--<h4>And even multi countries travel adventures involving Brasil, Ecuador , Argentina.</h4>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}

    <section class="bg-white">
        <div class="container-fluid">
            <div class="row">
                <div class="col">

                    <div class="row position-relative">
                        <div class="col">
                            <ul id="menu" class="nav nav-pills nav-fill bg-light rounded d-none d-sm-flex sticky-top nav-itinerary">
                                <li class="nav-item">
                                    <a class="nav-link text-white rounded-0 bg-g-green" href="#Itinerary">Itinerary</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white rounded-0 bg-danger" href="#Hotels">Hotels</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white rounded-0 bg-info" href="#Included">Included</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white rounded-0 bg-g-yellow" href="#Inquire">Inquire</a>
                                </li>
                            </ul>

                            <div class="row">

                            <div class="col-9">


                                <div id="Itinerary" class="d-none d-sm-block">
                                    <h3 class="text-secondary pt-5 pb-4 h4"><strong>Itinerary</strong></h3>
                                    @php
                                        $i = 1;
                                        $num_des = count($paquetes->itinerario);
                                    @endphp
                                    @foreach($paquetes->itinerario->sortBy('dia') as $itinerario)
                                        <div class="timeline @php if($i == $num_des) echo 'timeline-f' @endphp">
                                            <div class="timeline-title">
                                                <span class="rounded-circle bg-g-green text-white py-4 font-weight-bold">DAY {{$itinerario->dia}}</span>
                                            </div>
                                            {{--<div class="col bg-dark">--}}
                                            {{--sdsdskl--}}
                                            {{--</div>--}}
                                            <div class="col">
                                                {{--<div class="col">--}}
                                                {{--Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt dolorum error esse eveniet, inventore maxime, modi nam nisi nulla saepe vitae voluptatem voluptatum! Corporis deserunt eos fugiat numquam quidem voluptas?--}}
                                                {{--</div>--}}
                                                <div class="timeline-content position-relative">
                                                    <div class="row">
                                                        <div class="timeline-point">
                                                            <i class="fa fa-circle-o"></i>
                                                        </div>
                                                        <div class="timeline-custom-col content-col ">
                                                            <div class="timeline-location-block">
                                                                <p class="location-name">{{ucwords(strtolower($itinerario->titulo))}} <i class="fa fa-map-marker icon-marker"></i></p>
                                                                <div class="description">
                                                                    @php echo $itinerario->descripcion @endphp
                                                                </div>
                                                            </div>
                                                                {{--<div class="timeline-custom-col">--}}
                                                            {{--<div class="timeline-image-block">--}}
                                                            {{--<img src="http://wp.swlabs.co/exploore/wp-content/uploads/2016/05/london.png" alt="">--}}
                                                            {{--</div>--}}
                                                            {{--</div>--}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @php $i++; @endphp
                                    @endforeach
                                </div>

                                <div id="Hotels" class="d-none d-sm-block pt-5">
                                    <h3 class="text-secondary h4"><strong>Hotels</strong></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores at distinctio eos error minus, perspiciatis praesentium sint suscipit ullam voluptatum. Ab, aliquid architecto atque consequuntur expedita hic inventore non repudiandae!</p>
                                </div>


                                <div id="Included" class="pt-5">
                                    <div class="row">
                                        <div class="col">
                                            <h3 class="text-secondary h4"><strong>Included</strong></h3>
                                            @php echo $paquetes->incluye; @endphp
                                        </div>
                                        <div class="col">
                                            <h3 class="text-secondary h4"><strong>Not Included</strong></h3>
                                            @php echo $paquetes->noincluye; @endphp
                                        </div>
                                    </div>
                                </div>

                                <div id="Inquire" class="d-none d-sm-block pt-5">
                                    <h3 class="text-secondary h4"><strong>Inquire</strong></h3>
                                    <div class="row justify-content-center mt-4">
                                        <div class="col-12 col-md-10 col-lg-8 text-center">
                                            <h2 class="text-secondary h4 font-weight-bold text-g-yellow">{{$paquetes->titulo}} {{$paquetes->duracion}} DAYS</h2>
                                            {{--<h5 class="text-secondary">{{$paquetes->duracion}} Days</h5>--}}
                                        </div>
                                    </div>

                                    <div class="row justify-content-center pt-4">
                                        <div class="col-12 col-md-10 col-lg-7">
                                            <form id="d_form" role="form">
                                                {{csrf_field()}}
                                                <div class="row pb-2">
                                                    <div class="col">
                                                        <h2 class="text-secondary h5"><strong>HOTEL QUALITY</strong></h2>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6 col-sm">
                                                        <div class="form-circ btn-group-toggle" data-toggle="buttons">
                                                            <label class="btn btn-outline-secondary btn-block rounded-circle py-3 popover-hover position-relative" data-container="body" data-toggle="popover" data-placement="top" data-content="Hotel economico">
                                                                <i class="fa fa-home d-block fa-2x" aria-hidden="true"></i>
                                                                <input type="checkbox" autocomplete="off" name="accommodation[]" value="Econômico"> Budget
                                                                <div class="d-block text-center sec-stars">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 col-sm">
                                                        <div class="form-circ btn-group-toggle" data-toggle="buttons">
                                                            <label class="btn btn-outline-secondary btn-block rounded-circle py-3 popover-hover position-relative" data-container="body" data-toggle="popover" data-placement="top" data-content="Hotel Turista">
                                                                <i class="fa fa-home d-block fa-2x" aria-hidden="true"></i>
                                                                <input type="checkbox" autocomplete="off" name="accommodation[]" value="Turista"> Best Value
                                                                <div class="d-block text-center sec-stars">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 col-sm">
                                                        <div class="form-circ btn-group-toggle" data-toggle="buttons">
                                                            <label class="btn btn-outline-secondary btn-block rounded-circle py-3 popover-hover position-relative" data-container="body" data-toggle="popover" data-placement="top" data-content="Hotel Superior">
                                                                <i class="fa fa-building d-block fa-2x" aria-hidden="true"></i>
                                                                <input type="checkbox" autocomplete="off" name="accommodation[]" value="Superior"> Superior
                                                                <div class="d-block text-center sec-stars">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 col-sm">
                                                        <div class="form-circ btn-group-toggle" data-toggle="buttons">
                                                            <label class="btn btn-outline-secondary btn-block rounded-circle py-3 popover-hover position-relative" data-container="body" data-toggle="popover" data-placement="top" data-content="Hotel Lujo">
                                                                <i class="fa fa-building d-block fa-2x" aria-hidden="true"></i>
                                                                <input type="checkbox" autocomplete="off" name="accommodation[]" value="Luxo"> Luxury
                                                                <div class="d-block text-center sec-stars">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row mt-4 pb-2">
                                                    <div class="col">
                                                        <h2 class="text-secondary h5"><strong>NUMBER OF TRAVELERS</strong></h2>
                                                    </div>
                                                </div>

                                                <div class="row no-gutters btn-group-toggle" data-toggle="buttons">
                                                    <label class="btn col btn-outline-secondary number-hover">
                                                        <input type="radio" name="number" class="number" autocomplete="off" value="1" checked> 1 <i class="fa fa-male"></i>
                                                    </label>
                                                    <label class="btn col mx-2 btn-outline-secondary number-hover">
                                                        <input type="radio" name="number" class="number" autocomplete="off" value="2"> 2 <i class="fa fa-male"></i>
                                                    </label>
                                                    <label class="btn col btn-outline-secondary number-hover">
                                                        <input type="radio" name="number" class="number" autocomplete="off" value="3"> 3 <i class="fa fa-male"></i>
                                                    </label>
                                                    <label class="btn col mx-2 btn-outline-secondary number-hover">
                                                        <input type="radio" name="number" class="number" autocomplete="off" value="4"> 4 <i class="fa fa-male"></i>
                                                    </label>
                                                    <label class="btn col btn-outline-secondary number-hover">
                                                        <input type="radio" name="number" class="number" autocomplete="off" value="5+"> 5+ <i class="fa fa-male"></i>
                                                    </label>
                                                    <label class="btn col ml-2 btn-outline-secondary number-hover">
                                                        <input type="radio" name="number" class="number" autocomplete="off" value="Undecided"><small>Undecided</small>
                                                    </label>
                                                </div>

                                                <div class="row mt-4">
                                                    <div class="col">
                                                        <div class="row pb-2">
                                                            <div class="col">
                                                                <h2 class="text-secondary h5"><strong>TRAVEL DATE <span class="text-primary">*</span></strong></h2>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="input-group input-group-lg">
                                                                    <input type="text" class="form-control" id="d_date" placeholder="Fecha de Viaje" aria-label="Username" aria-describedby="basic-addon1">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-calendar"></i></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" id="d_package" value="{{$paquetes->codigo}}: {{$paquetes->titulo}} {{$paquetes->duracion}} DAYS">
                                                    </div>
                                                    <div class="col">
                                                        <div class="row pb-2">
                                                            <div class="col">
                                                                <h2 class="text-secondary h5"><strong>PHONE NUMBER</strong></h2>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="input-group input-group-lg">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-phone"></i></span>
                                                                    </div>
                                                                    <input type="tel" class="form-control" id="d_tel" placeholder="Phone number" aria-label="Phone" aria-describedby="basic-addon1">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-4 pb-2">
                                                    <div class="col">
                                                        <h2 class="text-secondary h5"><strong>NAME <span class="text-primary">*</span></strong></h2>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="input-group input-group-lg">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                                                            </div>
                                                            <input type="text" class="form-control" id="d_name" placeholder="Full Name" aria-label="Full Name" aria-describedby="basic-addon1">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-4 pb-2">
                                                    <div class="col">
                                                        <h2 class="text-secondary h5"><strong>EMAIL <span class="text-primary">*</span></strong></h2>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="input-group input-group-lg">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                                                            </div>
                                                            <input type="email" class="form-control" id="d_email" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-4 pb-2">
                                                    <div class="col">
                                                        <h2 class="text-secondary h5"><strong>COMMENTS?</strong></h2>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="input-group input-group-lg">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fa fa-comment"></i></span>
                                                            </div>
                                                            <textarea class="form-control" id="d_comment" aria-label="With textarea" placeholder="How do you imagine a perfect trip to Peru, Special Requests, Questions, Comments"></textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col my-3 text-center">
                                                        <button class="btn btn-primary btn-lg btn-next" id="d_send" type="button" onclick="inquire()">Send</button>
                                                        <ul class="fa-ul pull-right d-none" id="loader2">
                                                            <li><i class="fa-li fa fa-spinner fa-spin"></i> <i>Sending...</i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="alert alert-success alert-dismissible fade d-none" id="d_alert" role="alert">
                                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                            <strong>THANK YOU FOR CONTACT US</strong>, YOU WILL RECEIVE A REPLY IN LESS THAN 24 HOURS, GURANTEED. :)
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col">
                                <h3 class="text-secondary pt-5 h4"><strong>Prices</strong></h3>
                                <div class="card border-secondary">
                                    <p class="card-header bg-secondary text-white">Price per person based on double accomodation</p>
                                    <div class="card-body p-0">
                                        <table class="table m-0">
                                            <thead class="title-header bg-light">
                                            <tr>
                                                <th>2 Stars</th>
                                                <th>3 Stars</th>
                                                <th>4 Stars</th>
                                                <th>5 Stars</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                @foreach($paquetes->precio_paquetes->sortBy('estrellas') as $precio)
                                                    @if($precio->precio_d > 0)
                                                        <td>
                                                            <sup>$</sup>{{$precio->precio_d}}
                                                        </td>
                                                    @else
                                                        <td>
                                                            Inquire
                                                        </td>
                                                    @endif
                                                @endforeach

                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="card bg-light my-4">
                                    {{--<img class="card-img-top" src="..." alt="Card image cap">--}}
                                    <div class="content-video-1 card-img-top">
                                        <div class="content-area-3">
                                            <div class="position-relative">
                                                <img src="{{asset('images/video/prom-peru.jpg')}}" alt="video promperu" class="img-fluid">
                                                <div class="video-btn-1">
                                                    <a href="https://www.youtube.com/embed/gGq_U1DYUCs" title=""><i class="fa fa-play-circle text-g-dark"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{--<img src="{{asset('images/prom-peru-4.jpg')}}" alt="video" class="img-fluid card-img-top" >--}}
                                    <div class="card-body">
                                        <h4 class="card-title">Destinations</h4>
                                        <div class="box-route-ininerary p-0">
                                            @foreach($paquete_destinos->where('idpaquetes',$paquetes->id) as $paquete_destino)
                                                <p class="font-weight-bold text-secondary"><i class="fa fa-check"></i> {{ucwords(strtolower($paquete_destino->destinos->nombre))}}</p>
                                            @endforeach

                                        </div>
                                    </div>
                                </div>


                                <div class="sticky-top sticky-top-50">
                                    <img src="{{asset('images/maps/'.$paquetes->codigo.'.jpg')}}" alt="" class="img-fluid rounded">
                                </div>

                            </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>

    @push('scripts')
        <script>
            function inquire(){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('[name="_token"]').val()
                    }
                });

                $("#d_send").attr("disabled", true);

                var filter=/^[A-Za-z][A-Za-z0-9_]*@[A-Za-z0-9_]+.[A-Za-z0-9_.]+[A-za-z]$/;



                var s_accommodation = document.getElementsByName('accommodation[]');
                var $accommodation = "";
                for (var i = 0, l = s_accommodation.length; i < l; i++) {
                    if (s_accommodation[i].checked) {
                        $accommodation += s_accommodation[i].value+' , ';
                    }
                }
                s_accommodation = $accommodation.substring(0,$accommodation.length-3);


                var s_number = $(".number:checked").val();

                var s_date = $('#d_date').val();
                var s_tel = $('#d_tel').val();
                var s_name = $('#d_name').val();
                var s_email = $('#d_email').val();
                var s_package = $('#d_package').val();


                var s_comment = $('#d_comment').val();


                if (filter.test(s_email)){
                    sendMail = "true";
                } else{
                    $('#d_email').css("border-bottom", "2px solid #FF0000");
                    sendMail = "false";
                }
                if (s_name.length == 0 ){
                    $('#d_name').css("border-bottom", "2px solid #FF0000");
                    var sendMail = "false";
                }

                if(sendMail == "true"){
                    var datos = {

                        "txt_accommodation" : s_accommodation,
                        "txt_number" : s_number,

                        "txt_date" : s_date,
                        "txt_tel" : s_tel,
                        "txt_name" : s_name,
                        "txt_email" : s_email,
                        "txt_package" : s_package,
                        "txt_comment" : s_comment

                    };
                    $.ajax({
                        data:  datos,
                        url:   "{{route('inquire_path')}}",
                        type:  'post',

                        beforeSend: function () {

                            $('#d_send').removeClass('show');
                            $("#d_send").addClass('d-none');

                            $("#loader2").removeClass('d-none');
                            $("#loader2").addClass('show');
                        },
                        success:  function (response) {
                            $('#d_form')[0].reset();
                            $('#d_send').removeClass('d-none');
                            $('#d_send').addClass('show');
                            $("#loader2").removeClass('show');
                            $("#loader2").addClass('d-none');
                            $('#d_alert').removeClass('d-none');
                            $("#d_alert").addClass('show');
                            $("#d_alert b").html(response);
                            $("#d_alert").fadeIn('slow');
                            $("#d_send").removeAttr("disabled");
                        }
                    });
                } else{
                    $("#d_send").removeAttr("disabled");
                }
            }

            $('#d_date').datepicker({
                dateFormat: 'yy-mm-dd',
                changeMonth: true,
                changeYear: true
            });

            $(document).ready(function () {
                $(window).on('load scroll', function () {
                    var scrolled = $(this).scrollTop();
                    $('#title').css({
                        'transform': 'translate3d(0, ' + -(scrolled * 0.2) + 'px, 0)', // parallax (20% scroll rate)
                        'opacity': 1 - scrolled / 400 // fade out at 400px from top
                    });
                    $('#hero-vid').css('transform', 'translate3d(0, ' + -(scrolled * 0.25) + 'px, 0)'); // parallax (25% scroll rate)
                });

                // video controls
                $('#state').on('click', function () {
                    var video = $('#hero-vid').get(0);
                    var icons = $('#state > span');
                    $('#overlay').toggleClass('fade');
                    if (video.paused) {
                        video.play();
                        icons.removeClass('fa-play').addClass('fa-pause');
                    } else {
                        video.pause();
                        icons.removeClass('fa-pause').addClass('fa-play');
                    }
                });
            });

        </script>
    @endpush

@stop