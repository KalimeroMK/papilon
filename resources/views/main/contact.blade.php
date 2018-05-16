@extends('layouts.single')
@include('layouts.menu')
@section('content')
    <!--start-contact-->
    <div class="contact-content">
        <div class="container">

            <div class="contact-heading wow fadeInUp animated" data-wow-delay=".5s">
                <h3>Контакт</h3>
            </div>

            <div class="map wow fadeInUp animated" data-wow-delay=".5s">

                <iframe width="300" height="170" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                        src="https://maps.google.com/maps?q={{ $settings->lat }},{{ $settings->lng }}&hl=es;z=14&amp;output=embed"></iframe>


            </div>

            @if(Session::has('flash_message'))
                <div class="alert alert-success">
                    {{ Session::get('flash_message') }}
                </div>
            @endif

            {!! Form::open(['route'=>'contactus.store']) !!}


            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                {!! Form::label('Name:') !!}
                {!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Enter Name']) !!}
                <span class="text-danger">{{ $errors->first('name') }}</span>
            </div>


            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                {!! Form::label('Email:') !!}
                {!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Enter Email']) !!}
                <span class="text-danger">{{ $errors->first('email') }}</span>
            </div>


            <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
                {!! Form::label('Message:') !!}
                {!! Form::textarea('message', old('message'), ['class'=>'form-control', 'placeholder'=>'Enter Message']) !!}
                <span class="text-danger">{{ $errors->first('message') }}</span>
            </div>


            <div class="form-group">
                <button class="btn btn-success">Contact US!</button>
            </div>


            {!! Form::close() !!}



            </div>

        </div>
    </div>
    @include('main.footer')
@endsection



