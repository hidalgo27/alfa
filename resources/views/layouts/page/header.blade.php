{{--<div id="title" class="text-white">--}}
    {{--<div class="container-fluid">--}}
        {{--<div class="row align-items-center justify-content-between my-2">--}}
            {{--<div class="col-3">--}}
                {{--<a href="{{route('home_path')}}">--}}
                    {{--<img src="{{asset('images/logos/logo-gotoperu-ave-w.webp')}}" alt="" class="img-fluid">--}}
                    {{--<img class="w-100 lazy has-webp"--}}
                         {{--data-src="{{asset('images/logos/logo-gotoperu-ave-w.png')}}"--}}
                         {{--data-srcset="{{asset('images/logos/logo-gotoperu-ave-w.png')}}" alt="logo gotoperu">--}}
                {{--</a>--}}
            {{--</div>--}}
            {{--<div class="col text-center">--}}
                {{--<h5 class="font-weight-light"><b class="font-weight-bold">GO</b> with the Peruvian experts</h5>--}}
            {{--</div>--}}
            {{--<div class="col-3 text-right">--}}
                {{--<a href="tel:+2029963000" class="mx-3 text-g-yellow font-weight-bold h5">(202) 996-3000</a>--}}
                {{--<a href="#" class="text-white"  data-toggle="modal" data-target="#modal-menu"><i class="fa fa-bars fa-2x"></i></a>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}


<div id="title" class="text-white">
    <div class="container-fluid">

        @if (App::getLocale() == "es")
        <div class="row align-items-center text-center small">
            <div class="col">
                <div class="row justify-content-center">
                    <div class="col-auto">
                        <div class="nav-tabs-wrapper sticky-top bg-rgba-dark rounded-bottom">
                            <ul id="menu" class="nav nav-pills nav-tabs dragscroll horizontal d-sm-flex nav-itinerary">
                              
                                <li class="nav-item">
                                    <a class="nav-link text-white font-weight-bold rounded-0" href="tel:+5715800884"><img src="{{asset('images/icons/colombia.png')}}" alt="" width="22" data-toggle="tooltip" data-placement="top" title="Colombia"> +57 1 580-0884</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white font-weight-bold rounded-0" href="tel:+5117059774"><img src="{{asset('images/icons/peru.png')}}" alt="" width="22" data-toggle="tooltip" data-placement="top" title="Argentina"> +51 1 705-9774</a>
                                </li>
                               
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

        <div class="row align-items-center justify-content-between my-2">
            <div class="col-3 col-md-5 col-lg-4 col-xl-3">
                <a href="{{route('home_path')}}">
                    {{--<img src="{{asset('images/logos/logo-gotoperu-ave-w.webp')}}" alt="" class="img-fluid">--}}
                    <img class="w-100 lazy has-webp"
                         data-src="{{asset('images/logos/logo-gotoperu-ave-w.png')}}"
                         data-srcset="{{asset('images/logos/logo-gotoperu-ave-w.png')}}" alt="logo gotoperu">
                </a>
            </div>
            <div class="col d-md-none d-xl-inline col-xl text-center">
                @if (App::getLocale() == "en")
                    <h5 class="font-weight-light">@lang('home.header_slogan')</h5>
                @endif
                @if (App::getLocale() == "pt")
                <h5 class="font-weight-light"><img src="{{asset('images/icons/brasil.png')}}" width="30"  alt="brazil"> <img src="{{asset('images/icons/peru.png')}}" width="30"  alt="peru"> @lang('home.header_slogan')</h5>
                @endif
            </div>
{{--            <div class="col-3 d-md-none d-lg-inline col-lg-auto col-xl-auto text-right">--}}
                @if (App::getLocale() == "en")
{{--                    <a href="tel:+2029963000" class="mx-3 text-g-yellow font-weight-bold h5"><img src="{{asset('images/icons/peru.png')}}" alt="" width="25" data-toggle="tooltip" data-placement="top" title="Perú"> (202) 996-3000</a>--}}
{{--                @elseif (App::getLocale() == "pt")--}}
{{--                    <a href="tel:+551131982239" class="mx-3 text-g-yellow font-weight-bold h5"> +55 (11) 31982239</a>--}}
{{--                @elseif (App::getLocale() == "es")--}}
{{--                    <a href="tel:+5184206931" class="mx-3 text-g-yellow font-weight-bold h5"><img src="{{asset('images/icons/peru.png')}}" alt="" width="25" data-toggle="tooltip" data-placement="top" title="Perú"> +51 84 206931</a>--}}
                    <div class="col-3 d-md-none d-lg-inline col-lg-auto col-xl-auto text-right">
                        <div class="bg-dark rounded px-3 shadow clearfix float-right">
                            <a href="https://api.whatsapp.com/send?phone=12024911478" target="_blank" class="font-weight-bold text-white stretched-link">
                                <img src="{{asset('images/icons/whatsapp-i.png')}}" class="py-1" alt="logo whatsapp" width="50" data-toggle="tooltip" data-placement="top" title="Perú">
                                +1 (202) 491-1478
                            </a>
                        </div>
                    </div>
                @endif
{{--            </div>--}}
            @if (App::getLocale() == "pt")
            <div class="col-5 col-lg-auto">
                <div class="bg-dark rounded px-3 shadow clearfix float-right">
                    <a href="https://api.whatsapp.com/send?phone=51999200914" target="_blank" class="font-weight-bold text-white stretched-link">
                        <img src="{{asset('images/icons/whatsapp-i.png')}}" class="py-1" alt="logo whatsapp" width="50" data-toggle="tooltip" data-placement="top" title="Perú">
                        +51 999200914
                    </a>
                </div>
            </div>
            @endif
            @if (App::getLocale() == "es")
                <div class="col-5 col-lg-auto">
                    <div class="bg-dark rounded px-3 shadow clearfix float-right">
                        <a href="https://api.whatsapp.com/send?phone=5117059774" target="_blank" class="font-weight-bold text-white stretched-link">
                            <img src="{{asset('images/icons/whatsapp-i.png')}}" class="py-1" alt="logo whatsapp" width="50" data-toggle="tooltip" data-placement="top" title="Perú">
                            +51 (1) 705-9774
                        </a>
                    </div>
                </div>
            @endif
            <div class="col-auto">
                <a href="#" class="text-white"  data-toggle="modal" data-target="#modal-menu"><i class="fa fa-bars fa-2x"></i></a>
            </div>
        </div>
        
        <div class="row">
                                <div class="col text-right">
                                                           <a href="{{asset('pdf/coronavirus-gotoperu.pdf')}}" target="_blank" style="color: #59d8d8" class="h4 font-weight-bold">Update Covid-19</a>
                                                                   </div>
                                                                           </div>
        
    </div>
</div>
