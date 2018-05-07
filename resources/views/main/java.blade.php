<!--section java -->
<div class="outer-about-wrap">
    <div class="about-content-wrap">
        <div id="btnCloseAbout">
            <a href="#">
                <img src="/assets/frontend/images/cancel.png" class="img img-responsive">
            </a>
        </div>
        <div id="btnCloseAboutSmall">
            <a href="#">
                <img src="/assets/frontend/images/cancel.png" class="img img-responsive">
            </a>
        </div>
        <div class="about-content-inside">
            <h2>ЗА НАС</h2>
            <hr>
            <br>
            <p>
                Luxin furniture & decor boutique е продавница за рачно изработени и дизајнирани парчиња мебел и
                внимателно селектирани парчиња декор.
            </p>
            <p>
                Располагаме со сопствено производство и изработка на мебел од високо квалитетни материјали кој може да
                биде направен по ваша нарачка во различни димензии.
            </p>
        </div>
    </div>
</div>

<div class="outer-gallery-wrap">
    <div class="gallery-content-wrap">
        <div id="btnCloseGallery">
            <a href="#">
                <img src="/assets/frontend/images/cancel_white.png" class="img img-responsive">
            </a>
        </div>
        <div id="btnCloseGallerySmall">
            <a href="#">
                <img src="/assets/frontend/images/cancel_white.png" class="img img-responsive">
            </a>
        </div>
        <div class="gallery-content-inside">
            <div class="gallery_slider">
                <div><img src="/assets/frontend/images/gallery/furniture1.jpg" class="img-responsive"></div>
                <div><img src="/assets/frontend/images/gallery/furniture10.jpg" class="img-responsive"></div>
                <div><img src="/assets/frontend/images/gallery/furniture11.jpg" class="img-responsive"></div>
                <div><img src="/assets/frontend/images/gallery/furniture12.jpg" class="img-responsive"></div>
                <div><img src="/assets/frontend/images/gallery/furniture13.jpg" class="img-responsive"></div>
                <div><img src="/assets/frontend/images/gallery/furniture14.jpg" class="img-responsive"></div>
                <div><img src="/assets/frontend/images/gallery/furniture15.jpg" class="img-responsive"></div>
                <div><img src="/assets/frontend/images/gallery/furniture16.jpg" class="img-responsive"></div>
                <div><img src="/assets/frontend/images/gallery/furniture2.jpg" class="img-responsive"></div>
                <div><img src="/assets/frontend/images/gallery/furniture3.jpg" class="img-responsive"></div>
                <div><img src="/assets/frontend/images/gallery/furniture4.jpg" class="img-responsive"></div>
                <div><img src="/assets/frontend/images/gallery/furniture5.jpg" class="img-responsive"></div>
                <div><img src="/assets/frontend/images/gallery/furniture6.jpg" class="img-responsive"></div>
                <div><img src="/assets/frontend/images/gallery/furniture7.jpg" class="img-responsive"></div>
                <div><img src="/assets/frontend/images/gallery/furniture8.jpg" class="img-responsive"></div>
                <div><img src="/assets/frontend/images/gallery/furniture9.jpg" class="img-responsive"></div>
            </div>
        </div>
    </div>
</div>

<div class="outer-contact-wrap">
    <div class="contact-content-wrap">
        <div id="btnCloseContact">
            <a href="#">
                <img src="/assets/frontend/images/cancel.png" class="img img-responsive">
            </a>
        </div>
        <div id="btnCloseContactSmall">
            <a href="#">
                <img src="/assets/frontend/images/cancel.png" class="img img-responsive">
            </a>
        </div>
        <div class="contact-content-inside">
            <h2>КОНТАКТ</h2>
            <hr>
            <br>
            <p>
                02 206 1150
            </p>
            <p>
                <a href="mailto:contact@luxin.mk" style="color:black;">contact@luxin.mk</a>
            </p>
            <p>
                Ул. Костурски Херои бр.3 локал 1
            </p>
            <p><i class="fa fa-facebook" aria-hidden="true"></i> <i class="fa fa-instagram" aria-hidden="true"></i></p>
            <div class="mapa">
                <div id="map"></div>
                <script>

                    function initMap() {
                        var myLatLng = {lat: 42.001516618636714, lng: 21.418895045824456};

                        var map = new google.maps.Map(document.getElementById('map'), {
                            zoom: 15,
                            center: myLatLng,
                            draggable: false,
                            styles: [
                            {
                                "featureType": "all",
                                "elementType": "labels.text.fill",
                                "stylers": [
                                {
                                    "saturation": 36
                                },
                                {
                                    "color": "#ffffff"
                                },
                                {
                                    "lightness": 40
                                }
                                ]
                            },
                            {
                                "featureType": "all",
                                "elementType": "labels.text.stroke",
                                "stylers": [
                                {
                                    "visibility": "off"
                                },
                                {
                                    "color": "#000000"
                                },
                                {
                                    "lightness": 16
                                }
                                ]
                            },
                            {
                                "featureType": "all",
                                "elementType": "labels.icon",
                                "stylers": [
                                {
                                    "visibility": "off"
                                }
                                ]
                            },
                            {
                                "featureType": "administrative",
                                "elementType": "geometry.fill",
                                "stylers": [
                                {
                                    "color": "#c0c0c0"
                                },
                                {
                                    "lightness": 20
                                },
                                {
                                    "visibility": "on"
                                }
                                ]
                            },
                            {
                                "featureType": "administrative",
                                "elementType": "geometry.stroke",
                                "stylers": [
                                {
                                    "color": "#000000"
                                },
                                {
                                    "lightness": 17
                                },
                                {
                                    "weight": 1.2
                                },
                                {
                                    "visibility": "off"
                                }
                                ]
                            },
                            {
                                "featureType": "landscape",
                                "elementType": "geometry",
                                "stylers": [
                                {
                                    "color": "#000000"
                                },
                                {
                                    "lightness": 20
                                }
                                ]
                            },
                            {
                                "featureType": "landscape",
                                "elementType": "geometry.fill",
                                "stylers": [
                                {
                                    "color": "#3f3f3f"
                                }
                                ]
                            },
                            {
                                "featureType": "landscape",
                                "elementType": "geometry.stroke",
                                "stylers": [
                                {
                                    "visibility": "off"
                                }
                                ]
                            },
                            {
                                "featureType": "landscape.man_made",
                                "elementType": "geometry.fill",
                                "stylers": [
                                {
                                    "color": "#333333"
                                },
                                {
                                    "visibility": "on"
                                },
                                {
                                    "saturation": "0"
                                },
                                {
                                    "lightness": "0"
                                },
                                {
                                    "gamma": "1.00"
                                }
                                ]
                            },
                            {
                                "featureType": "landscape.man_made",
                                "elementType": "geometry.stroke",
                                "stylers": [
                                {
                                    "visibility": "off"
                                }
                                ]
                            },
                            {
                                "featureType": "landscape.natural",
                                "elementType": "geometry.fill",
                                "stylers": [
                                {
                                    "color": "#2b2b2b"
                                },
                                {
                                    "visibility": "on"
                                },
                                {
                                    "gamma": "1"
                                },
                                {
                                    "lightness": "0"
                                },
                                {
                                    "saturation": "0"
                                }
                                ]
                            },
                            {
                                "featureType": "landscape.natural",
                                "elementType": "geometry.stroke",
                                "stylers": [
                                {
                                    "visibility": "off"
                                }
                                ]
                            },
                            {
                                "featureType": "landscape.natural.landcover",
                                "elementType": "geometry.fill",
                                "stylers": [
                                {
                                    "visibility": "off"
                                },
                                {
                                    "color": "#ff0000"
                                }
                                ]
                            },
                            {
                                "featureType": "landscape.natural.landcover",
                                "elementType": "geometry.stroke",
                                "stylers": [
                                {
                                    "visibility": "off"
                                }
                                ]
                            },
                            {
                                "featureType": "landscape.natural.terrain",
                                "elementType": "geometry.fill",
                                "stylers": [
                                {
                                    "visibility": "on"
                                },
                                {
                                    "color": "#222222"
                                }
                                ]
                            },
                            {
                                "featureType": "landscape.natural.terrain",
                                "elementType": "geometry.stroke",
                                "stylers": [
                                {
                                    "visibility": "off"
                                }
                                ]
                            },
                            {
                                "featureType": "poi",
                                "elementType": "geometry",
                                "stylers": [
                                {
                                    "color": "#000000"
                                },
                                {
                                    "lightness": 21
                                }
                                ]
                            },
                            {
                                "featureType": "poi",
                                "elementType": "geometry.fill",
                                "stylers": [
                                {
                                    "color": "#4a4a4a"
                                },
                                {
                                    "visibility": "on"
                                }
                                ]
                            },
                            {
                                "featureType": "road.highway",
                                "elementType": "geometry.fill",
                                "stylers": [
                                {
                                    "color": "#ac9455"
                                },
                                {
                                    "lightness": "0"
                                },
                                {
                                    "gamma": "1.00"
                                }
                                ]
                            },
                            {
                                "featureType": "road.highway",
                                "elementType": "geometry.stroke",
                                "stylers": [
                                {
                                    "color": "#000000"
                                },
                                {
                                    "lightness": 29
                                },
                                {
                                    "weight": 0.2
                                }
                                ]
                            },
                            {
                                "featureType": "road.arterial",
                                "elementType": "geometry",
                                "stylers": [
                                {
                                    "color": "#ac9455"
                                },
                                {
                                    "lightness": "0"
                                }
                                ]
                            },
                            {
                                "featureType": "road.arterial",
                                "elementType": "geometry.fill",
                                "stylers": [
                                {
                                    "color": "#ac9455"
                                }
                                ]
                            },
                            {
                                "featureType": "road.arterial",
                                "elementType": "geometry.stroke",
                                "stylers": [
                                {
                                    "visibility": "off"
                                }
                                ]
                            },
                            {
                                "featureType": "road.local",
                                "elementType": "geometry",
                                "stylers": [
                                {
                                    "color": "#000000"
                                },
                                {
                                    "lightness": 16
                                }
                                ]
                            },
                            {
                                "featureType": "road.local",
                                "elementType": "geometry.fill",
                                "stylers": [
                                {
                                    "color": "#222222"
                                }
                                ]
                            },
                            {
                                "featureType": "road.local",
                                "elementType": "geometry.stroke",
                                "stylers": [
                                {
                                    "visibility": "off"
                                }
                                ]
                            },
                            {
                                "featureType": "transit",
                                "elementType": "geometry",
                                "stylers": [
                                {
                                    "color": "#000000"
                                },
                                {
                                    "lightness": 19
                                }
                                ]
                            },
                            {
                                "featureType": "water",
                                "elementType": "geometry",
                                "stylers": [
                                {
                                    "color": "#000000"
                                },
                                {
                                    "lightness": 17
                                }
                                ]
                            },
                            {
                                "featureType": "water",
                                "elementType": "geometry.fill",
                                "stylers": [
                                {
                                    "color": "#1a1a1a"
                                }
                                ]
                            }
                            ]
                        });

var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: 'Hello World!'
});
}
</script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAE3C3uc2eYaLP06AufFlVDa5owcn_Yd8w&callback=initMap"></script>
</div>
<p class="copyright">Copyright &copy; 2017 Luxin</p>
<p class="copyright">Developed by <a href="http://digitalpresent.mk" target="_blank"
 style="color: black; text-decoration:none;">Digital Present</a></p>
</div>
</div>
</div>
<footer navbar-fixed-bottom">
    <!-- section catogory list end -->
    <div class="container-fluid">
        <div class="row">
            <div class="footer-bottom">
                <p id="btnAbout"><a href="#">За Нас</a></p>
            </div>
            <div class="footer-bottom">
                <p id="btnGallery"><a href="#">Галерија</a></p>
            </div>
            <div class="footer-bottom">
                <p id="btnContact"><a href="#">Контакт</a></p>
            </div>
        </div>
    </div>
</footer>
</div>

<!--end section java-->