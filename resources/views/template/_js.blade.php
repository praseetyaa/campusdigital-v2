<!--====== Javascripts & Jquery ======-->
<script src="{{ asset('templates/loans2go/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('templates/loans2go/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('templates/loans2go/js/jquery.slicknav.min.js') }}"></script>
<script src="{{ asset('templates/loans2go/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('templates/loans2go/js/jquery-ui.min.js') }}"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
AOS.init({
   once: true
})
</script>
<script src="{{ asset('templates/loans2go/js/main.js') }}"></script>
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

      if ($(".navbar").hasClass("shrink")) {
         $("._logo").attr("src", "{{ asset('assets/images/logo/logo-dark.png') }}");
      } else {
         $("._logo").attr("src", "{{ asset('assets/images/logo/logo-light.png') }}");
      }

   });
});
</script> -->