@extends('ws-app')

@section('content')

    <div class="row">

        <div class="col-md-8">

            <div class="panel panel-default wow fadeInDown">

                <div class="panel-body">

                    <div class="col-md-6 map">

                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2524.925238582015!2d25.31572461537181!3d50.73987547951628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x472599ecacee2c15%3A0x40fb686bcd4d789e!2z0LLRg9C70LjRhtGPINCU0YDQsNCz0L7QvNCw0L3QvtCy0LAsIDcsINCb0YPRhtGM0LosINCS0L7Qu9C40L3RgdGM0LrQsCDQvtCx0LvQsNGB0YLRjCwg0KPQutGA0LDQuNC90LAsIDQzMDAw!5e0!3m2!1sru!2sru!4v1479893729392" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>

                    </div>

                    <div class="col-md-6 address-block">

                        <h3>Офіс №1</h3>
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
            <div class="panel panel-default wow fadeInDown">

                <div class="panel-body">

                    <div class="col-md-6 map">

                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2524.925238582015!2d25.31572461537181!3d50.73987547951628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x472599ecacee2c15%3A0x40fb686bcd4d789e!2z0LLRg9C70LjRhtGPINCU0YDQsNCz0L7QvNCw0L3QvtCy0LAsIDcsINCb0YPRhtGM0LosINCS0L7Qu9C40L3RgdGM0LrQsCDQvtCx0LvQsNGB0YLRjCwg0KPQutGA0LDQuNC90LAsIDQzMDAw!5e0!3m2!1sru!2sru!4v1479893729392" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>

                    </div>

                    <div class="col-md-6 address-block">

                        <h3>Офіс №1</h3>
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
            <div class="panel panel-default wow fadeInDown">

                <div class="panel-body">

                    <div class="col-md-6 map">

                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2524.925238582015!2d25.31572461537181!3d50.73987547951628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x472599ecacee2c15%3A0x40fb686bcd4d789e!2z0LLRg9C70LjRhtGPINCU0YDQsNCz0L7QvNCw0L3QvtCy0LAsIDcsINCb0YPRhtGM0LosINCS0L7Qu9C40L3RgdGM0LrQsCDQvtCx0LvQsNGB0YLRjCwg0KPQutGA0LDQuNC90LAsIDQzMDAw!5e0!3m2!1sru!2sru!4v1479893729392" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>

                    </div>

                    <div class="col-md-6 address-block">

                        <h3>Офіс №1</h3>
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

        </div>

        <div class="col-sm-4 col-md-4">

            <div class="panel panel-default wow fadeInDown">

                <div class="panel-heading">Останні вакансії</div>

                <div class="panel-body">

                    <div class="row">

                        <div class="r-block-item">

                            <div class="col-md-12">

                                <h4 class="col-sm-6 col-md-6 text-left r-prof">Зварювальник </h4>

                                <h4 class="col-sm-6 col-md-6 text-right r-price">з/п від 10000грн</h4>

                                <p>Потрібні зварювальники з досвідом роботи для зварювання труб для водопостачання та пожежогасіння.
                                    Роботи по місту Києву. Повне завантаження. Офіційне працевлаштування. Можливе розселення.
                                </p>

                                <a href="#" class="pull-right">Детальніше<i class="fa fa-angle-right fa-lg"></i></a>

                            </div>

                            <hr>

                        </div>

                    </div>

                    <div class="row">

                        <div class="r-block-item">

                            <div class="col-md-12">

                                <h4 class="col-sm-6 col-md-6 text-left r-prof">Архітектор</h4>

                                <h4 class="col-sm-6 col-md-6 text-right r-price">з/п від 15000грн</h4>

                                <p>Будівельна компанія шукає архітектора для співпраці над новим великим та сучасним проектом
                                    житлового комплексу «Scandia». Вимоги: вік від 25−40 років; володіння програмами: ARCHICAD,
                                    AUTOCAD, 3DMAX (Corona, V-Ray)...
                                </p>

                                <a href="#" class="pull-right">Детальніше<i class="fa fa-angle-right fa-lg"></i></a>

                            </div>

                        </div>

                    </div>

                    <p><a class="btn btn-primary btn-lg" style="width: 100%;" href="#" role="button">Всі вакансії</a></p>

                </div>
            </div>


            <div class="panel panel-default wow fadeInUp">
                <div class="panel-heading">Останні новини</div>

                <div class="panel-body">

                    <div class="row">
                        <div class="r-block-item">
                            <div class="col-md-12"><h4>Міжнародний Економічний Форум</h4></div>
                            <div class="col-md-4">
                                <a href="#" class="thumbnail">
                                    <img src="http://www.economtermin.ru/uploads/fotos/2/3/1.jpg" alt="...">
                                </a>
                            </div>

                            <div class="col-md-8">
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
                            <div class="col-md-12"><h4>Збільшення пенсійного віку</h4></div>
                            <div class="col-md-4">
                                <a href="#" class="thumbnail">
                                    <img src="http://www.volynpost.com/img/modules/news/6/78/64cdbd95dff5a702f82bee8dc6cf5786/top-photo.jpg" alt="...">
                                </a>
                            </div>

                            <div class="col-md-8">
                                <p>Пенсійний вік підвищуватимуть поступово, але список професій, які дають право
                                    дострокового виходу на пенсію, суттєво скоротять починаючи з...
                                </p>
                                <a href="#" class="pull-right">Читати повну новину<i class="fa fa-angle-right fa-lg"></i></a>
                            </div>
                        </div>
                    </div>

                    <p><a class="btn btn-primary btn-lg" style="width: 100%;" href="#" role="button">Всі новини</a></p>

                </div>
            </div>

        </div>


    </div>

@endsection