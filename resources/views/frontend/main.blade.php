@extends('ws-app')

@section('content')


    <div class="row">

        <div class="col-md-12">
            <!-- start: Slider -->
            <div id="webstudio-slider" style="display:none;
                                              margin-bottom: 20px;
                                              border-radius: 5px;
                                              box-shadow: 0 0 15px rgba(0,0,0, .15);">
                @foreach($slides as $slide)

                    @if(count($slide->getImages()) > 0)

                        <img alt="{{$slide->getTranslate('title')}}" src="/{{$slide->getImages()[0]['full']}}"
                             data-image="/{{$slide->getImages()[0]['full']}}"
                             id="img-{{$slide->id}}"
                             data-description=" {{$slide->getTranslate('description')}}"
                             data-link="jhjhjhj111">

                    @endif

                @endforeach
            </div>
            <!-- end: Slider -->

        </div>

    </div>

    <!--start: Row -->

    <div class="row">

        <div class="col-md-12">

            <div class="panel panel-default wow fadeInLeft">
                <div class="panel-heading"> {{ $main->getTranslate('title') }}</div>

                <div class="panel-body">
                    <div class="col-sm-4 col-md-3">
                        <a href="#" class="thumbnail">
                            @if(count($main->getImages()) > 0)
                                 <img src="/{{$main->getImages()[0]['min']}}" alt="...">
                            @endif
                        </a>
                    </div>
                    <div class="col-sm-8 col-md-9">
                        {!! $main->getTranslate('short_description') !!}
                        <a href="#" class="pull-right">{{ trans('base.more') }}<i class="fa fa-angle-right fa-lg"></i></a>
                    </div>
                    <div class="col-sm-8 col-md-9" style="display: none">
                        {!!$main->getTranslate('description') !!}
                        <a href="#" class="pull-right">{{ trans('base.more') }}<i class="fa fa-angle-right fa-lg"></i></a>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <div class="row">

        <div class="col-sm-6 col-md-6">

            <div class="panel panel-default wow fadeInUp">
                <div class="panel-heading">Останні новини</div>

                <div class="panel-body">

                    <div class="row">
                        <div class="r-block-item">
                            <div class="col-md-4">
                                <a href="#" class="thumbnail">
                                    <img src="http://www.economtermin.ru/uploads/fotos/2/3/1.jpg" style="height:93px" alt="...">
                                </a>
                            </div>

                            <div class="col-md-8">
                                <h4>Міжнародний Економічний Форум</h4>
                                <p>У Форумі взяли участь близько 300 учасників, 50 доповідачів з 12 країн світу,
                                    серед яких інвестори, вчені, експерти, бізнесмени, повноважні...
                                </p>
                                <a href="#" class="pull-right">Читати повну новину<i class="fa fa-angle-right fa-lg"></i></a>
                            </div>
                            <hr>
                        </div>
                    </div>

                    <div class="row">
                        <div class="r-block-item">
                            <div class="col-md-4">
                                <a href="#" class="thumbnail">
                                    <img src="http://www.volynpost.com/img/modules/news/6/78/64cdbd95dff5a702f82bee8dc6cf5786/top-photo.jpg" style="height:93px" alt="...">
                                </a>
                            </div>

                            <div class="col-md-8">
                                <h4>Збільшення пенсійного віку</h4>
                                <p>Пенсійний вік підвищуватимуть поступово, але список професій, які дають право
                                    дострокового виходу на пенсію, суттєво скоротять починаючи з...
                                </p>
                                <a href="#" class="pull-right">Читати повну новину<i class="fa fa-angle-right fa-lg"></i></a>
                            </div>
                        </div>
                    </div>

                    <p><a class="btn btn-primary btn-lg" style="width: 100%;" href="/{{ App::getLocale() }}/news" role="button">Всі новини</a></p>

                </div>
            </div>

        </div>
        <div class="col-sm-6 col-md-6">

            <div class="panel panel-default wow fadeInDown">
                <div class="panel-heading">{{ trans('base.latest_jobs') }}</div>

                <div class="panel-body">

                    <div class="row">
                        @foreach($works->getLast(2) as $last_work)
                            <div class="r-block-item">
                                <div class="col-md-12">
                                    <h4 class="col-sm-6 col-md-6 text-left r-prof">{{ $last_work->getTranslate('title') }}</h4>
                                    <h4 class="col-sm-6 col-md-6 text-right r-price">з/п від {{ $last_work->getTranslate('price') }} грн</h4>
                                    <p>{{ $last_work->getTranslate('short_description') }}
                                    </p>
                                    <a href="#" class="pull-right">{{ trans('base.more') }}<i class="fa fa-angle-right fa-lg"></i></a>
                                </div>
                                <hr>
                            </div>
                        @endforeach
                    </div>

                    <p><a class="btn btn-primary btn-lg" style="width: 100%;" href="/{{ App::getLocale() }}/works" role="button">Всі вакансії</a></p>

                </div>
            </div>

        </div>

    </div>
    <!-- Example row of columns -->

@endsection