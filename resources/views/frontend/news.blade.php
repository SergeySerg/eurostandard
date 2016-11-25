@extends('ws-app')

@section('content')

    <!--start: Row -->

    <div class="row">

        <div class="col-md-8">

            <div class="panel panel-default wow fadeInUp">

                <div class="panel-heading">{{ trans('base.latest_news') }}</div>

                <div class="panel-body">

                    <div class="row">

                        @foreach($news as $new)

                            <div class="r-block-item">

                                <div class="col-md-3">

                                    @if(count($new->getImages()) > 0)

                                        <a href="#" class="thumbnail">
                                            <img src="/{{$new->getImages()[0]['min']}}" alt="...">
                                        </a>

                                    @endif

                                </div>

                                <div class="col-md-9">

                                    <h4>{{ $new->getTranslate('title') }}</h4>

                                    {!! str_limit($new->getTranslate('short_description'), 230) !!}

                                    <div class="clearfix">

                                        <span class="pull-left">{{ trans('base.date') }}:<span class="news-date">{{ date('d/m/Y ',strtotime($new -> date)) }}</span></span>

                                        <a href="/{{ App::getLocale() }}/news/article-{{ $new -> id }}" class="pull-right">{{ trans('base.read_full_news') }}<i class="fa fa-angle-right fa-lg"></i></a>

                                    </div>

                                </div>

                                <hr>

                            </div>

                        @endforeach

                    </div>

{{--
                    <div class="row">
                        <div class="r-block-item">
                            <div class="col-md-3">
                                <a href="#" class="thumbnail">
                                    <img src="http://www.volynpost.com/img/modules/news/6/78/64cdbd95dff5a702f82bee8dc6cf5786/top-photo.jpg" style="height:93px" alt="...">
                                </a>
                            </div>

                            <div class="col-md-9">
                                <h4>Збільшення пенсійного віку</h4>
                                <p>Пенсійний вік підвищуватимуть поступово, але список професій, які дають право
                                    дострокового виходу на пенсію, суттєво скоротять починаючи з...
                                </p>
                                <span class="pull-left">Дата:<span class="news-date">22/11/2016</span></span>
                                <a href="#" class="pull-right">Читати повну новину<i class="fa fa-angle-right fa-lg"></i></a>
                            </div>
                        </div>
                    </div>
--}}

                    <nav aria-label="Page navigation">
                        <ul class="pagination">
                            <li>
                                <a href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

        </div>

        <div class="col-sm-4">

            <div class="panel panel-default wow fadeInDown">

                <div class="panel-heading">{{ trans('base.latest_jobs') }}</div>

                <div class="panel-body">

                    <div class="row">

                        @foreach($last_works as $last_work)

                            <div class="r-block-item">

                                <div class="col-md-12">

                                    <h4 class="col-sm-6 col-md-6 text-left r-prof">{{ $last_work->getTranslate('title') }}</h4>

                                    <h4 class="col-sm-6 col-md-6 text-right r-price">{!! $last_work->getTranslate('price') !!}</h4>

                                    <p>{!! str_limit($last_work->getTranslate('short_description'), 215) !!}</p>

                                    <a href="#" class="pull-right">{{ trans('base.more') }}<i class="fa fa-angle-right fa-lg"></i></a>

                                </div>

                                <hr>

                            </div>

                        @endforeach

                    </div>

                    <p><a class="btn btn-primary btn-lg" style="width: 100%;" href="/{{ App::getLocale() }}/works" role="button">{{ trans('base.all_jobs') }}</a></p>

                </div>

            </div>

        </div>

    </div>
    <!-- Example row of columns -->

@endsection