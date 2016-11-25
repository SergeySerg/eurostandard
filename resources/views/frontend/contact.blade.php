@extends('ws-app')

@section('content')

    <div class="row">

        <div class="col-md-8">

            <div class="panel panel-default wow fadeInDown">

                <div class="panel-body">

                    <div class="col-md-6 map">

                        {!! $texts->get('contact.map_ukraine') !!}

                    </div>

                    <div class="col-md-6 address-block">

                        <h3>{{ trans('base.ukraine_office') }}</h3>

                        <i class="fa fa-phone fa-3x" aria-hidden="true"></i>

                        <ul class="phone">
                            <li>{{  $texts->get('header.tel1') }}</li>
                            <li>{{  $texts->get('header.tel2') }}</li>
                        </ul>

                        <br>

                        <i class="fa fa-envelope fa-3x" aria-hidden="true"></i>

                        <ul class="phone">
                            <li>{{  $texts->get('contact.email_ukraine_1') }}</li>
                            <li>{{  $texts->get('contact.email_ukraine_2') }}</li>
                        </ul>

                        <br>

                        <i class="fa fa-map-marker fa-3x" aria-hidden="true"></i>

                        <ul class="phone address">
                            <li>{{  $texts->get('header.address') }}</li>
                        </ul>

                    </div>

                </div>

            </div>

            <div class="panel panel-default wow fadeInDown">

                <div class="panel-body">

                    <div class="col-md-6 map">

                        {!! $texts->get('contact.map_poland_1') !!}

                    </div>

                    <div class="col-md-6 address-block">

                        <h3>{{ trans('base.poland_office_1') }}</h3>

                        <i class="fa fa-phone fa-3x" aria-hidden="true"></i>

                        <ul class="phone">
                            <li>{{  $texts->get('contact.poland_phone_1') }}</li>
                            <li>{{  $texts->get('contact.poland_phone_2') }}</li>
                        </ul>

                        <br>

                        <i class="fa fa-envelope fa-3x" aria-hidden="true"></i>

                        <ul class="phone">
                            <li>{{  $texts->get('contact.email_poland_1') }}</li>
                            <li>{{  $texts->get('contact.email_poland_2') }}</li>
                        </ul>

                        <br>

                        <i class="fa fa-map-marker fa-3x" aria-hidden="true"></i>

                        <ul class="phone address">
                            <li>{{  $texts->get('header.address_poland') }}</li>
                        </ul>

                    </div>

                </div>

            </div>

            <div class="panel panel-default wow fadeInDown">

                <div class="panel-body">

                    <div class="col-md-6 map">

                        {!! $texts->get('contact.map_poland_2') !!}

                    </div>

                    <div class="col-md-6 address-block">

                        <h3>{{ trans('base.poland_office_2') }}</h3>

                        <i class="fa fa-phone fa-3x" aria-hidden="true"></i>

                        <ul class="phone">
                            <li>{{  $texts->get('contact.poland_phone_3') }}</li>
                            <li>{{  $texts->get('contact.poland_phone_4') }}</li>
                        </ul>

                        <br>

                        <i class="fa fa-envelope fa-3x" aria-hidden="true"></i>

                        <ul class="phone">
                            <li>{{  $texts->get('contact.email_poland_3') }}</li>
                            <li>{{  $texts->get('contact.email_poland_4') }}</li>
                        </ul>

                        <br>

                        <i class="fa fa-map-marker fa-3x" aria-hidden="true"></i>

                        <ul class="phone address">
                            <li>{{  $texts->get('header.address_poland_2') }}</li>
                        </ul>

                    </div>

                </div>

            </div>

{{--
            <div class="panel panel-default wow fadeInDown">

                <div class="panel-body">

                    <div class="col-md-6 map">

                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2524.925238582015!2d25.31572461537181!3d50.73987547951628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x472599ecacee2c15%3A0x40fb686bcd4d789e!2z0LLRg9C70LjRhtGPINCU0YDQsNCz0L7QvNCw0L3QvtCy0LAsIDcsINCb0YPRhtGM0LosINCS0L7Qu9C40L3RgdGM0LrQsCDQvtCx0LvQsNGB0YLRjCwg0KPQutGA0LDQuNC90LAsIDQzMDAw!5e0!3m2!1sru!2sru!4v1479893729392" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>

                    </div>

                    <div class="col-md-6 address-block">

                        <h3>{{ trans('base.poland_office_1') }}</h3>
                        <i class="fa fa-phone fa-3x" aria-hidden="true"></i>
                        <ul class="phone">
                            <li>{{  $texts->get('header.tel1') }}</li>
                            <li>{{  $texts->get('header.tel2') }}</li>
                        </ul>
                        <br>
                        <i class="fa fa-envelope fa-3x" aria-hidden="true"></i>
                        <ul class="phone">
                            <li>{{  $texts->get('contact.email_ukraine_1') }}</li>
                            <li>{{  $texts->get('contact.email_ukraine_2') }}</li>
                        </ul>

                        <br>
                        <i class="fa fa-map-marker fa-3x" aria-hidden="true"></i>
                        <ul class="phone address">
                            <li>{{  $texts->get('header.address') }}</li>
                        </ul>

                    </div>

                </div>

            </div>
            <div class="panel panel-default wow fadeInDown">

                <div class="panel-body">

                    <div class="col-md-6 map">

                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2524.925238582015!2d25.31572461537181!3d50.73987547951628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x472599ecacee2c15%3A0x40fb686bcd4d789e!2z0LLRg9C70LjRhtGPINCU0YDQsNCz0L7QvNCw0L3QvtCy0LAsIDcsINCb0YPRhtGM0LosINCS0L7Qu9C40L3RgdGM0LrQsCDQvtCx0LvQsNGB0YLRjCwg0KPQutGA0LDQuNC90LAsIDQzMDAw!5e0!3m2!1sru!2sru!4v1479893729392" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>

                    </div>

                    <div class="col-md-6 address-block">

                        <h3>{{ trans('base.poland_office_2') }}</h3>
                        <i class="fa fa-phone fa-3x" aria-hidden="true"></i>
                        <ul class="phone">
                            <li>{{  $texts->get('header.tel1') }}</li>
                            <li>{{  $texts->get('header.tel2') }}</li>
                        </ul>
                        <br>
                        <i class="fa fa-envelope fa-3x" aria-hidden="true"></i>
                        <ul class="phone">
                            <li>info&#064;eustandard.com.ua</li>
                            <li>admin&#064;eustandard.com.ua</li>
                        </ul>

                        <br>
                        <i class="fa fa-map-marker fa-3x" aria-hidden="true"></i>
                        <ul class="phone address">
                            <li>{{  $texts->get('header.address') }}</li>
                        </ul>

                    </div>

                </div>

            </div>
--}}

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

@endsection