<!--====== Javascripts & Jquery ======-->
<script src="{{ asset('templates/campusdigital/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('templates/campusdigital/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('templates/campusdigital/js/jquery.slicknav.min.js') }}"></script>
<script src="{{ asset('templates/campusdigital/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('templates/campusdigital/js/jquery-ui.min.js') }}"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
AOS.init({
   once: true
})
</script>
<script src="{{ asset('templates/campusdigital/js/main.js') }}"></script>
<!-- <script type="text/javascript">
$(document).ready(function() {
   $(window).scroll(function() {    
       var scroll = $(window).scrollTop();

        //>=, not <=
       if (scroll >= 100) {
           //clearHeader, not clearheader - caps H
           $(".navbar").addClass("shrink");
       } else {
         $(".navbar").removeClass("shrink");
       }

   });
});
</script> -->