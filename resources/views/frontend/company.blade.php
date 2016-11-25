@extends('ws-app')

@section('content')

<!--start: Row -->

<div class="row">

    <div class="col-md-8">

        <ul class="nav nav-tabs flex-tabs">

            @foreach($company as $company_item)

                <li><a data-toggle="tab" href="#tab{{$company_item->id}}">{{$company_item->getTranslate('title')}}</a></li>

            @endforeach

        </ul>

        <div class="row">

            <div class="col-md-12">

                <div class="tab-content">

                    @foreach($company as $company_item)

                        <div id="tab{{$company_item->id}}" class="tab-pane fade in">

                            <p>
                                @if(count($company_item->getImages()) > 0)
                                    <img class="thumbnail" src="/{{$company_item->getImages()[0]['min']}}" alt="...">
                                @endif
                                    {!! $company_item->getTranslate('description')!!}
                            </p>

                        </div>

                    @endforeach

                </div>

            </div>

        </div>

        <div class="panel panel-default wow fadeInLeft">

            <div class="panel-heading">{{ trans('base.gallery') }}</div>

            <div class="panel-body">

                <div id="flex-gallery-company" style="display:none;">

                    @foreach($gallery as $gallery_item)

                        @foreach($gallery_item->getImages() as $imgSrc)

                            <img alt="" src="/{{ $imgSrc['min'] }}"
                                 data-image="/{{ $imgSrc['full'] }}">

                        @endforeach

                    @endforeach

                </div>

            </div>

        </div>

    </div>

    <div class="col-sm-4 col-md-4">

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
<!-- Example row of columns -->

@endsection