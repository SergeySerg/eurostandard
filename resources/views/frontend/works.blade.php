@extends('ws-app')

@section('content')

    <div class="col-md-8">

            <div class="panel panel-default wow fadeInDown">

                <div class="panel-heading panel-heading_bg">{{ trans('base.latest_jobs') }}</div>

                <div class="panel-body panel-body_works">

                    <div class="row">

                        @foreach($works as $work_item)

                            <div class="r-block-item clearfix">

                                <div class="col-md-12">

                                    <h4 class="r-prof title_works">{{ $work_item->getTranslate('title') }}</h4>

                                    <div class="works-line clearfix">

                                        <h5 class="works-atribute"><span class="news-date news-date_line">{{ trans('base.date') }}:{{ date('d.m.Y ',strtotime($work_item -> date)) }}</span></h5>

                                        <h4 class="r-price r-price_line works-atribute">{{ trans('base.salary') }} {{ $work_item->getTranslate('price') }} грн</h4>

                                    </div>

                                    <div class="block-content">{!! str_limit($work_item->getTranslate('short_description'), 400) !!}</div>

                                    <div class="clearfix">

                                        <a href="/{{ App::getLocale() }}/works/article-{{ $work_item -> id }}" class="pull-right">{{ trans('base.more') }}<i class="fa fa-angle-right fa-lg fa_my"></i><i class="fa fa-angle-right fa-lg"></i></a>

                                    </div>

                                </div>

                            </div>

                        @endforeach

                    </div>

                    <nav aria-label="Page navigation">
                        {!! $works->render() !!}
                    </nav>

                </div>

            </div>

        </div>

@endsection