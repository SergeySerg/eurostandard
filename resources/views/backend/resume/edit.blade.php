@extends('adminpanel')

@section('breadcrumbs')
    <li>
        <i class="icon-home home-icon"></i>
        <a href="{{ $url }}">Головна</a>
        <span class="divider">
            <i class="icon-angle-right arrow-icon"></i>
        </span>
    </li>

    <li>
        <a href="#">Резюме</a>

        <span class="divider">
            <i class="icon-angle-right arrow-icon"></i>
        </span>
    </li>


    @if(isset($admin_resume))
        <li class="active">{{$admin_resume->id}}</li>
    @endif
@stop

@section('content')

    <div class="page-content">
        <div class="page-header position-relative">
            <h1>
                Детальний перегляд резюме
            </h1>

        </div><!--/.page-header-->

        <div class="row-fluid">
            <div class="span12">
                <!--PAGE CONTENT BEGINS-->

                <form class="form-horizontal" />

                    <div class="control-group">
                        <label class="control-label" for="form-field-3">ПІП</label>

                        <div class="controls">
                            <input type="text" name="name"  @if(isset($admin_resume)) value='{{$admin_resume->name}}' @endif id="form-field-3" placeholder="Прізвище,ім'я по батькові" />
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="id-date-picker-1">Дата народження</label>
                        <div class="controls">
                            <div class="row-fluid input-append">
                                <input class="span2 date-picker" name="date_birthday" id="id-date-picker-1" type="text" data-date-format="dd-mm-yyyy" @if(isset($admin_resume)) value='{{date('d-m-Y',strtotime($admin_resume->date_birthday))}}' @endif/>
                                            <span class="add-on">
                                                <i class="icon-calendar"></i>
                                           </span>
                            </div>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="form-field-4">Адреса проживання</label>

                        <div class="controls">
                            <input type="text" name="home"  @if(isset($admin_resume)) value='{{$admin_resume->home}}' @endif id="form-field-4" placeholder="Місце народження" />
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="form-field-9">Мобільній телефон</label>

                        <div class="controls">
                            <input type="text" name="telephone"  @if(isset($admin_resume)) value='{{$admin_resume->telephone}}' @endif id="form-field-9" placeholder="Мобільній телефон" />
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="form-field-10">Домашній телефон</label>

                        <div class="controls">
                            <input type="text" name="home_telephone"  @if(isset($admin_resume)) value='{{$admin_resume->home_telephone}}' @endif id="form-field-10" placeholder="Домашній телефон" />
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="form-field-5">Освіта</label>

                        <div class="controls">
                            <input type="text" name="education"  @if(isset($admin_resume)) value='{{$admin_resume->education}}' @endif id="form-field-5" placeholder="Освіта" />
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="form-field-6">Спеціальність</label>

                        <div class="controls">
                            <input type="text" name="specialty"  @if(isset($admin_resume)) value='{{$admin_resume->specialty}}' @endif id="form-field-6" placeholder="Основна діяльність" />
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="form-field-7">Досвід роботи</label>

                        <div class="controls">
                            <input type="text" name="experience"  @if(isset($admin_resume)) value='{{$admin_resume->experience}}' @endif id="form-field-7" placeholder="Досвід роботи" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="form-field-11">Володіння електроінструментом</label>

                        <div class="controls">
                            <input type="text" name="possession"  @if(isset($admin_resume)) value='{{$admin_resume->possession}}' @endif id="form-field-11" placeholder="Володіння електроінструментом" />
                    </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="form-field-8">Бажаний рівень ЗП</label>

                        <div class="controls">
                            <input type="text" name="salary"  @if(isset($admin_resume)) value='{{$admin_resume->salary}}' @endif id="form-field-8" placeholder="Бажаний рівень ЗП" />
                        </div>
                    </div>



                    <div class="form-actions">
                        <a href='{{ $url }}/resume'>
                            <div class="btn btn-info">Повернутися до списку всіх резюме</div>
                        </a>
                    </div>
                    <div class="space-4"></div>

                </form>
                    <!--PAGE CONTENT ENDS-->
            </div>   <!--/.span-->
        </div><!--/.row-fluid-->
    </div><!--/.page-content-->
        <div id="token" style="display: none">{{csrf_token()}}</div>
@stop

