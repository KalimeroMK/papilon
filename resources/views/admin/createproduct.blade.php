@extends('layouts.app')
@section('content')

    <div class="page-body">
        <div class="row">
            <div class="col-lg-offset-1 col-sm-offset-1 col-lg-10 col-sm-12 col-xs-12">
                @if(Session::has('flash_message'))
                    <div class="alert alert-success">
                        {{ Session::get('flash_message') }}
                    </div>
                @endif
                <div class="widget-header bordered-bottom bordered-warning">
                    <span class="widget-caption">Add product</span>
                </div>
                <div class="widget-body">
                    <div id="horizontal-form">
                        {{ Form::model('product', array('route' => array('admin.product.store'), 'method' => 'POST', 'files'=>true)) }}
                        {!! csrf_field() !!}
                        <div class="input-group{{ $errors->has('image') ? ' has-error' : '' }}">
                           <span class="input-group-btn">
                            <span class="btn btn-info shiny btn-file">
                             <i class="btn-label fa fa-image"> </i> Browse... <input type="file" name="image">
                         </span>
                     </span>
                            <input type="text" class="form-control" readonly="">
                        </div>
                        <br/>
                        @if ($errors->has('image')) <p
                                class="alert alert-danger">{{ $errors->first('image') }}</p> @endif
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" placeholder="Title" name="title">
                        </div>

                        @if ($errors->has('title')) <p
                                class="alert alert-danger">{{ $errors->first('title') }}</p> @endif
                        <div class="form-group">
                            <label for="category">Category</label>

                            <select name="category" id="category" class="form-control">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">@for ($i = 0; $i < $category->depth; $i++)
                                            - @endfor {{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        @if ($errors->has('category')) <p
                                class="alert alert-danger">{{ $errors->first('category') }}</p> @endif
                        <div class="form-group">
                            <label for="description">Product description</label>
                            <textarea class="ckeditor" id="elm3" name="description"></textarea>
                        </div>
                        @if ($errors->has('description')) <p
                                class="alert alert-danger">{{ $errors->first('description') }}</p> @endif
                        <div class="form-group">
                            <label for="hotelinfo">Hotel info</label>
                            <input type="text" class="form-control"
                                   placeholder="Детски базен, тераса, балкон, рецепција,Детски базен, тераса, балкон, рецепциј..."
                                   name="hotelinfo">
                        </div>
                        @if ($errors->has('hotelinfo')) <p
                                class="alert alert-danger">{{ $errors->first('hotelinfo') }}</p> @endif

                        <label for="roominfo">Room info</label>
                        <input type="text" class="form-control"
                               placeholder="Тераса, клима, фрижидер, Кујна, бања," name="roominfo">
                        @if ($errors->has('roominfo'))
                            <p class="alert alert-danger">{{ $errors->first('roominfo') }}</p> @endif
                        <label for="price">Price</label>
                        <textarea class="ckeditor" id="price" name="price"></textarea>
                        @if ($errors->has('price'))
                            <p class="alert alert-danger">{{ $errors->first('price') }}</p> @endif
                        <div class="form-group">
                            <label for="location">Location</label>
                            <input type="text" class="form-control" placeholder="50 метри од плажа" name="location">
                            @if ($errors->has('description')) <p
                                    class="alert alert-danger">{{ $errors->first('description') }}</p> @endif
                            <label for="taksa">Turistucka taksa</label>
                            <input type="text" class="form-control"
                                   placeholder="Цена на туристицка такса..."
                                   name="taksa">
                        </div>
                        @if ($errors->has('taksa')) <p
                                class="alert alert-danger">{{ $errors->first('taksa') }}</p> @endif
                        <br>
                        <div class="form-group">
                            <input type="text" id="searchmap" class="form-control">
                            <div id="map-canvas"></div>
                        </div>

                        <div class="form-group">
                            <label for="user">User</label>
                            <select name="user_id" id="user" class="form-control">
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}"
                                            @if(Auth::user()->id == $user->id) selected @endif >{{ $user->name }}</option>
                                @endforeach

                            </select>
                        </div>
                        <div class="form-group">
                            <label>Workflow: </label>
                            @foreach($workflows as $workflow)
                                <label>
                                    <input name="workflow_id" type="radio"
                                           class="form-control {{ $workflow->color }}" value="{{ $workflow->id }}"
                                           @if($workflow->id  == 1) checked @endif>
                                    <span class="text"> {{ $workflow->name }}</span>
                                </label>
                            @endforeach
                        </div>
                        <!-- Hidden inputs -->
                        <input type="hidden" name="creator" value="{{ Auth::user()->id  }}">
                        <input type="hidden" id="lat" class="form-control" name="lat">
                        <input type="hidden" id="lng" class="form-control" name="lng">
                        <button type="submit" class="btn btn-labeled shiny btn-warning btn-large"><i
                                    class="btn-label fa fa-plus"></i> Create
                        </button>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div><!--zavrsuva widget -->
        </div>
    </div>
    </div>
@endsection
@section('scripts')
    <!-- Google Maps -->
    <script type="text/javascript"
            src="http://maps.googleapis.com/maps/api/js?sensor=false&libraries=places&key=AIzaSyA75bnzyJ_5j2Ger9Erjo1Q-0XucnZbst4"></script>
    <script type="text/javascript" src="/assets/js/maps.js"></script>
@endsection