@extends('ws-app')

@section('content')

    <div class="row">

        <div class="col-md-8">

            <div class="panel panel-default wow fadeInDown">

                <div class="panel-heading">{{ trans('base.latest_jobs') }}</div>

                <div class="panel-body">

                    <div class="row">

                        @foreach($last_works as $last_work)

                            <div class="r-block-item">

                                <div class="col-md-12">

                                    <h4 class="r-prof">{{ $last_work->getTranslate('title') }}</h4>

                                    <h5 class="works-atribute">{{ trans('base.date') }}:<span class="news-date">{{ date('d/m/Y ',strtotime($last_work -> date)) }}</span></h5>

                                    <h5 class="r-price works-atribute">{{ trans('base.salary') }}<span class="news-date">{{ $last_work->getTranslate('price') }} грн</span></h5>

                                    {!! $last_work->getTranslate('short_description') !!}

                                    <a href="/{{ App::getLocale() }}/works/article-{{ $last_work -> id }}" class="pull-right">{{ trans('base.more') }}<i class="fa fa-angle-right fa-lg"></i></a>

                                </div>

                                <hr>

                            </div>

                        @endforeach

                    </div>

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

            <div class="panel panel-default wow fadeInUp">

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

            </div>

        </div>

    </div>

@endsection