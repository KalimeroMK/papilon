@extends('layouts.app')
@section('scripts')
    <!-- Google Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB7va0UZbX2kdZmcLseEqlADHNmUf9YOGs&callback=initMap"
            async defer></script>
    <script type="text/javascript" src="/assets/js/maps.js"></script>
@endsection
@section('content')
    <div class="page-body">
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-xs-12">
                <div class="widget">
                    <div class="widget-header bordered-bottom bordered-warning">
                        <span class="widget-caption">Map Module</span>
                    </div>
                    <div class="widget-body">
                        <div id="horizontal-form">
                            <form role="form" method="POST" action="">
                                {!! csrf_field() !!}
                                <div class="form-group">
                                    <input type="text" id="searchmap" class="form-control">
                                    <div id="map-canvas"></div>
                                </div>

                                <div class="form-group">
                                    <label for="lat">Lat: </label>
                                    <input type="text" id="lat" class="form-control" name="lat">
                                </div>
                                <div class="form-group">
                                    <label for="lng">Lng: </label>
                                    <input type="text" id="lng" class="form-control" name="lng">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
