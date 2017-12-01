@extends('layouts.page.default')
@section('content')
    <section>
        <div class="jumbotron jumbotron-slider-1 rounded-0">
            <div class="container">
                <h2 class="text-white my-5 h1">Our excursions and packages depart 365 days a year</h2>
                {{--<p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>--}}
                {{--<p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>--}}
            </div>
        </div>
    </section>

    @include('layouts.page.included')

    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    @foreach($paquete_iti as $paquetes)
                    {{--<h1 class="text-secondary h5"><strong>PERU TRAVEL PACKAGES</strong></h1>--}}
                    <h1 class="text-g-green text-uppercase"><span class="d-block h5 text-secondary">Travel Packages:</span>{{strtolower($paquetes->titulo)}}</h1>
                    @endforeach
                    {{--<div class="alert alert-g-yellow" role="alert">--}}
                        {{--<h4>And even multi countries travel adventures involving Brasil, Ecuador , Argentina.</h4>--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>
    </section>

    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-8">

                    <div class="row my-4 d-sm-block d-md-block d-lg-none">
                        <div class="col">
                            <div class="card">
                                <div class="card-body text-center">
                                    <div class="d-block text-left">
                                        <span class="text-primary h4 font-weight-bold align-bottom">7 Dias</span>
                                        <img src="{{asset('images/icons/subtitle.png')}}" alt="" class="img-fluid mb-1" width="100">
                                    </div>
                                    {{--<p class="text-primary h4 font-weight-bold">10 Day</p>--}}
                                    <p class="h3 text-secondary"></p>
                                    <p class="h1 font-montserrat pt-2 m-0">
                                        <span class="text-info">10X</span><sup>$</sup>500
                                        <small>USD</small></p>
                                    <p class="text-secondary h3 m-0">semjuros</p>
                                    <a href="#book-now" class="btn btn-warning btn-block btn-lg btn-info mt-3">Choose This Package</a>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row position-relative">
                        <div class="col">
                            <ul id="navbar-example" class="nav nav-pills nav-fill bg-light rounded d-none d-sm-flex">
                                <li class="nav-item">
                                    <a class="nav-link" href="#Overview">Outline</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#Itinerary">Itinerary</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#Optionals">Optional</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#Prices">Prices</a>
                                </li>

                            </ul>
                            <div data-spy="scroll" data-target="#navbar-example" data-offset="200" class="scrollspy-example">
                                <div id="Overview" class="pt-4 d-none d-sm-block">
                                    <h3 class="h3 py-2">Outline</h3>
                                    <div class="col my-4">
                                        <div class="row">
                                            <div class="col-3 text-center align-items-center  card-deck border bg-light m-0">
                                                <div class="card">
                                                    <h3>
                                                        <i class="fa fa-map-marker"></i>
                                                        Route
                                                    </h3>
                                                </div>
                                            </div>
                                            <div class="col border box-route-ininerary">
                                                @foreach($paquetes->itinerario->sortBy('dia') as $itinerario)
                                                    <p>
                                                        <strong>Day {{$itinerario->dia}}: </strong> {{ucwords(strtolower($itinerario->titulo))}}
                                                    </p>
                                                @endforeach
                                            </div>
                                        </div>

                                        <div class="row mt-5">
                                            <div class="col">
                                                <h4>Included:</h4>
                                                @php echo $paquetes->incluye; @endphp
                                            </div>
                                            <div class="col">
                                                <h4>Not Included:</h4>
                                                @php echo $paquetes->noincluye; @endphp
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="Itinerary" class="d-none d-sm-block">
                                    <h3 class="h3 py-5">Itinerary</h3>
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




                                <div id="Optionals" class="pt-4">
                                    <h3 class="h3 py-2">Optional</h3>
                                    @php echo $paquetes->opcional; @endphp

                                </div>
                                <div id="Prices" class="pt-4">
                                    <h3 class="h3 pt-2">Prices</h3>
                                    <div class="card my-4 border-g-yellow">
                                        <p class="card-header bg-g-yellow">Price per person based on double accomodation</p>
                                        <div class="card-body p-0">
                                            <table class="table m-0">
                                                <thead class="thead-inverse">
                                                <tr>
                                                    <th>2 Estrelas</th>
                                                    <th>3 Estrelas</th>
                                                    <th>4 Estrelas</th>
                                                    <th>5 Estrelas</th>
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
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="col d-none d-sm-none d-md-none d-lg-inline">

                        <div class="card">
                            <div class="card-body text-center">


                                <div class="d-block text-left">
                                    <span class="text-g-green h4 font-weight-bold align-bottom">{{$paquetes->duracion}} Dias</span>
                                </div>
                                {{--<p class="text-primary h4 font-weight-bold">10 Day</p>--}}
                                <p class="h3 text-secondary"></p>
                                <p class="h1 font-montserrat pt-2 m-0"><small class="text-secondary h5">from
                                    </small>
                                    @foreach($paquetes->precio_paquetes as $precio)
                                        @if($precio->estrellas == 2)
                                            <sup>$</sup>{{$precio->precio_d}}
                                        @endif
                                    @endforeach


                                    <small>USD</small></p>
                                <p class="text-secondary m-0">Package Code: {{$paquetes->codigo}}</p>
                                <a href="#book-now" class="btn btn-g-yellow btn-block btn-lg btn-info mt-3 text-white">Choose This Package</a>

                            </div>
                        </div>

                        <div class="card bg-light my-4">
                            {{--<img class="card-img-top" src="..." alt="Card image cap">--}}
                            <div class="content-video-1 card-img-top">
                                <div class="content-area-3">
                                    <div class="position-relative">
                                        <img src="https://gotoperu.com/img/video/prom-peru.jpg" alt="video promperu" class="img-fluid">
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
    </section>
@stop