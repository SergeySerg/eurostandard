@extends('ws-app')

@section('content')

    <div class="row">

        <div class="col-md-8">

            <ul class="nav nav-tabs">

                <li class="active"><a data-toggle="tab" href="#tab1">{{ trans('base.resume.makeresume') }}</a></li>

                <li><a data-toggle="tab" href="#tab2">{{ trans('base.resume.sendresume') }}</a></li>

            </ul>

            <div class="row">

                <div class="col-md-12">

                    <div class="tab-content">

                        <div id="tab1" class="tab-pane fade in active">

                            <form method="post" id="resume-form" class="r-form" action="">

                                <div class="clearfix">
                                    <label for="name"><h4>{{ trans('base.resume.name') }}</h4></label>
                                    <input id="name" type="text" name="name" required="required" class="form-control" aria-describedby="sizing-addon2">
                                </div>

                                <div class="clearfix">
                                    <label for="birth"><h4>{{ trans('base.resume.birth') }}</h4></label>
                                    <input id="birth" type="date" name="date_birthday" class="form-control" aria-describedby="sizing-addon2">
                                </div>

                                <div class="clearfix">
                                    <label for="address"><h4>{{ trans('base.resume.address') }}</h4></label>
                                    <input id="address" type="text" name="home" class="form-control" aria-describedby="sizing-addon2">
                                </div>

                                <div class="clearfix">
                                    <label for="mobile"><h4>{{ trans('base.resume.mobile') }}</h4></label>
                                    <input id="mobile" type="number" required="required" name="telephone" class="form-control" aria-describedby="sizing-addon2">
                                </div>

                                <div class="clearfix">
                                    <label for="homephone"><h4>{{ trans('base.resume.homephone') }}</h4></label>
                                    <input id="homephone" type="number" name="home_telephone" class="form-control" aria-describedby="sizing-addon2">
                                </div>

                                <div class="clearfix">
                                    <label for="education"><h4>{{ trans('base.resume.education') }}</h4></label>
                                    <textarea id="education" name="education" rows="5" class="form-control" aria-describedby="sizing-addon2"></textarea>
                                </div>

                                <div class="clearfix">
                                    <label for="profession"><h4>{{ trans('base.resume.profession') }}</h4></label>
                                    <input id="specialty" type="text" name="specialty" class="form-control" aria-describedby="sizing-addon2">
                                </div>

                                <div class="clearfix">
                                    <label for="experience"><h4>{{ trans('base.resume.experience') }}<br><sub>{{ trans('base.resume.experiencedescribe') }}</sub></h4></label>
                                    <textarea id="experience" name="experience" rows="5" class="form-control" aria-describedby="sizing-addon2"></textarea>
                                </div>

                                <div class="clearfix">
                                    <label for="tool"><h4>{{ trans('base.resume.tool') }}</h4></label>
                                    <input id="tool" type="text" name="possession" class="form-control" aria-describedby="sizing-addon2">
                                </div>

                                <div class="clearfix">
                                    <label for="salary"><h4>{{ trans('base.resume.salary') }}</h4></label>
                                    <input id="salary" type="text" name="salary" class="form-control" aria-describedby="sizing-addon2">
                                </div>

                                <input type="submit" value="{{ trans('base.send') }}" id = "resume-send" class="btn btn-primary btn-lg" style="width: 100%;" href="#" role="button">
                                <input type="hidden" name="_method" value='post'/>
                                <input type="hidden" name="_token" value="{{csrf_token()}}"/>

                            </form>

                        </div>

                        <div id="tab2" class="tab-pane fade">

                            <form method="post" id="resume-form-file"  class="r-form" action="">

                                <div class="clearfix">
                                    <label for="name"><h4>{{ trans('base.resume.name') }}</h4></label>
                                    <input id="name" type="text" name="name" required="required" class="form-control" aria-describedby="sizing-addon2">
                                </div>

                                <div class="clearfix">
                                    <label for="mobile"><h4>{{ trans('base.resume.mobile') }}</h4></label>
                                    <input id="mobile" type="number" required="required" name="telephone" class="form-control" aria-describedby="sizing-addon2">
                                </div>

                                <div class="clearfix">
                                    <label for="file"><h4>{{ trans('base.resume.file') }}</h4></label>
                                    <input id="file" accept="doc,xls,zip" type="file" name="files" class="form-control" aria-describedby="sizing-addon2">
                                </div>



                                <input type="submit" value="{{ trans('base.send') }}" id = "resume-send-file" class="btn btn-primary btn-lg" href="#" role="button">

                                <input type="hidden" name="_token" value="{{csrf_token()}}"/>

                            </form>

                            <form action="upload" id="upload" enctype="multipart/form-data">
                                <div class="clearfix">
                                    <label for="name"><h4>{{ trans('base.resume.name') }}</h4></label>
                                    <input id="name" type="text" name="name" required="required" class="form-control" aria-describedby="sizing-addon2">
                                </div>

                                <div class="clearfix">
                                    <label for="mobile"><h4>{{ trans('base.resume.mobile') }}</h4></label>
                                    <input id="mobile" accept="doc" type="number" required="required" name="telephone" class="form-control" aria-describedby="sizing-addon2">
                                </div>
                                <input type="file" name="files[]"><br />
                                <input type="hidden" name="_token" value="{{ csrf_token()}}">
                                <input type="submit">

                            </form>
                            <div id="message"></div>

                            <script>
                                var form = document.getElementById('upload');
                                var request = new XMLHttpRequest();

                                form.addEventListener('submit', function(e){
                                    e.preventDefault();
                                    var formdata = new FormData(form);

                                    request.open('post', 'upload');
                                    request.addEventListener("load", transferComplete);
                                    request.send(formdata);

                                });

                                function transferComplete(data){
                                    response = JSON.parse(data.currentTarget.response);
                                    if(response.success){
                                        document.getElementById('message').innerHTML = "Резюме успішно відправлено!";
                                    }
                                }
                            </script>
                        </div>

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