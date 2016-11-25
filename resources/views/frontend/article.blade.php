@extends('ws-app')

@section('content')

    <div class="row">

        <div class="col-md-8">

            <div class="panel panel-default wow fadeInUp">

                <div class="panel-heading">{{ $article->getTranslate('title') }}
                    @if(Request::is('*/news/'))
                        <div class="pull-right"><i class="fa fa-calendar" aria-hidden="true"></i>{{ date('d/m/Y ',strtotime($article -> date)) }}</div>
                    @else
                        <div class="pull-right"><i class="fa fa-money" aria-hidden="true"></i>{{ $article -> price }}</div>
                    @endif
                </div>

                <div class="panel-body">

                    <div class="row">

                        <div class="r-block-item">

                            <div class="col-md-3">

                                @if(count($article->getImages()) > 0)

                                    <a href="#" class="thumbnail">
                                        <img src="/{{$article->getImages()[0]['min']}}" alt="...">
                                    </a>

                                @endif

                            </div>

                            <div class="col-md-9">

                                {!! $article->getTranslate('description') !!}

                                @if(Request::is('*/news/*'))

                                    <a href="/{{ App::getLocale() }}/news" class="pull-right">{{ trans('base.all_news') }}<i class="fa fa-angle-right fa-lg"></i></a>

                                @else

                                    <a href="/{{ App::getLocale() }}/works" class="pull-right">{{ trans('base.all_jobs') }}<i class="fa fa-angle-right fa-lg"></i></a>

                                @endif

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="col-sm-4">

            <div class="panel panel-default wow fadeInDown">

                @if(Request::is('*/works/*'))

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

                @else

                    <div class="panel-heading">{{ trans('base.latest_news') }}</div>

                    <div class="panel-body">

                        <div class="row">

                            @foreach($last_news as $last_new)

                                <div class="r-block-item">

                                    <div class="col-md-12"><h4>{{ $last_new->getTranslate('title') }}</h4></div>

                                    <div class="col-md-4">

                                        @if(count($last_new->getImages()) > 0)

                                            <a href="#" class="thumbnail">
                                                <img src="/{{$last_new->getImages()[0]['min']}}" alt="...">
                                            </a>

                                        @endif

                                    </div>

                                    <div class="col-md-8">

                                        {!! str_limit($last_new->getTranslate('short_description'), 140) !!}

                                        <a href="#" class="pull-right">{{ trans('base.read_full_news') }}<i class="fa fa-angle-right fa-lg"></i></a>

                                    </div>

                                    <hr>

                                </div>

                            @endforeach
                        </div>

                        <p><a class="btn btn-primary btn-lg" style="width: 100%;" href="/{{ App::getLocale() }}/news" role="button">{{ trans('base.all_news') }}</a></p>

                    </div>

                @endif

            </div>

        </div>

    </div>

@endsection