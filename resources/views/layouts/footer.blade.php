 <!-- Footer -->
 <div class="col-md-12 py-4" id="footer">
  <footer class="container my-3">
    <div class="row">
      <div class="col-md-5">
        <h5 class="text-white font-weight-lighter" >Контакт информации</h5>

        <ul class="list-unstyled">
          <li><a href="callto:{{ $settings->phone }}"> <i class="fa fa-phone"> </i>{{ $settings->phone }}</a></li>
          <li> <a href="mailto:{{$settings->email}}"><i class="fa fa-envelope"> </i>{{$settings->email}}</a></li>
          <li><a href=""> <i class="fa fa-map-marker"> </i>{{ $settings->address }}</a></li>
        </ul>

      </div>
      <div class="col-md-4">

        <h5 class="text-white font-weight-lighter" >Најпопуларни дестинации</h5>
        <ul class="list-unstyled">
          <li><a href="/product/agrabella-3">Agrabella 3*</a></li>

          <li><a href="/product/candia-park-village-4">Candia Park Village 4*</a></li>

          <li><a href="/product/oias-sunset-2">Oia’s Sunset 2*</a></li>

        </ul>

      </div>
      <div class="col-md-3">

       <h5 class="text-white font-weight-lighter" >Следи не</h5>
       <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fpg%2FPapillonTA%2Fabout%2F%3Fref%3Dpage_internal&tabs&width=340&height=154&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="154" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
     </div>

     <div class="col-md-12 copyright text-center my-2">
      <p class="font-size-small">&copy;<a href="{{$settings->mainurl}}">{{$settings->title}}</a></p>
    </div>
  </footer>
  <!-- Footer end -->
</div>