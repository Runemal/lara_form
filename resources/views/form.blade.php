@extends('layouts.app')

{{--@section('content')--}}
{{--    <div id="app">--}}
{{--        <div class="row">--}}
{{--            <div class="col-6 mx-auto">--}}
{{--                <div class="card">--}}
{{--                    <div class="card-header">--}}
{{--                        <h2>Форма обратной связи</h2>--}}
{{--                    </div>--}}
{{--                    <div class="card-body">--}}
{{--                        <contact-form></contact-form>--}}

{{--                            <form>--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="name">Имя</label>--}}
{{--                                    <input type="text" class="form-control" name="name" id="name" />--}}
{{--                                </div>--}}

{{--                                <div class="form-group">--}}
{{--                                    <label for="email">E-mail</label>--}}
{{--                                    <input type="email" class="form-control" name="email" id="email" />--}}
{{--                                </div>--}}

{{--                                <div class="form-group">--}}
{{--                                    <label for="message">Сообщение</label>--}}
{{--                                    <textarea class="form-control" name="message" id="message" rows="5"></textarea>--}}
{{--                                </div>--}}

{{--                                <button type="submit" class="btn btn-primary">Отправить</button>--}}
{{--                            </form>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endsection--}}


@section('content')
    <div id="app">
        <div class="row">
            <div class="col-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h2>Форма обратной связи</h2>
                    </div>
                    <div class="card-body">

                        {!! Form::open(['route' => 'submit']) !!}

                        {!! Form::label('userName', 'Ваше имя', ['class' => 'form-label']) !!}

                        <div class="form-group">
                            {!! Form::text('userName', '', ['class' => 'form-control']) !!}
                        </div>

                        {!! Form::label('telNumber', 'Номер телефона', ['class' => 'form-label']) !!}

                        <div class="form-group">
                            {!! Form::tel('telNumber', '', ['class' => 'form-control']) !!}
                        </div>

                        {!! Form::label('userMessage', 'Сообщение', ['class' => 'form-label']) !!}

                        <div class="form-group">
                            {!! Form::textarea('userMessage', '', ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::submit("Отправить", ['class' => 'btn btn-success']) !!}

                        </div>

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


