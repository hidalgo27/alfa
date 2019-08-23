@extends('layouts.page.default')

@section('content')
    <section class="header-video d-none d-md-block chat-mensajes">
        @include('layouts.page.header')
        <div id="overlay" class="position-relative overlay-img">
            <video class="hero-vid-home banner-itinerary" id="hero-vid" poster="{{asset('images/itinerary/banners/GTP1.jpg')}}" autoplay loop muted>
                <source src="{{asset('media/gotoperu.mp4')}}" type="video/mp4"/>
                {{--<source src="{{asset('media/gotoperu.m4v')}}" type="video/mp4" />--}}
                <source src="{{asset('media/gotoperu.webm')}}" type="video/webm" />
                <source  src="{{asset('media/gotoperu.ogv')}}" type="video/ogg" />
            </video>
            <div class="position-absolute-bottom">
                <img src="{{asset('images/logos/logo-expedia.png')}}" alt="" width="180">
            </div>
        </div>
        <div class="content-header">
            <div class="container">
                <div class="row content-header-row align-items-center mt-5">
                    <div class="col text-center">
                        {{--<a href="" class="text-white"><i class="fa fa-play-circle fa-4x"></i></a>--}}
                        <div class="text-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                            <div class="mt-4">
                                <div class="content-video-1 text-white">
                                    {{--<img src="images/travel/video-1.jpg" alt="video">--}}
                                    <h2 class="font-weight-light">@lang('home.header_title')</h2>

                                    <div class="row mt-2 justify-content-center">
                                        <div class="col-12">
                                            <div class="row ">
                                                <div class="col text-center">
                                                    <a href="#Inquire" class="btn btn-lg btn-g-yellow font-weight-bold mt-3">@lang('home.header_button')</a>
                                                    {{--<div class="card bg-rgba-white border-g-yellow w-100">--}}
                                                        {{--<div class="card-header bg-g-yellow">--}}
                                                            {{--<h5 class="m-0 font-weight-bold">INQUIRE NOW</h5>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="card-body p-1">--}}
                                                            {{--<a href="#Inquire" class="stretched-link font-weight-bold text-g-dark">Customize Quote</a>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                </div>
                                                {{--<div class="col-auto d-flex">--}}
                                                    {{--or--}}
                                                {{--</div>--}}
                                                {{--<div class="col d-flex">--}}
                                                    {{--<div class="card bg-rgba-dark-3 w-100">--}}
                                                        {{--<div class="card-header bg-g-green">--}}
                                                            {{--<h5 class="m-0">BOOK ONLINE</h5>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="card-body p-1">--}}
                                                            {{--<a href="{{route('peru_tours_path')}}" class="stretched-link text-white">Pre-design Programs</a>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            </div>
                                        </div>
                                    </div>
                                    @if (App::getLocale() == "pt")
                                    <div class="row justify-content-center">
                                        <div class="col-md-7 col-lg-5 mt-5">
                                            <div class="bg-rgba-white-5 rounded shadow p-3">
                                                <h5 class="m-0 text-dark font-weight-bold">PARCELE SUA COMPRA <span class="text-primary">EM ATÉ</span></h5>
                                                <p class="display-2 font-weight-bold m-0 font-weight-bold text-primary">12x</p>
                                                <div class="row no-gutters">
                                                    <div class="col">
                                                        <img src="{{asset('images/logos/visa.png')}}" alt="logo visa" class="w-100 p-1">
                                                    </div>
                                                    <div class="col">
                                                        <img src="{{asset('images/logos/mastercard.png')}}" alt="logo mastercard" class="w-100 p-1">
                                                    </div>
                                                    <div class="col">
                                                        <img src="{{asset('images/logos/american_express.png')}}" alt="logo american express" class="w-100 p-1">
                                                    </div>
                                                    <div class="col">
                                                        <img src="{{asset('images/logos/hipercard.png')}}" alt="logo hipercard" class="w-100 p-1">
                                                    </div>
                                                    <div class="col">
                                                        <img src="{{asset('images/logos/elo.png')}}" alt="logo elo" class="w-100 p-1">
                                                    </div>
                                                    <div class="col">
                                                        <img src="{{asset('images/logos/diners_club.png')}}" alt="logo diner club" class="w-100 p-1">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif

                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </section>

    @include('layouts.page.menu')


        <section class="bg-light py-3 d-none d-md-block contenido2">
            <div class="container-fluid">
                <div class="col">
                    <div class="row pb-3"><!--.row -->
                        <div class="col">
                            <img data-src="{{asset('images/logos/apavit.png')}}" data-srcset="{{asset('images/logos/apavit.png')}}" alt="logo apavit" class="img-fluid lazy has-webp">
                        </div>
                        <div class="col">
                            <img data-src="{{asset('images/logos/apotur.png')}}" data-srcset="{{asset('images/logos/apotur.png')}}" alt="logo apotur" class="img-fluid lazy has-webp">
                        </div>
                        <div class="col">
                            <img data-src="{{asset('images/logos/asta.png')}}" data-srcset="{{asset('images/logos/asta.png')}}" alt="logo asta" class="img-fluid lazy has-webp">
                        </div>
                        <div class="col">
                            <img data-src="{{asset('images/logos/expedia.png')}}" data-srcset="{{asset('images/logos/expedia.png')}}" alt="logo expedia" class="img-fluid lazy has-webp">
                        </div>
                        <div class="col">
                            <img data-src="{{asset('images/logos/facebook.png')}}" data-srcset="{{asset('images/logos/facebook.png')}}" alt="logo facebook" class="img-fluid lazy has-webp">
                        </div>
                        <div class="col">
                            <img data-src="{{asset('images/logos/meetup.png')}}" data-srcset="{{asset('images/logos/meetup.png')}}" alt="logo meetup" class="img-fluid lazy has-webp">
                        </div>
                        <div class="col">
                            <img data-src="{{asset('images/logos/new.png')}}" data-srcset="{{asset('images/logos/new.png')}}" alt="logo the new york times" class="img-fluid lazy has-webp">
                        </div>
                        <div class="col">
                            <img data-src="{{asset('images/logos/peru.png')}}" data-srcset="{{asset('images/logos/peru.png')}}" alt="logo marca peru" class="img-fluid lazy has-webp">
                        </div>
                        <div class="col">
                            <img data-src="{{asset('images/logos/prom-peru.png')}}" data-srcset="{{asset('images/logos/prom-peru.png')}}" alt="logo prom peru" class="img-fluid lazy has-webp">
                        </div>
                        <div class="col">
                            <img data-src="{{asset('images/logos/tripadvisor.png')}}" data-srcset="{{asset('images/logos/tripadvisor.png')}}" alt="logo tripadvisor" class="img-fluid lazy has-webp">
                        </div>
                        <div class="col">
                            <img data-src="{{asset('images/logos/yelp.png')}}" data-srcset="{{asset('images/logos/yelp.png')}}" alt="logo yelp" class="img-fluid lazy has-webp">
                        </div>
                        <div class="col">
                            <img data-src="{{asset('images/logos/youtube.png')}}" data-srcset="{{asset('images/logos/youtube.png')}}" alt="logo youtube" class="img-fluid lazy has-webp">
                        </div>
                    </div><!-- /.row -->
                </div>
            </div>
        </section>




        {{--<div id="aviso"><h2>Estás haciendo scroll sobre el contenido 2</h2></div>--}}


    @if (App::getLocale() == "pt")
        <div id="redes">
            <div class="container-fluid">
                <div class="row justify-content-end">
                    <div class="col-auto">
                        <div class="bg-dark rounded px-3 mx-3 shadow clearfix float-right">
                        <a href="https://api.whatsapp.com/send?phone=551131982239" target="_blank" class="font-weight-bold text-white stretched-link">
                            +55 (11) 31982239
                            <img src="{{asset('images/icons/whatsapp-i.png')}}" class="py-1" alt="logo whatsapp" width="50" data-toggle="tooltip" data-placement="top" title="Perú">
                        </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    @if (App::getLocale() == "es")
        <div id="redes">
            <div class="container-fluid">
                <div class="row justify-content-end">
                    <div class="col-auto">
                        <div class="bg-dark rounded px-3 mx-3 shadow clearfix float-right">
                            <a href="https://api.whatsapp.com/send?phone=5117059774" target="_blank" class="font-weight-bold text-white stretched-link">
                                +51 (1) 705-9774
                                <img src="{{asset('images/icons/whatsapp-i.png')}}" class="py-1" alt="logo whatsapp" width="50" data-toggle="tooltip" data-placement="top" title="Perú">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
{{--        <!-- Modal -->--}}
{{--        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
{{--            <div class="modal-dialog" role="document">--}}
{{--                <div class="modal-content">--}}
{{--                    <div class="modal-body">--}}
{{--                        <button type="button" class="close position-absolute-top" data-dismiss="modal" aria-label="Close">--}}
{{--                            <span aria-hidden="true">&times;</span>--}}
{{--                        </button>--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-auto d-none d-sm-inline-block">--}}
{{--                                <img src="{{asset('images/logos/escarapela.png')}}" alt="logo escarapela" class="w-100">--}}
{{--                            </div>--}}
{{--                            <div class="col text-center">--}}
{{--                                <span class="display-4 font-weight-bold text-danger">Descuento</span>--}}
{{--                                <p class="font-weight-bold h3">En todos nuestros paquetes <mark class="d-block"> por fiestas patrias</mark></p>--}}
{{--                                <div class="alert alert-success">--}}
{{--                                    <small>Pregunte por el <b>"descuento por fiestas patrias"</b> a nuestros asesores de ventas".</small>--}}
{{--                                </div>--}}
{{--                                <div class="bg-dark rounded shadow mb-3">--}}
{{--                                    <a href="https://api.whatsapp.com/send?phone=5117059774" target="_blank" class="font-weight-bold text-white stretched-link">--}}
{{--                                        <img src="{{asset('images/icons/whatsapp-i.png')}}" class="py-1" alt="logo whatsapp" width="50" data-toggle="tooltip" data-placement="top" title="Perú">--}}
{{--                                        +51 (1) 705-9774--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row">--}}
{{--                            <div class="col">--}}
{{--                                <div class="bg-danger text-center rounded">--}}
{{--                                    <p class="text-white m-0 font-weight-bold">!Felices Fiestas Patrias!</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row">--}}
{{--                            <div class="col text-center">--}}
{{--                                <small>El descuento aplica desde el 23 hasta 31 de julio</small>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    @endif
{{--    <div class="d-none d-sm-inline alert alert-primary alert-dismissible show m-0 elemento rounded-0 p-1" role="alert" id="aviso">--}}
{{--        <div class="container">--}}
{{--            <div class="row align-items-center">--}}
{{--                <div class="col-12 text-center text-sm-left text-md-right col-sm-7 col-md-7 col-lg-auto">--}}
{{--                    <h5 class="m-0">@lang('home.float_button_title')</h5>--}}
{{--                </div>--}}
{{--                <div class="col-12 text-center text-sm-left text-md-right col-sm-3 col-md-3 col-lg text-right">--}}
{{--                    <a href="#Inquire" class="btn btn-sm btn-g-yellow font-weight-bold" onclick="ideal_trip()">@lang('home.float_button_button')</a>--}}
{{--                </div>--}}
{{--                <div class="col-12 text-left text-sm-left text-md-right col-sm-2 col-md-2 col-lg-auto">--}}
{{--                    <button type="button" class="close p-0 float-left float-md-right" data-dismiss="alert" aria-label="Close">--}}
{{--                        <span aria-hidden="true">&times;</span>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

        <section class="bg-light pb-sm-5 pb-0">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h1 class="h6 font-weight-bold text-muted">@lang('home.h1')</h1>
                        <h2 class="display-4 d-none d-sm-block font-weight-bold text-g-yellow">@lang('home.we_are_gotoperu')</h2>
                        {{--<h2 class="text-g-green">GREAT ADVENTURE <strong>PACKAGES</strong> FOR EVERYONE WITH GOTOPERU</h2>--}}
                        {{--<h2 class="text-g-green h3 font-weight-light">THE BEST <strong>PERU VACATIONS</strong> AND <strong>MACHU PICCHU TOURS</strong></h2>--}}
                        <p class="lead font-weight-normal text-secondary m-0 d-none d-sm-block">@lang('home.we_are_gotoperu_p')</p>
                    </div>
                </div>
            </div>
        </section>



        <section class="bg-white py-5">
            <div class="container">
                <div class="row">
                    <div class="col text-left">
                        <h2 class="h2 font-weight-bold text-dark mb-3">@lang('home.h2_programs')</h2>
                        <p class="lead font-weight-normal text-secondary mb-5">@lang('home.h2_programs_p')</p>
                    </div>
                </div>
                {{--recom--}}
                @foreach($categoria_group as $categoria_groups)

                        <div class="row mb-4">
                            <div class="col">
                                <div class="row">
                                    <div class="col-12 nav-tabs-wrapper">
                                        <div class="nav nav-tabs dragscroll horizontal flex-sm-row p-0 @if ($categoria_groups->grupo == 1) {{'nav-category-goto-grey'}} @elseif ($categoria_groups->grupo == 2) {{'nav-category-goto-green'}} @elseif ($categoria_groups->grupo == 3) {{'nav-category-goto-yellow'}} @endif" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                            @foreach($categorias->where('grupo', $categoria_groups->grupo)->sortByDesc('estado') as $categoria)
                                                <a class="flex-sm-fill font-weight-bold text-sm-center rounded-0 nav-link @if ($categoria->estado == 1) {{'active'}} @endif" id="category-{{str_replace(' ', '-', strtolower($categoria->nombre))}}-tab" data-toggle="pill" href="#category-{{str_replace(' ', '-', strtolower($categoria->nombre))}}" role="tab" aria-controls="category-{{str_replace(' ', '-', strtolower($categoria->nombre))}}" aria-selected="true">{{$categoria->nombre}}</a>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="tab-content border border-top-0 rounded-bottom shadow-sm" id="v-pills-tabContent">
                                            @foreach($categorias->where('grupo', $categoria_groups->grupo) as $categoria)
                                            <div class="tab-pane fade show @if ($categoria->estado == 1) {{'active'}} @endif" id="category-{{str_replace(' ', '-', strtolower($categoria->nombre))}}" role="tabpanel" aria-labelledby="category-{{str_replace(' ', '-', strtolower($categoria->nombre))}}-tab">
{{--                                                    <div class="row d-none d-md-block">--}}
{{--                                                        <div class="col">--}}
{{--                                                            <div class="position-relative">--}}
{{--                                                                    --}}{{--<img src="{{asset('images/banners/category/recommended.jpg')}}" alt="" class="w-100">--}}
{{--                                                                    <img alt="gotoperu" class="lazy w-100" src="{{asset('images/banners/category/'.$categoria->imagen_banner.'')}}">--}}
{{--                                                                <div class="position-absolute-bottom bg-rgba-dark-3 text-white p-2">--}}
{{--                                                                    <p class="m-0 font-weight-bold">@php echo $categoria->descripcion; @endphp</p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
                                                <div class="row my-3 mx-0">
                                                    @foreach($paquetes_categoria->where('idcategoria', $categoria->id)->take(2) as $paquetes_categorias)
                                                        <div class="col-12 mb-4 col-sm-12 mb-sm-4 col-md-12 mb-md-4 mb-lg-0 col-lg-6">
                                                            <div class="bg-light shadow-sm rounded">
                                                                <div class="row align-items-center no-gutters">
                                                                    <div class="col-12 col-sm-7">
                                                                        <div class="position-relative">
                                                                            <a href="{{route('itinerary_path', [str_replace(' ','-',strtolower($paquetes_categorias->paquete->titulo)), $paquetes_categorias->paquete->duracion])}}">
                                                                                {{--<img src="{{asset('images/mapas/'.$cateorias_recommended->paquete->codigo.'.jpg')}}" alt="" class="w-100 rounded-left">--}}
{{--                                                                                <picture>--}}

{{--                                                                                    <source type="image/webp"--}}
{{--                                                                                            data-srcset="{{asset('images/mapas/'.$paquetes_categorias->paquete->imagen.'')}}"--}}
{{--                                                                                            data-sizes="100w">--}}
{{--                                                                                    <img alt="gotoperu" class="lazy w-100"--}}
{{--                                                                                         data-src="{{asset('images/mapas/'.$paquetes_categorias->paquete->imagen.'')}}"--}}
{{--                                                                                         data-srcset="{{asset('images/mapas/'.$paquetes_categorias->paquete->imagen.'')}}"--}}
{{--                                                                                         data-sizes="100w">--}}
{{--                                                                                </picture>--}}

                                                                                <img src="{{asset('images/mapas/'.$paquetes_categorias->paquete->imagen.'')}}" alt="" class="w-100">
                                                                                <div class="position-absolute-bottom p-2 text-center">
                                                                                    <span class="small font-weight-bold badge badge-g-yellow shadow">{{$paquetes_categorias->categoria->nombre}}</span>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 mt-3 mt-sm-0 col-sm-5 text-center">
                                                                        <div class="px-3">
                                                                            <h2 class="h6 font-weight-bold">{{$paquetes_categorias->paquete->titulo}}</h2>
                                                                            <small class="text-muted font-weight-bold">{{$paquetes_categorias->paquete->duracion}} @lang('home.days')</small>

                                                                            @foreach($paquetes_categorias->paquete->precio_paquetes as $precio)
                                                                                @if($precio->estrellas == 2)
                                                                                    @if($precio->precio_d > 0)
                                                                                        {{--                                                                <p class="text-info font-weight-bold m-0 h5"><small><sup>form $</sup></small>{{$precio->precio_d}}<small>USD</small></p>--}}
                                                                                        <div class="display-4 font-weight-bold"><sup>$</sup>{{$precio->precio_d}}</div>
                                                                                    @else
                                                                                        <span class="text-danger">@lang('home.inquire')</span>
                                                                                    @endif
                                                                                @endif
                                                                            @endforeach

                                                                            <a href="{{route('itinerary_path', [str_replace(' ','-',strtolower($paquetes_categorias->paquete->titulo)), $paquetes_categorias->paquete->duracion])}}" class="btn btn-g-yellow btn-block font-weight-bold">@lang('home.inquire_now')</a>
                                                                            {{--<a href="" class="btn btn-g-green font-weight-bold btn-block">Book Now</a>--}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                @endforeach

                <div class="row mt-5">
                    <div class="col text-center">
                        <a href="{{route('category_path')}}" class="btn btn-primary btn-lg font-weight-bold">@lang('home.see_more_categories')</a>
                    </div>
                </div>

            </div>
        </section>

        <section class="bg-light py-5">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2 class="h1 font-weight-bold text-g-yellow">@lang('home.video_testimonials')</h2>
                        <p class="lead font-weight-normal text-muted">@lang('home.video_testimonials_p')</p>
                    </div>
                </div>
                <div class="row slider-video-testimonio mt-4">
                    @foreach($testimonio_video as $testimonio_videos)
                        <div class="col">
                            <a class="venobox" data-autoplay="true" data-vbtype="video" href="{{$testimonio_videos->codigo}}">
                                <div class="position-relative">
                                    {{--<img src="{{asset('images/video-tertimonio/'.$testimonio_videos->imagen.'')}}" alt="" class="w-100 shadow-sm rounded">--}}

                                    <picture>
                                        <source type="image/webp"
                                                data-srcset="{{asset('images/video-testimonio/'.$testimonio_videos->imagen.'')}}"
                                                data-sizes="100w">
                                        <img alt="gotoperu" class="lazy w-100 shadow-sm rounded"
                                             data-src="{{asset('images/video-testimonio/'.$testimonio_videos->imagen.'')}}"
                                             data-srcset="{{asset('images/video-testimonio/'.$testimonio_videos->imagen.'')}}"
                                             data-sizes="100w">
                                    </picture>

                                    <div class="position-absolute-bottom text-white p-3 icon-play">
                                        <i class="fas fa-play fa-2x"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="row mt-5">
                    <div class="col text-center">
                        <a href="{{route('video_testimonials_path')}}" class="btn btn-primary btn-lg font-weight-bold">@lang('home.view_all_video_testimonials')</a>
                    </div>
                </div>
            </div>
        </section>


    <section class="bg-white py-5 inquire">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h4 class="h1 font-weight-bold">Conozca a nuestros especialistas de viajes</h4>
                    <p class="lead font-weight-normal text-muted">Nuestro equipo está integrado por expertos profesionales en cada área, desde un experto team de consejeros de viajes hasta los mejores guías locales en cada destino que operamos, lo que garantiza un conocimiento total de los destinos que conforman nuestra programación; deseando transmitir esos conocimientos a todos aquellos posibles viajeros, que confían en nosotros esos importantes momentos de sus vidas: como son sus viajes.    ¡Bienvenidos al mágico e histórico Perú!</p>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 col-sm-6 col-md-3">
                    <a class="venobox text-decoration-none" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=BpaXxDE2c1M">
                        <div class="position-relative">
                            {{--<img src="{{asset('images/video-tertimonio/'.$testimonio_videos->imagen.'')}}" alt="" class="w-100 shadow-sm rounded">--}}

                            <picture class="team-circle">
                                <img alt="gotoperu" class="lazy w-100 rounded-circle"
                                     data-src="{{asset('images/team/pabel.jpg')}}"
                                     data-srcset="{{asset('images/team/pabel.jpg')}}"
                                     data-sizes="100w">
                                <div class="position-absolute-bottom mb-5 text-g-yellow p-3 icon-play">
                                    <i class="fas fa-play fa-5x"></i>
                                </div>
                            </picture>

                            <div class="text-center mt-3">
                                <h5 class="font-weight-bold text-muted m-0">Pabel Paucar</h5>
                                <p><small class="text-muted font-weight-bold">Jefe Comercial</small></p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-12 col-sm-6 col-md-3">
                    <a class="venobox text-decoration-none" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=kAHrfcy20bI">
                        <div class="position-relative">
                            {{--<img src="{{asset('images/video-tertimonio/'.$testimonio_videos->imagen.'')}}" alt="" class="w-100 shadow-sm rounded">--}}

                            <picture class="team-circle">
                                <img alt="gotoperu" class="lazy w-100 rounded-circle"
                                     data-src="{{asset('images/team/franklin.jpg')}}"
                                     data-srcset="{{asset('images/team/franklin.jpg')}}"
                                     data-sizes="100w">
                                <div class="position-absolute-bottom mb-5 text-g-yellow p-3 icon-play">
                                    <i class="fas fa-play fa-5x"></i>
                                </div>
                            </picture>

                            <div class="text-center mt-3">
                                <h5 class="font-weight-bold text-muted m-0">Franklin Perez</h5>
                                <p><small class="text-muted font-weight-bold">Guia Senior</small></p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-12 col-sm-6 col-md-3">
                    <a class="venobox text-decoration-none" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=cUWsovwPDpY">
                        <div class="position-relative">
                            {{--<img src="{{asset('images/video-tertimonio/'.$testimonio_videos->imagen.'')}}" alt="" class="w-100 shadow-sm rounded">--}}

                            <picture class="team-circle">
                                <img alt="gotoperu" class="lazy w-100 rounded-circle"
                                     data-src="{{asset('images/team/daniel.jpg')}}"
                                     data-srcset="{{asset('images/team/daniel.jpg')}}"
                                     data-sizes="100w">
                                <div class="position-absolute-bottom mb-5 text-g-yellow p-3 icon-play">
                                    <i class="fas fa-play fa-5x"></i>
                                </div>
                            </picture>

                            <div class="text-center mt-3">
                                <h5 class="font-weight-bold text-muted m-0">Daniel Escalona</h5>
                                <p><small class="text-muted font-weight-bold">Travel Advisor</small></p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-12 col-sm-6 col-md-3">
                    <a class="venobox text-decoration-none" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=586i_znr4VQ">
                        <div class="position-relative">
                            {{--<img src="{{asset('images/video-tertimonio/'.$testimonio_videos->imagen.'')}}" alt="" class="w-100 shadow-sm rounded">--}}

                            <picture class="team-circle">
                                <img alt="gotoperu" class="lazy w-100 rounded-circle"
                                     data-src="{{asset('images/team/katy.jpg')}}"
                                     data-srcset="{{asset('images/team/katy.jpg')}}"
                                     data-sizes="100w">
                                <div class="position-absolute-bottom mb-5 text-g-yellow p-3 icon-play">
                                    <i class="fas fa-play fa-5x"></i>
                                </div>
                            </picture>

                            <div class="text-center mt-3">
                                <h5 class="font-weight-bold text-muted m-0">Kati</h5>
                                <p><small class="text-muted font-weight-bold">Guia</small></p>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
            <div class="row mt-5">
                <div class="col text-center">
                    <a href="{{route('about_path')}}" class="btn btn-dark btn-lg font-weight-bold">Vea más sobre nosotros</a>
                </div>
            </div>
        </div>
    </section>

        <section class="d-none d-xl-block">
            <div class="jumbotron jumbotron-slider-1 rounded-0 m-0">
                <div class="container">
                    <div class="row justify-content-center no-gutters">
                        <div class="col-9 text-white text-center rounded">
                            <div class="row">
                                <div class="col">
                                    {{--<img data-src="{{asset('images/icons/include/assistances.png')}}" data-srcset="{{asset('images/icons/include/assistances.png')}}" alt="assistances" class="w-100 lazy has-webp">--}}
                                    <picture>
                                        <source type="image/webp"
                                                data-srcset="{{asset('images/icons/include/assistances.webp')}}"
                                                data-sizes="100w">
                                        <img alt="assistances" class="lazy w-100 shadow-sm rounded"
                                             data-src="{{asset('images/icons/include/assistances.png')}}"
                                             data-srcset="{{asset('images/icons/include/assistances.png')}}"
                                             data-sizes="100w">
                                    </picture>
                                    <small>@lang('home.assistances')</small>
                                </div>
                                <div class="col">
                                    {{--<img data-src="{{asset('images/icons/include/breakfast.png')}}" data-srcset="{{asset('images/icons/include/breakfast.png')}}" alt="breakfast" class="w-100 lazy has-webp">--}}
                                    <picture>
                                        <source type="image/webp"
                                                data-srcset="{{asset('images/icons/include/breakfast.webp')}}"
                                                data-sizes="100w">
                                        <img alt="breakfast" class="lazy w-100 shadow-sm rounded"
                                             data-src="{{asset('images/icons/include/breakfast.png')}}"
                                             data-srcset="{{asset('images/icons/include/breakfast.png')}}"
                                             data-sizes="100w">
                                    </picture>
                                    <small>@lang('home.breakfast')</small>
                                </div>
                                <div class="col">
                                    {{--<img data-src="{{asset('images/icons/include/entrances.png')}}" data-srcset="{{asset('images/icons/include/entrances.png')}}" alt="entrances" class="w-100 lazy has-webp">--}}
                                    <picture>
                                        <source type="image/webp"
                                                data-srcset="{{asset('images/icons/include/entrances.webp')}}"
                                                data-sizes="100w">
                                        <img alt="entrances" class="lazy w-100 shadow-sm rounded"
                                             data-src="{{asset('images/icons/include/entrances.png')}}"
                                             data-srcset="{{asset('images/icons/include/entrances.png')}}"
                                             data-sizes="100w">
                                    </picture>
                                    <small>@lang('home.entrances')</small>
                                </div>
                                <div class="col">
{{--                                    <img data-src="{{asset('images/icons/include/flight.png')}}" data-srcset="{{asset('images/icons/include/flight.png')}}" alt="flight" class="w-100 lazy has-webp">--}}
                                    <picture>
                                        <source type="image/webp"
                                                data-srcset="{{asset('images/icons/include/flight.webp')}}"
                                                data-sizes="100w">
                                        <img alt="flight" class="lazy w-100 shadow-sm rounded"
                                             data-src="{{asset('images/icons/include/flight.png')}}"
                                             data-srcset="{{asset('images/icons/include/flight.png')}}"
                                             data-sizes="100w">
                                    </picture>
                                    <small>@lang('home.flight')</small>
                                </div>

                                <div class="col">
                                    {{--<img data-src="{{asset('images/icons/include/hotels.png')}}" data-srcset="{{asset('images/icons/include/hotels.png')}}" alt="hotels" class="w-100 lazy has-webp">--}}
                                    <picture>
                                        <source type="image/webp"
                                                data-srcset="{{asset('images/icons/include/hotels.webp')}}"
                                                data-sizes="100w">
                                        <img alt="hotels" class="lazy w-100 shadow-sm rounded"
                                             data-src="{{asset('images/icons/include/hotels.png')}}"
                                             data-srcset="{{asset('images/icons/include/hotels.png')}}"
                                             data-sizes="100w">
                                    </picture>
                                    <small>@lang('home.hotels')</small>
                                </div>
                                <div class="col">
                                    {{--<img data-src="{{asset('images/icons/include/tours.png')}}" data-srcset="{{asset('images/icons/include/tours.png')}}" alt="tours" class="w-100 lazy has-webp">--}}
                                    <picture>
                                        <source type="image/webp"
                                                data-srcset="{{asset('images/icons/include/tours.webp')}}"
                                                data-sizes="100w">
                                        <img alt="tours" class="lazy w-100 shadow-sm rounded"
                                             data-src="{{asset('images/icons/include/tours.png')}}"
                                             data-srcset="{{asset('images/icons/include/tours.png')}}"
                                             data-sizes="100w">
                                    </picture>
                                    <small>@lang('home.tours')</small>
                                </div>
                                <div class="col">
                                    {{--<img data-src="{{asset('images/icons/include/trains.png')}}" data-srcset="{{asset('images/icons/include/trains.png')}}" alt="trains" class="w-100 lazy has-webp">--}}
                                    <picture>
                                        <source type="image/webp"
                                                data-srcset="{{asset('images/icons/include/trains.webp')}}"
                                                data-sizes="100w">
                                        <img alt="trains" class="lazy w-100 shadow-sm rounded"
                                             data-src="{{asset('images/icons/include/trains.png')}}"
                                             data-srcset="{{asset('images/icons/include/trains.png')}}"
                                             data-sizes="100w">
                                    </picture>
                                    <small>@lang('home.trains')</small>
                                </div>
                                <div class="col">
                                    <img data-src="{{asset('images/icons/include/transfers.png')}}" data-srcset="{{asset('images/icons/include/transfers.png')}}" alt="transfers" class="w-100 lazy has-webp">
                                    <small>@lang('home.transfers')</small>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="bg-light py-5">
            <div class="container">
                <div class="row mb-3">
                    <div class="col text-center">
                        <h2 class="h1 font-weight-bold text-g-dark">@lang('home.looking_travel_experience')</h2>
                        <p class="lead text-muted">@lang('home.looking_travel_experience_p')</p>
                    </div>
                </div>
                <div class="row">
                    @foreach ($categorias_block_1 as $categorias_block)
                    <div class="col-12 mb-3 col-sm-12 mb-sm-3 col-md">
                        <div class="header-img-category rounded">
                            <div class="position-relative">
                                <a href="{{route('category_show_path', str_replace(' ', '-', strtolower($categorias_block->nombre)))}}">
                                    {{--<img src="{{asset('images/category/home.jpg')}}" alt="" class="w-100 shadow-sm">--}}
                                    <picture>
                                        <source type="image/webp"
                                                data-srcset="{{asset('images/category/'.$categorias_block->imagen.'')}}"
                                                data-sizes="100w">
                                        <img alt="trains" class="lazy w-100 shadow-sm"
                                             data-src="{{asset('images/category/'.$categorias_block->imagen.'')}}"
                                             data-srcset="{{asset('images/category/'.$categorias_block->imagen.'')}}"
                                             data-sizes="100w">
                                    </picture>
                                    <div class="position-absolute-bottom text-white text-left">
                                        <h5 class="p-2 m-0 footer-title-category">{{ucwords(strtolower($categorias_block->nombre))}}</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="col-12 col-sm-12 col-md">
                        <div class="row mb-3">
                            @foreach ($categorias_random as $categorias_randoms)
                            <div class="col-12 col-sm-6 mb-3 col-sm">
                                <div class="header-img-category rounded">
                                    <div class="position-relative">
                                        <a href="{{route('category_show_path', str_replace(' ', '-', strtolower($categorias_randoms->nombre)))}}">
                                            {{--<img src="{{asset('images/category/recommended.jpg')}}" alt="" class="w-100 shadow-sm">--}}
                                            <picture>
                                                <source type="image/webp"
                                                        data-srcset="{{asset('images/category/'.$categorias_randoms->imagen.'')}}"
                                                        data-sizes="100w">
                                                <img alt="trains" class="lazy w-100 shadow-sm"
                                                     data-src="{{asset('images/category/'.$categorias_randoms->imagen.'')}}"
                                                     data-srcset="{{asset('images/category/'.$categorias_randoms->imagen.'')}}"
                                                     data-sizes="100w">
                                            </picture>
                                            <div class="position-absolute-bottom text-white text-left">
                                                <h6 class="p-2 m-0 font-weight-normal footer-title-category">{{ucwords(strtolower($categorias_randoms->nombre))}}</h6>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col text-center">
                        <a href="{{route('category_path')}}" class="btn btn-g-yellow btn-lg font-weight-bold">@lang('home.view_all_category')</a>
                    </div>
                </div>
            </div>
        </section>


        <section class="position-relative">
            <div class="offer py-5">
                <div class="container">
                    <div class="col text-center">
                        <h2 class="h1 font-weight-bold text-white">@lang('home.why_with_gotoperu')</h2>
                    </div>
                    <div class="row mt-5">
                        <div class="col-6 mb-3 col-sm-4 mb-md-0 col-md-2 text-center">
                            <i data-feather="users" class="text-white d-block mx-auto" width="45" height="45" stroke-width="1"></i>
                            <span class="text-white small mt-3 d-block">@lang('home.small_groups')</span>
                        </div>
                        <div class="col-6 mb-3 col-sm-4 mb-md-0 col-md-2 text-center">
                            <i data-feather="clock" class="text-white d-block mx-auto" width="45" height="45" stroke-width="1"></i>
                            <span class="text-white small mt-3 d-block">@lang('home.we_assistance')</span>
                        </div>
                        <div class="col-6 mb-3 col-sm-4 mb-md-0 col-md-2 text-center">
                            <i data-feather="pen-tool" class="text-white d-block mx-auto" width="45" height="45" stroke-width="1"></i>
                            <span class="text-white small mt-3 d-block">@lang('home.book_now_option')</span>
                        </div>
                        <div class="col-6 mb-3 col-sm-4 mb-md-0 col-md-2 text-center">
                            <i data-feather="map-pin" class="text-white d-block mx-auto" width="45" height="45" stroke-width="1"></i>
                            <span class="text-white small mt-3 d-block">@lang('home.cutting_middlemen')</span>
                        </div>
                        <div class="col-6 mb-3 col-sm-4 mb-md-0 col-md-2 text-center">
                            <i data-feather="thumbs-up" class="text-white d-block mx-auto" width="45" height="45" stroke-width="1"></i>
                            <span class="text-white small mt-3 d-block">@lang('home.we_take_pride')</span>
                        </div>
                        <div class="col-6 mb-3 col-sm-4 mb-md-0 col-md-2 text-center">
                            <i data-feather="calendar" class="text-white d-block mx-auto" width="45" height="45" stroke-width="1"></i>
                            <span class="text-white small mt-3 d-block">@lang('home.we_can_adapt')</span>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col text-white text-white text-center">
                            <p class="font-weight-light">@lang('home.since_2009')</p>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col text-white text-white text-center">
                            <a href="#" class="btn btn-lg btn-g-yellow font-weight-bold text-white">@lang('home.inquire_now')</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="bg-light py-5 py-md-5">
            <div class="container">
                <div class="row d-none d-sm-inline-flex align-items-center">
                    <div class="col col-sm-12 col-md">
                        <div class="row no-gutters">
                            <div class="col">
                                {{--<img class="w-100 rounded-bottom lazy has-webp"--}}
                                     {{--data-src="{{asset('images/banner-home2.jpg')}}"--}}
                                     {{--data-srcset="{{asset('images/banner-home2.jpg')}}">--}}

                                <picture>
                                    <source type="image/webp"
                                            data-srcset="{{asset('images/banner-home2.webp')}}"
                                            data-sizes="100w">
                                    <img alt="trains" class="lazy w-100 shadow-sm"
                                         data-src="{{asset('images/banner-home2.jpg')}}"
                                         data-srcset="{{asset('images/banner-home2.jpg')}}"
                                         data-sizes="100w">
                                </picture>

                            </div>
                        </div>
                        <div class="row no-gutters">
                            <div class="col">
                                {{--<img class="w-100 rounded-bottom lazy has-webp"--}}
                                     {{--data-src="{{asset('images/banner-home3.jpg')}}"--}}
                                     {{--data-srcset="{{asset('images/banner-home3.jpg')}}">--}}
                                <picture>
                                    <source type="image/webp"
                                            data-srcset="{{asset('images/banner-home3.webp')}}"
                                            data-sizes="100w">
                                    <img alt="trains" class="lazy w-100 shadow-sm"
                                         data-src="{{asset('images/banner-home3.jpg')}}"
                                         data-srcset="{{asset('images/banner-home3.jpg')}}"
                                         data-sizes="100w">
                                </picture>


                            </div>
                        </div>
                    </div>
                    <div class="col col-sm-12 col-md">
                        <h2 class="text-secondary h1 font-weight-bold text-g-yellow"><strong>@lang('home.we_are_gotoperu')</strong></h2>
                        {{--<h2 class="text-g-green">GREAT ADVENTURE <strong>PACKAGES</strong> FOR EVERYONE WITH GOTOPERU</h2>--}}
                        {{--<h2 class="text-g-green h3 font-weight-light">THE BEST <strong>PERU VACATIONS</strong> AND <strong>MACHU PICCHU TOURS</strong></h2>--}}
                        <p class="text-dark">@lang('home.we_are_gotoperu_p_2')</p>
                        <ul class="list-unstyled">
                            <li><i class="fa fa-check text-g-yellow"></i> @lang('home.headquarters')</li>
                            <li><i class="fa fa-check text-g-yellow"></i> @lang('home.company_25_members')</li>
                            <li><i class="fa fa-check text-g-yellow"></i> @lang('home.founded_2009')</li>
                            <li><i class="fa fa-check text-g-yellow"></i> @lang('home.offices_lima')</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-white py-5">
            <div class="container">
                <div class="row mb-3">
                    <div class="col text-center">
                        <h2 class="h1 font-weight-bold text-g-dark">@lang('home.destinations')</h2>
                        <p class="lead text-muted">@lang('home.destination_s_p')</p>
                    </div>
                </div>
                <div class="row">
                    @foreach ($destinos->take(4) as $destino)
                    <div class="col-12 mb-3 col-sm-6 mb-md-0 col-md">
                        <div class="header-img-category header-img-destinations rounded">
                            <div class="position-relative">
                                <a href="{{route('destinations_country_show_path', ['peru-travel', str_replace(' ','-', mb_strtolower($destino->nombre))])}}-tours">
{{--                                    <img src="{{asset('images/destinations/destinations/machu-picchu.jpg')}}" alt="" class="w-100 shadow-sm">--}}
                                    <picture>
                                        <source type="image/webp"
                                                data-srcset="{{asset('images/destinations/'.$destino->imagen.'')}}"
                                                data-sizes="100w">
                                        <img alt="{{ucwords(strtolower($destino->nombre))}}" class="lazy w-100 shadow-sm"
                                             data-src="{{asset('images/destinations/destinations/'.$destino->imagen.'')}}"
                                             data-srcset="{{asset('images/destinations/destinations/'.$destino->imagen.'')}}"
                                             data-sizes="100w">
                                    </picture>
                                    <div class="position-absolute-bottom text-white text-left mb-5 text-center">
                                        <h6 class="p-2 m-0 font-weight-bold footer-title-category">{{ucwords(strtolower($destino->nombre))}}</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="row mt-5">
                    <div class="col text-center">
                        <a href="{{route('destinations_path')}}" class="btn btn-g-yellow btn-lg font-weight-bold">@lang('home.view_all_destinations')</a>
                    </div>
                </div>
            </div>
        </section>



    <section class="bg-light pb-5 d-none d-sm-block">
        <div class="container-fluid">

            <div class="row">
                <div class="col">
                    <div class="row slider-top-home mx-4">
                        <div class="col">
                            <a class="venobox w-100" data-gall="myGallery" href="{{asset('images/slider-home/21.jpg')}}">
                                <img data-lazy="{{asset('images/slider-home/thumbnail/21.jpg')}}" class="w-100" />
                                {{--<picture>--}}
                                {{--<source type="image/webp"--}}
                                {{--data-srcset="{{asset('images/slider-home/thumbnail/21.jpg')}}"--}}
                                {{--data-sizes="100w">--}}
                                {{--<img alt="gotoperu" class="lazy w-100"--}}
                                {{--data-src="{{asset('images/slider-home/thumbnail/21.jpg')}}"--}}
                                {{--data-srcset="{{asset('images/slider-home/thumbnail/21.jpg')}}"--}}
                                {{--data-sizes="100w">--}}
                                {{--</picture>--}}
                            </a>
                        </div>
                        <div class="col">
                            <a class="venobox w-100" data-gall="myGallery" href="{{asset('images/slider-home/22.jpg')}}"><img data-lazy="{{asset('images/slider-home/thumbnail/22.jpg')}}" class="w-100" /></a>
                        </div>
                        <div class="col">
                            <a class="venobox w-100" data-gall="myGallery" href="{{asset('images/slider-home/23.jpg')}}"><img data-lazy="{{asset('images/slider-home/thumbnail/23.jpg')}}" class="w-100" /></a>
                        </div>
                        <div class="col">
                            <a class="venobox w-100" data-gall="myGallery" href="{{asset('images/slider-home/24.jpg')}}"><img data-lazy="{{asset('images/slider-home/thumbnail/24.jpg')}}" class="w-100" /></a>
                        </div>
                        <div class="col">
                            <a class="venobox w-100" data-gall="myGallery" href="{{asset('images/slider-home/25.jpg')}}"><img data-lazy="{{asset('images/slider-home/thumbnail/25.jpg')}}" class="w-100" /></a>
                        </div>
                        <div class="col">
                            <a class="venobox w-100" data-gall="myGallery" href="{{asset('images/slider-home/26.jpg')}}"><img data-lazy="{{asset('images/slider-home/thumbnail/26.jpg')}}" class="w-100" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="d-none d-xl-block py-4 bg-white">
        <div class="rounded-0 m-0">
            <div class="container">
                {{--<div class="row">--}}
                {{--<div class="col text-center">--}}
                {{--<h2 class="h1 font-weight-bold text-white">Real <span class="text-g-yellow">Testimonials</span> our travellers</h2>--}}
                {{--<a href="" class="btn btn-outline-light btn-sm">TripAdvisor 1</a>--}}
                {{--<a href="" class="btn btn-outline-light btn-sm">TripAdvisor 2</a>--}}
                {{--<a href="" class="btn btn-outline-light btn-sm">TripAdvisor 3</a>--}}
                {{--<a href="" class="btn btn-outline-light btn-sm">TripAdvisor 4</a>--}}
                {{--<a href="" class="btn btn-outline-light btn-sm">TripAdvisor 5</a>--}}
                {{--<a href="" class="btn btn-outline-light btn-sm">TripAdvisor 6</a>--}}
                {{--</div>--}}
                {{--</div>--}}
                <div class="row">
                    <div class="col-6 mb-3 col-sm-4 mb-md-0 col-md-4 text-center">
                        <div class="row justify-content-center">
                            <div class="col-6">
                                <a href="https://www.tripadvisor.com.pe/Attraction_Review-g294314-d15202262-Reviews-Gotoperu-Cusco_Cusco_Region.html" target="_blank">

                                    {{--<img src="{{asset('images/icons/tripadvisor.png')}}" alt="" class="w-100">--}}

                                    <picture>
                                        <source type="image/webp"
                                                data-srcset="{{asset('images/icons/tripadvisor.webp')}}"
                                                data-sizes="100w">
                                        <img alt="gotoperu" class="lazy w-100"
                                             data-src="{{asset('images/icons/tripadvisor.png')}}"
                                             data-srcset="{{asset('images/icons/tripadvisor.png')}}"
                                             data-sizes="100w">
                                    </picture>

                                    {{--                                    <img data-src="{{asset('images/icons/tripadvisor.png')}}" data-srcset="{{asset('images/icons/tripadvisor.png')}}" alt="certificate gotoperu" class="w-100 lazy has-webp" data-toggle="modal" data-target="#certificate-1">--}}

                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-truncate">
                                <i class="fa fa-quote-left"></i>
                                <span class="small">@lang('home.testimonial_1')</span>
                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-center">
                                <small class="text-g-yellow font-weight-bold">Jhon X2 feb 2019, USA</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 mb-3 col-sm-4 mb-md-0 col-md-4 text-center">
                        <div class="row justify-content-center">
                            <div class="col-6">
                                <a href="https://www.yelp.com/biz/gotoperu-washington?osq=gotoperu.com" target="_blank">
                                    {{--<img src="{{asset('images/icons/yelp.png')}}" alt="" class="w-100">--}}
                                    <picture>
                                        <source type="image/webp"
                                                data-srcset="{{asset('images/icons/yelp.webp')}}"
                                                data-sizes="100w">
                                        <img alt="gotoperu" class="lazy w-100"
                                             data-src="{{asset('images/icons/yelp.png')}}"
                                             data-srcset="{{asset('images/icons/yelp.png')}}"
                                             data-sizes="100w">
                                    </picture>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-truncate">
                                <i class="fa fa-quote-left"></i>
                                <span class="small">@lang('home.testimonial_2')</span>
                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-center">
                                <small class="text-g-yellow font-weight-bold">Boon C. Jan 2019 Tampa, FL</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 mb-3 col-sm-4 mb-md-0 col-md-4 text-center">
                        <div class="row justify-content-center">
                            <div class="col-6">
                                <a href="https://www.trustpilot.com/review/gotoperu.com" target="_blank">
                                    {{--<img src="{{asset('images/icons/trust.png')}}" alt="" class="w-100">--}}
                                    <picture>
                                        <source type="image/webp"
                                                data-srcset="{{asset('images/icons/trust.png')}}"
                                                data-sizes="100w">
                                        <img alt="gotoperu" class="lazy w-100"
                                             data-src="{{asset('images/icons/trust.png')}}"
                                             data-srcset="{{asset('images/icons/trust.png')}}"
                                             data-sizes="100w">
                                    </picture>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-truncate">
                                <i class="fa fa-quote-left"></i>
                                <span class="small">@lang('home.testimonial_3')</span>
                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-center">
                                <small class="text-g-yellow font-weight-bold">jeanette Pan feb 2019, USA</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col text-center">
                        <a href="https://www.tripadvisor.com/ShowTopic-g294311-i818-k5867868-Has_anyone_booked_a_tour_with_GOTOPERU_www_gotoperu_org-Peru.html" target="_blank" class="btn btn-outline-g-green font-weight-bold btn-sm">TripAdvisor 1</a>
                        <a href="https://www.tripadvisor.com/ShowTopic-g294311-i818-k6509104-Gotoperu_Travel_Agency-Peru.html" target="_blank" class="btn btn-outline-g-green font-weight-bold btn-sm">TripAdvisor 2</a>
                        <a href="https://www.tripadvisor.com/ShowTopic-g294311-i818-k5657518-GOTOPERU_online_tour_operator-Peru.html" target="_blank" class="btn btn-outline-g-green font-weight-bold btn-sm">TripAdvisor 3</a>
                        <a href="https://www.tripadvisor.com/ShowTopic-g294311-i818-k6934201-Trip_Report_Two_glorious_weeks_in_Peru_with_GOTOPERU_ORG-Peru.html" target="_blank" class="btn btn-outline-g-green font-weight-bold btn-sm">TripAdvisor 4</a>
                        <a href="https://www.tripadvisor.co.za/ShowTopic-g294311-i818-k7362487-o10-GotoPeru_or_David_Expeditions-Peru.html" target="_blank" class="btn btn-outline-g-green font-weight-bold btn-sm">TripAdvisor 5</a>
                    </div>
                </div>


            </div>
        </div>
    </section>



        <section class="bg-light pt-5">
            <div class="container-fluid">
                <div class="row mb-3">
                    <div class="col text-center">
                        <h2 class="h1 font-weight-bold text-g-dark">@lang('home.peru_authentic_experiences')</h2>
                        <a href="{{route('gallery_path')}}" class="font-weight-bold">@lang('home.see_our_publications')</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        {{--<h6 class="text-secondary"><strong><a href=""><i class="fab fa-instagram"></i></a> #gotoperu check out these #gotoperu photos from past travelers. After your trip, come back and share some of your owm!</strong></h6>--}}
                        {{--<h2 class="text-g-green">GREAT ADVENTURE <strong>PACKAGES</strong> FOR EVERYONE WITH GOTOPERU</h2>--}}
                        {{--<h2 class="text-g-green h3 font-weight-light">THE BEST <strong>PERU VACATIONS</strong> AND <strong>MACHU PICCHU TOURS</strong></h2>--}}
                        {{--<p class=" font-weight-light">You are already in the "neighborhood" here are some possible multi countries travel programs for your review, rest assure we can fully customize any travel lenght and any combination of countries, we can even design a comprehensive 30 days South America escape.</p>--}}
                    </div>
                </div>
                <div class="row">
                    <div class="col p-0">
                        <div class="elfsight-app-ba7c9526-9468-4d5b-b378-68ec76259e00"></div>

                    </div>
                </div>

                {{--<div class="row mt-4">--}}
                    {{--<div class="col text-center">--}}
                        {{--<a href="{{route('gallery_path')}}" class="btn btn-primary btn-lg font-weight-bold">View Gallery</a>--}}
                    {{--</div>--}}
                {{--</div>--}}

            </div>
        </section>

        {{--<section class="bg-white py-5 d-none">--}}
            {{--<div class="container">--}}
                {{--<div class="row align-items-center no-gutters">--}}
                    {{--<div class="col d-none d-xl-block">--}}
                        {{--<img data-src="{{asset('images/we-care.jpg')}}" data-srcset="{{asset('images/we-care.jpg')}}" alt="we care" class="img-fluid lazy has-webp">--}}
                    {{--</div>--}}
                    {{--<div class="col">--}}
                        {{--<div class="px-4">--}}
                            {{--<h3 class="display-4 font-weight-light">Because we care <i class="fa fa-heart text-danger"></i></h3>--}}
                            {{--<p class="">We give back to our communities</p>--}}
                            {{--<hr>--}}
                            {{--<p class="text-primary"><i>Chaullacota Locates at 15,000 feed (4500 mts) 2 hours Northwest of cusco</i></p>--}}
                            {{--<p class="text-justify font-weight-light">At GOTOPERU we are committed to doing business in a way that actually give back to our communities specially the one located in remote places. Our planning and execution of one of our trips involves a long supply chain: from local guides and operators to transportation providers to hotels and restaurants, we interact with a lot of different organizations on the ground, but we also know that some communities specially located on top of the Andes at 15,000+feet that due to the difficult access, dont receive the assistance they deserve, is for that reason that we organize periodically trips to this far far away communities to bring them specially sweaters and toys for children.</p>--}}
                        {{--</div>--}}

                        {{--<div class="row">--}}
                            {{--<div class="col">--}}
                                {{--<img data-src="{{asset('images/social/ninos.jpg')}}" data-srcset="{{asset('images/social/ninos.jpg')}}" alt="we care" class="img-fluid lazy has-webp pl-4" data-toggle="modal" data-target="#social-1">--}}
                                {{--<!-- Modal -->--}}
                                {{--<div class="modal fade" id="social-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
                                {{--<div class="modal-dialog modal-lg" role="document">--}}
                                {{--<div class="modal-content">--}}
                                {{--<div class="modal-body p-0">--}}
                                {{--<img src="{{asset('images/social/ninos.jpg')}}" alt="we care" class="img-fluid rounded">--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col">--}}
                                {{--<img data-src="{{asset('images/social/social.jpg')}}" data-srcset="{{asset('images/social/social.jpg')}}" alt="social" class="img-fluid pr-4 lazy has-webp" data-toggle="modal" data-target="#social-2">--}}
                                {{--<!-- Modal -->--}}
                                {{--<div class="modal fade" id="social-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
                                {{--<div class="modal-dialog modal-lg" role="document">--}}
                                {{--<div class="modal-content">--}}
                                {{--<div class="modal-body p-0">--}}
                                {{--<img src="{{asset('images/social/social.jpg')}}" alt="" class="img-fluid rounded">--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</section>--}}
        {{--<section class="bg-white pb-5 d-none d-md-flex">--}}
            {{--<div class="container">--}}
                {{--<div class="row pt-5 pb-2">--}}
                    {{--<div class="col">--}}
                        {{--<h4 class="text-secondary"><strong>100'S OF REVIEWS 1 COMPANY</strong></h4>--}}
                        {{--<h2 class="text-g-green">GREAT ADVENTURE <strong>PACKAGES</strong> FOR EVERYONE WITH GOTOPERU</h2>--}}
                        {{--<h2 class="text-g-green h3 font-weight-light">THE BEST <strong>PERU VACATIONS</strong> AND <strong>MACHU PICCHU TOURS</strong></h2>--}}
                        {{--<p class=" font-weight-light">You are already in the "neighborhood" here are some possible multi countries travel programs for your review, rest assure we can fully customize any travel lenght and any combination of countries, we can even design a comprehensive 30 days South America escape.</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="row mb-4 align-items-center justify-content-center">--}}
                    {{--<div class="col-md-8 col-lg col-xl-5">--}}
                        {{--<div class="rounded shadow w-100">--}}
                            {{--<div class="fb-page" data-href="https://www.facebook.com/GOTOPERUcom/" data-tabs="timeline" data-width="555" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/GOTOPERUcom/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/GOTOPERUcom/">GOTOPERUcom</a></blockquote></div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-12 col-lg col-xl mt-md-4">--}}
                        {{--<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">--}}
                            {{--<div class="carousel-inner">--}}
                                {{--<div class="carousel-item active">--}}
                                    {{--<div class="px-5">--}}
                                        {{--<p>--}}
                                            {{--<i class="fa fa-quote-left fa-2x float-left text-g-green pr-2"></i>--}}
                                            {{--Gotoperu.org is a fine organization excellent with details and truth in every dealing and statement they make to you while planning and executing the trip. All of them have very good English fluency and some of them are even excellent. Just be sure to ask for all of the optons in each trip since they have many choices and they never get tired of custom fitting to you :) Have no qualms recommending this organization to you.--}}
                                            {{--<i class="fa fa-quote-right fa-2x float-right text-g-green pl-2"></i>--}}
                                        {{--</p>--}}
                                        {{--<i class="float-right text-g-yellow">Jim T. New York City, New</i>--}}
                                    {{--</div>--}}
                                {{--</div>--}}

                                {{--@foreach($testimonial as $testimonials)--}}
                                    {{--<div class="carousel-item ">--}}
                                        {{--<div class="px-5">--}}
                                            {{--<p>--}}
                                                {{--<i class="fa fa-quote-left fa-2x float-left text-g-green pr-2"></i>--}}
                                                {{--{{$testimonials->contenido}}--}}
                                                {{--<i class="fa fa-quote-right fa-2x float-right text-g-green pl-2"></i>--}}
                                            {{--</p>--}}
                                            {{--<i class="float-right text-g-yellow">{{$testimonials->nombre}} {{$testimonials->ciudad}}</i>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--@endforeach--}}

                                {{--<div class="carousel-item">--}}
                                {{--<div class="px-5">--}}
                                {{--Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem cupiditate deserunt dolore doloremque enim error eveniet fugiat fugit illo impedit, labore nisi nostrum placeat quaerat similique sunt, suscipit tempora velit.--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="carousel-item">--}}
                                {{--<div class="px-5">--}}
                                {{--Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem cupiditate deserunt dolore doloremque enim error eveniet fugiat fugit illo impedit, labore nisi nostrum placeat quaerat similique sunt, suscipit tempora velit.--}}
                                {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">--}}
                                {{--<span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
                                {{--<span class="sr-only">Previous</span>--}}
                            {{--</a>--}}
                            {{--<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">--}}
                                {{--<span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
                                {{--<span class="sr-only">Next</span>--}}
                            {{--</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="row justify-content-between align-items-center">--}}
                    {{--<div class="col-md-12 col-lg-8">--}}
                        {{--<div class="row">--}}
                            {{--<div class="col text-md-center text-lg-left">--}}
                                {{--<a href="https://www.tripadvisor.com/ShowTopic-g294311-i818-k5867868-Has_anyone_booked_a_tour_with_GOTOPERU_www_gotoperu_org-Peru.html" class="btn btn-g-yellow" target="_blank">Link 1</a>--}}
                                {{--<a href="https://www.tripadvisor.com/ShowTopic-g294311-i818-k6509104-Gotoperu_Travel_Agency-Peru.html" class="btn btn-g-yellow" target="_blank">Link 2</a>--}}
                                {{--<a href="https://www.tripadvisor.com/ShowTopic-g294311-i818-k5657518-GOTOPERU_online_tour_operator-Peru.html" class="btn btn-g-yellow" target="_blank">Link 3</a>--}}
                                {{--<a href="https://www.tripadvisor.com/ShowTopic-g294311-i818-k6934201-Trip_Report_Two_glorious_weeks_in_Peru_with_GOTOPERU_ORG-Peru.html" class="btn btn-g-yellow" target="_blank">Link 4</a>--}}
                                {{--<a href="https://www.tripadvisor.co.za/ShowTopic-g294311-i818-k7362487-o10-GotoPeru_or_David_Expeditions-Peru.html" class="btn btn-g-yellow" target="_blank">Link 5</a>--}}
                                {{--<a href="https://www.trustpilot.com/review/gotoperu.com" class="btn btn-g-yellow" target="_blank">Link 6</a>--}}
                                {{--<a href="https://www.yelp.com/biz/gotoperu-washington?osq=gotoperu.com" class="btn btn-g-yellow" target="_blank">Link 7</a>--}}
                                {{--<a href="https://www.youtube.com/watch?v=AOa1ygLiapc" class="btn btn-g-yellow" target="_blank">Link 8</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-12 col-lg">--}}
                        {{--<div class="row justify-content-center">--}}
                            {{--<div class="col-md-8 col-lg-12">--}}
                                {{--<div class="row pt-4">--}}
                                    {{--<div class="col">--}}
                                        {{--<a href="https://www.tripadvisor.com/ShowTopic-g294311-i818-k5867868-Has_anyone_booked_a_tour_with_GOTOPERU_www_gotoperu_org-Peru.html"><img data-src="{{asset('images/icons/tripadvisor.png')}}" data-srcset="{{asset('images/icons/tripadvisor.png')}}" alt="logo tripadvisor" class="w-100 lazy has-webp" data-toggle="tooltip" data-placement="top" title="tripadvisor" data-original-title="If you are visiting anywhere in Peru, you cannot find a better choice than www.gotoperu.com – they live there, and work there, and can sort urgent issues readily, with a quick phone call."></a>--}}
                                    {{--</div>--}}
                                    {{--<div class="col">--}}
                                        {{--<a href="https://www.trustpilot.com/review/gotoperu.com" target="_blank"><img data-src="{{asset('images/icons/trust.png')}}" data-srcset="{{asset('images/icons/trust.png')}}" alt="logo trust" class="w-100 lazy has-webp" data-toggle="tooltip" data-placement="top" title="trust" data-original-title="In summary, we had a wonderful time! We, of course, enjoyed the sights as we expected (Machu Picchu, Sacred Valley, train, Lake Titicacca), but all of the connections were on time and very comfortable. The guides (Franklin in Cusco, Nellie in Machu Picchu) were very pleasant and very knowledgeable. "></a>--}}
                                    {{--</div>--}}
                                    {{--<div class="col">--}}
                                        {{--<a href="https://www.yelp.com/biz/gotoperu-washington?osq=gotoperu.com" target="_blank"><img data-src="{{asset('images/icons/yelp.png')}}" data-srcset="{{asset('images/icons/yelp.png')}}" alt="logo yelp" class="w-100 p-4 lazy has-webp" data-toggle="tooltip" data-placement="top" title="yelp" data-original-title="The arrangement of the agency since Cuzco arrival, has escort service all the way. You do not need to fear of lost. Hotel, tour guide, transfer are all excellent. "></a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="row pt-4">--}}
                    {{--<div class="col text-right">--}}
                        {{--<a href="{{route('testimonials_path')}}" class="btn-link font-weight-normal">View Testimonials <i class="fa fa-chevron-right"></i></a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</section>--}}

        @include('layouts.page.form-quote')


        <section class="bg-light pb-5 ">
            <div class="container">
                <div class="row pt-5 pb-2">
                    <div class="col">
                        <h2 class="text-g-dark h4 font-weight-bold"><strong>@lang('home.certificates')</strong></h2>
                        {{--<h2 class="text-g-green">GREAT ADVENTURE <strong>PACKAGES</strong> FOR EVERYONE WITH GOTOPERU</h2>--}}
                        {{--<h2 class="text-g-green h3 font-weight-light">THE BEST <strong>PERU VACATIONS</strong> AND <strong>MACHU PICCHU TOURS</strong></h2>--}}
                        <p class="font-weight-bold text-muted">@lang('home.certificates_p')</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1 d-none d-md-block">
                        <img data-src="{{asset('images/cuadro-01.png')}}" data-srcset="{{asset('images/cuadro-01.png')}}" alt="border" class="w-100 lazy has-webp">
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-10">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-4 mb-2">
                                <img data-src="{{asset('images/certificates/certificate-1.jpg')}}" data-srcset="{{asset('images/certificates/certificate-1.jpg')}}" alt="certificate gotoperu" class="w-100 lazy has-webp" data-toggle="modal" data-target="#certificate-1">
                                {{--<div class="modal fade" id="certificate-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
                                {{--<div class="modal-dialog modal-lg" role="document">--}}
                                {{--<div class="modal-content">--}}
                                {{--<div class="modal-body p-0">--}}
                                {{--<img src="{{asset('images/certificates/certificate-1.jpg')}}" alt="certificate gotoperu" class="img-fluid rounded">--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                            </div>
                            <div class="col-12 col-sm-12 col-md-4 mb-2">
                                <img data-src="{{asset('images/certificates/certificate-2.jpg')}}" data-srcset="{{asset('images/certificates/certificate-2.jpg')}}" alt="certificate gotoperu" class="w-100 lazy has-webp" data-toggle="modal" data-target="#certificate-2">
                                {{--<div class="modal fade" id="certificate-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
                                {{--<div class="modal-dialog modal-lg" role="document">--}}
                                {{--<div class="modal-content">--}}
                                {{--<div class="modal-body p-0">--}}
                                {{--<img src="{{asset('images/certificates/certificate-2.jpg')}}" alt="certificate gotoperu" class="img-fluid rounded">--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                            </div>
                            <div class="col-12 col-sm-12 col-md-4 mb-2">
                                <img data-src="{{asset('images/certificates/certificate-3.jpg')}}" data-srcset="{{asset('images/certificates/certificate-3.jpg')}}" alt="certificate gotoperu" class="w-100 lazy has-webp" data-toggle="modal" data-target="#certificate-3">
                                {{--<div class="modal fade" id="certificate-3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
                                {{--<div class="modal-dialog modal-lg" role="document">--}}
                                {{--<div class="modal-content">--}}
                                {{--<div class="modal-body p-0">--}}
                                {{--<img src="{{asset('images/certificates/certificate-3.jpg')}}" alt="certificate gotoperu" class="img-fluid rounded">--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-1 d-none d-md-block">
                        <img data-src="{{asset('images/cuadro-02.png')}}" data-srcset="{{asset('images/cuadro-02.png')}}" alt="border" class="w-100 lazy has-webp">
                    </div>
                </div>

            </div>
        </section>
    <section class="bg-light">
        <div class="container">
            <div class="row pt-5 pb-2">
                <div class="col">
                    <h2 class="text-g-dark h4 font-weight-bold"><strong>GOTOPERU GROUP</strong></h2>
                </div>
            </div>
            <div class="row align-items-center py-3">
                <div class="col-6 col-md">
                    <img data-src="{{asset('images/logos/logo-gotoperu-footer.png')}}" data-srcset="{{asset('images/logos/logo-gotoperu-footer.png')}}" alt="logo gotoperu" class="img-fluid lazy has-webp">
                </div>
                <div class="col-6 col-md">
                    <a href="https://www.andesviagens.com/" target="_blank"><img data-src="{{asset('images/logos/logo-andes-footer.png')}}" data-srcset="{{asset('images/logos/logo-andes-footer.png')}}" alt="logo andes viagens" class="img-fluid lazy has-webp"></a>
                </div>
                <div class="col-6 col-md">
                    <a href="http://www.gotolatinamerica.com/" target="_blank"><img data-src="{{asset('images/logos/logo-latinamerica-footer.png')}}" data-srcset="{{asset('images/logos/logo-latinamerica-footer.png')}}" alt="logo gotolatinamerica" class="img-fluid lazy has-webp"></a>
                </div>
                <div class="col-6 col-md">
                    <a href="https://www.llama.tours/" target="_blank"><img data-src="{{asset('images/logos/logo-llama.png')}}" data-srcset="{{asset('images/logos/logo-llama.png')}}" alt="logo machupicchu galapagos" class="img-fluid lazy has-webp"></a>
                </div>
            </div>
        </div>
    </section>

    </div>
    @push('scripts')

        <script>
            $(".owl-carousel").owlCarousel({
                // loop: true,
                // margin: 10,
                // nav: true,
                autoplay:true,
                autoplayTimeout:10000,
                autoplayHoverPause:true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            });

            var topItem = 0,
                leftItem = 0,
                popupHeight = 500;

            $(".owl-carousel .item").on("click", function(e) {
                var $this = $(this),
                    $parent = $this.parents(".owl-carousel-wrap"),
                    content = $this.html(),
                    $popup = $parent.find(".popup");

                topItem = $this.offset().top - $parent.offset().top + $this.height() / 2;
                leftItem = $this.offset().left - $parent.offset().left + $this.width() / 2;

                $popup.css({
                    top: topItem,
                    left: leftItem,
                    width: 0,
                    height: 0
                });

                $popup.html(content).stop().animate(
                    {
                        top: -((popupHeight - $this.parent().outerHeight()) / 2),
                        left: 0,
                        width: "100%",
                        height: popupHeight,
                        opacity: 1
                    },
                    400
                );
            });

            $(".popup").on("click", function(e) {
                $(this).stop().animate(
                    {
                        width: 0,
                        height: 0,
                        top: topItem,
                        left: leftItem,
                        opacity: 0
                    },
                    400
                );
            });
        </script>
        {{--<script>--}}
        {{--//form--}}
        {{--function design(){--}}
        {{--$.ajaxSetup({--}}
        {{--headers: {--}}
        {{--'X-CSRF-TOKEN': $('[name="_token"]').val()--}}
        {{--}--}}
        {{--});--}}

        {{--$("#de_send").attr("disabled", true);--}}

        {{--var filter=/^[A-Za-z][A-Za-z0-9_.]*@[A-Za-z0-9_]+.[A-Za-z0-9_.]+[A-za-z]$/;--}}


        {{--var s_destinations = document.getElementsByName('destinations[]');--}}
        {{--var $destinations = "";--}}
        {{--for (var i = 0, l = s_destinations.length; i < l; i++) {--}}
        {{--if (s_destinations[i].checked) {--}}
        {{--$destinations += s_destinations[i].value+' , ';--}}
        {{--}--}}
        {{--}--}}
        {{--s_destinations = $destinations.substring(0,$destinations.length-3);--}}

        {{--//                alert(s_destinations);--}}

        {{--var s_name = $('#de_name').val();--}}
        {{--var s_email = $('#de_email').val();--}}
        {{--var s_country = $('#de_country').val();--}}
        {{--var s_date = $('#de_date').val();--}}
        {{--var s_number = $('#de_numero').val();--}}
        {{--var s_duration = $('#de_duration').val();--}}
        {{--//                var s_other = $('#de_otros').val();--}}
        {{--var s_comment = $('#de_comment').val();--}}


        {{--if (filter.test(s_email)){--}}
        {{--sendMail = "true";--}}
        {{--} else{--}}
        {{--$('#de_email').css("border-bottom", "2px solid #FF0000");--}}
        {{--sendMail = "false";--}}
        {{--}--}}
        {{--if (s_name.length == 0 ){--}}
        {{--$('#de_name').css("border-bottom", "2px solid #FF0000");--}}
        {{--var sendMail = "false";--}}
        {{--}--}}

        {{--if(sendMail == "true"){--}}
        {{--var datos = {--}}

        {{--"txt_destinations" : s_destinations,--}}

        {{--"txt_name" : s_name,--}}
        {{--"txt_email" : s_email,--}}
        {{--"txt_country" : s_country,--}}
        {{--"txt_date" : s_date,--}}
        {{--"txt_number" : s_number,--}}
        {{--"txt_duration" : s_duration,--}}
        {{--"txt_comment" : s_comment,--}}

        {{--};--}}
        {{--$.ajax({--}}
        {{--data:  datos,--}}
        {{--url:   "{{route('design_path')}}",--}}
        {{--type:  'post',--}}

        {{--beforeSend: function () {--}}

        {{--$('#de_send').removeClass('show');--}}
        {{--$("#de_send").addClass('d-none');--}}

        {{--$("#loader5").removeClass('d-none');--}}
        {{--$("#loader5").addClass('show');--}}
        {{--},--}}
        {{--success:  function (response) {--}}
        {{--$('#de_form')[0].reset();--}}
        {{--$('#de_send').removeClass('d-none');--}}
        {{--$('#de_send').addClass('show');--}}
        {{--$("#loader5").removeClass('show');--}}
        {{--$("#loader5").addClass('d-none');--}}
        {{--$('#de_alert').removeClass('d-none');--}}
        {{--$("#de_alert").addClass('show');--}}
        {{--$("#de_alert b").html(response);--}}
        {{--$("#de_alert").fadeIn('slow');--}}
        {{--$("#de_send").removeAttr("disabled");--}}
        {{--}--}}


        {{--});--}}
        {{--} else{--}}
        {{--$("#de_send").removeAttr("disabled");--}}
        {{--}--}}
        {{--}--}}

        {{--$('#de_date').datepicker({--}}
        {{--dateFormat: 'yy-mm-dd',--}}
        {{--changeMonth: true,--}}
        {{--changeYear: true--}}
        {{--});--}}

        {{--</script>--}}


        <script>
            $('#airport').change(function(){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('[name="_token"]').val()
                    }
                });
                var s_airport = $('#airport').val();

                var datos = {
                    "txt_airport" : s_airport
                };

                $.ajax({
                    data: datos,
                    url: "{{route('lista_precio_aero_path')}}",
                    type: 'post',
                    // success: rendeListaPrecios
                    success:  listar_precios
                });
            });

            function listar_precios(data) {
                $('#price_airport option').remove();
                var list = data == null ? [] : (data.price_air instanceof Array ? data.price_air : [data.price_air ]);
                if (list.length < 1) {
                    alert("SIN NINGÚN RESULTADO EN LA BD");
                } else {
                    $('#price_airport').append('<option value="0">Select...</option>');
                    $.each(list, function(index, price_air) {
                        var fecha = price_air.fecha.split('-');
                        if(fecha){
                            var meses=new Array("January","February","March","April","May","June","July","August","September","October","November","December");
                            var f = new Date(fecha);

                            var texto=meses[f.getMonth()]+' '+f.getDate()+', '+f.getFullYear();
                            // console.log(texto);
                        }
                        $('#price_airport').append('<option value='+price_air.id+'>'+texto+'</option>');
                    });
                    $('#price_airport').focus();
                }
            }

            $('#price_airport').change(function(){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('[name="_token"]').val()
                    }
                });
                var s_price_airport = $('#price_airport').val();

                var datos = {
                    "txt_price_airport" : s_price_airport
                };

                $.ajax({
                    data: datos,
                    url: "{{route('precio_aero_path')}}",
                    type: 'post',
                    // success: rendeListaPrecios
                    success:  p_precios
                });
            });

            function p_precios(data) {
                $('#h_prices span').remove();
                var list = data == null ? [] : (data.price_t instanceof Array ? data.price_t : [data.price_t ]);
                if (list.length < 1) {
                    alert("SIN NINGÚN RESULTADO EN LA BD");
                } else {
                    // $('#hola b').append('<option value="0">SELECCIONAR...</option>');
                    $.each(list, function(index, price_t) {
                        $('#h_prices').append('<span>'+price_t.precio+'</span>');
                    });
                }
            }



            //

            function detail_p(){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('[name="_token"]').val()
                    }
                });

                // $("#p_price_b").attr("disabled", true);

                var s_airport = $('#airport option:selected').val();
                var s_price_airport = $('#price_airport option:selected').val();

                if (s_airport){
                    var sendMail = "true";
                }

                if (s_airport == 0){
                    $('#airport').css("border-bottom", "2px solid #FF0000");
                    var sendMail = "false";
                }

                if (s_price_airport == 0){
                    $('#price_airport').css("border-bottom", "2px solid #FF0000");
                    var sendMail = "false";
                }

                if(sendMail == "true"){
                    var datos = {
                        "txt_airport" : s_airport,
                        "txt_price_airport" : s_price_airport
                    };
                    $.ajax({
                        data:  datos,
                        url:   "{{route('inquire_detail_p_path')}}",
                        type:  'post',

                        beforeSend: function () {

                            $('#d_send').removeClass('show');
                            $("#d_send").addClass('d-none');

                            $("#loader2").removeClass('d-none');
                            $("#loader2").addClass('show');
                        },
                        success:  function (response) {
                            window.location.href = '/packages/air-land/peru-machu-picchu-from-usa/7-days-tours/detail/'+response+'';
                        }
                    });
                } else{
                    $("#d_send").removeAttr("disabled");
                }
            }

            // $('#d_date').datepicker({
            //     dateFormat: 'mm-dd-y',
            //     changeMonth: true,
            //     changeYear: true
            // });

        </script>

        <script>
            var swiper = new Swiper('.swiper-container', {
                direction: 'vertical',
                slidesPerView: 'auto',
                freeMode: true,
                scrollbar: {
                    el: '.swiper-scrollbar',
                },
                mousewheel: true,
            });


            // var myLazyLoad = new LazyLoad({
            //     elements_selector: ".lazy"
            // });
            // (function () {
            //     var ll = new LazyLoad({
            //         threshold: 0
            //     });
            // }());
            // (function () {
            //     var ll = new LazyLoad({
            //         threshold: 0,
            //         to_webp: true
            //     });
            // }());

            // var $video  = $('video'),
            //     $window = $(window);
            //
            // $(window).resize(function(){
            //
            //     var height = $window.height();
            //     $video.css('height', height);
            //
            //     var videoWidth = $video.width(),
            //         windowWidth = $window.width(),
            //         marginLeftAdjust =   (windowWidth - videoWidth) / 2;
            //
            //     $video.css({
            //         'height': height,
            //         'marginLeft' : marginLeftAdjust
            //     });
            // }).resize();

            //venobox
            $(document).ready(function(){
                $('.venobox').venobox();
            });

            //slick
            $('.slider-top-home').slick({
                // dots: true,
                lazyLoad: 'ondemand',
                infinite: true,
                speed: 300,
                slidesToShow: 5,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 10000,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            lazyLoad: 'ondemand',
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            lazyLoad: 'ondemand',
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            lazyLoad: 'ondemand',
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
            });

            $('.slider-video-testimonio').slick({
                // dots: true,
                infinite: true,
                speed: 300,
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 10000,
                arrows: false,
                dots: false,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2,
                            arrows: false
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            arrows: false,
                        }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
            });

            /**
             * @fileoverview dragscroll - scroll area by dragging
             * @version 0.0.8
             *
             * @license MIT, see http://github.com/asvd/dragscroll
             * @copyright 2015 asvd <heliosframework@gmail.com>
             */


            (function (root, factory) {
                if (typeof define === 'function' && define.amd) {
                    define(['exports'], factory);
                } else if (typeof exports !== 'undefined') {
                    factory(exports);
                } else {
                    factory((root.dragscroll = {}));
                }
            }(this, function (exports) {
                var _window = window;
                var _document = document;
                var mousemove = 'mousemove';
                var mouseup = 'mouseup';
                var mousedown = 'mousedown';
                var EventListener = 'EventListener';
                var addEventListener = 'add'+EventListener;
                var removeEventListener = 'remove'+EventListener;
                var newScrollX, newScrollY;

                var dragged = [];
                var reset = function(i, el) {
                    for (i = 0; i < dragged.length;) {
                        el = dragged[i++];
                        el = el.container || el;
                        el[removeEventListener](mousedown, el.md, 0);
                        _window[removeEventListener](mouseup, el.mu, 0);
                        _window[removeEventListener](mousemove, el.mm, 0);
                    }

                    // cloning into array since HTMLCollection is updated dynamically
                    dragged = [].slice.call(_document.getElementsByClassName('dragscroll'));
                    for (i = 0; i < dragged.length;) {
                        (function(el, lastClientX, lastClientY, pushed, scroller, cont){
                            (cont = el.container || el)[addEventListener](
                                mousedown,
                                cont.md = function(e) {
                                    if (!el.hasAttribute('nochilddrag') || _document.elementFromPoint(e.pageX, e.pageY) == cont) {
                                        pushed = 1;
                                        lastClientX = e.clientX;
                                        lastClientY = e.clientY;
                                        e.preventDefault();
                                    }
                                }, 0
                            );

                            _window[addEventListener](
                                mouseup, cont.mu = function() {pushed = 0;}, 0
                            );

                            _window[addEventListener](
                                mousemove,
                                cont.mm = function(e) {
                                    if (pushed) {
                                        (scroller = el.scroller||el).scrollLeft -=
                                            newScrollX = (- lastClientX + (lastClientX=e.clientX));
                                        scroller.scrollTop -=
                                            newScrollY = (- lastClientY + (lastClientY=e.clientY));
                                        if (el == _document.body) {
                                            (scroller = _document.documentElement).scrollLeft -= newScrollX;
                                            scroller.scrollTop -= newScrollY;
                                        }
                                    }
                                }, 0
                            );
                        })(dragged[i++]);
                    }
                }

                if (_document.readyState == 'complete') {
                    reset();
                } else {
                    _window[addEventListener]('load', reset, 0);
                }

                exports.reset = reset;
            }));

            // $('.lazy').slick({
            //     lazyLoad: 'ondemand',
            //     slidesToShow: 3,
            //     slidesToScroll: 1
            // });

            // setTimeout(function() {
            //     $('#myModal').modal();
            // }, 5000);
        </script>
        <div id="fb-root"></div>
        <script async defer src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.2&appId=1712869952328301&autoLogAppEvents=1"></script>


    @endpush

@stop
