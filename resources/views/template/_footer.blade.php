

	<!-- Footer Section -->
	<footer class="footer-section">
		<div class="container">
			<div class="row mb-3">
				<div class="col-xl-8 col-lg-12">
					<div class="footer-widget text-white">
						<h2>Hubungi Kami</h2>
						<ul>
							<li><i class="fa fa-map-marker position-absolute" style="font-size: 22px;"></i><span style="margin-left: 2rem!important;">{{ setting('site.address') }}</span></li>
							<li><i class="fa fa-envelope position-absolute" style="font-size: 22px;"></i><span style="margin-left: 2rem!important;">{{ setting('site.email') }}</span></li>
							<li><i class="fa fa-whatsapp position-absolute" style="font-size: 22px;"></i><span style="margin-left: 2rem!important;">{{ setting('site.whatsapp') }}</span></li>
							<li><i class="fa fa-instagram position-absolute" style="font-size: 22px;"></i><span style="margin-left: 2rem!important;">{{ setting('site.medsos.instagram') }}</span></li>
						</ul>
					</div>
				</div>
				<div class="col-xl-4 col-lg-12">
					{!! html_entity_decode(setting('site.google_maps')) !!}
				</div>
			</div>
			<div class="copyright text-center"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
			Copyright &copy; 2019 - <script>document.write(new Date().getFullYear());</script> <a class="text-warning" href="{{ URL::to('/') }}" target="_blank">{{ setting('site.name') }}</a>. All rights reserved | This template is made with <i class="fa fa-heart-o text-warning" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
			<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
			</div>
	</footer>
	<!-- Footer Section end -->

	<!-- WhatsApp Button -->
    <div style="bottom:25px; position:fixed; right:10px; z-index:999; border:#000000 0px solid;">
          <a href="#" onClick="window.open('https://api.whatsapp.com/send?phone={{ setting('site.whatsapp') }}&text=Halo Campus Digital, saya butuh informasi tentang layanan Campus Digital...', '_blank')">
				<img src=" {{ asset('assets/images/others/chat-wa.png') }}" class="img-responsive" style="max-width: 200px;">
          </a>
    </div>
	<!-- WhatsApp Button End -->