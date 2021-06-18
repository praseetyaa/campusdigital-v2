

	<!-- Footer Section -->
	<footer class="footer-section pt-5">
		<div class="container">
			<div class="row text-center mb-3">
				<div class="col-12">
					<div class="footer-widget text-white">
						<a href="/"><img class="mb-3" src="{{ asset('assets/images/logo/logo-light.png')}}" height="60" alt="logo-campusdigital"></a>
						<div class="mb-2"><i class="fa fa-map-marker mr-2" style="font-size: 22px;"><a href="https://goo.gl/maps/Eg8uiNSjPMgpjbGp6" target="_blank" title="Buka Dengan Google Maps"></i>{{ setting('site.address') }}</a></div>
						<div class="mb-2 d-flex align-items-center justify-content-center">
							<div class="mb-0 mr-3"><a href="mailto:{{ setting('site.email') }}"><i class="fa fa-envelope-o mr-2" style="font-size: 22px;"></i>{{ setting('site.email') }}</a></div>
							<div class="m-0"><i class="fa fa-whatsapp mr-2" style="font-size: 22px;"><a href="https://wa.me/{{ setting('site.whatsapp') }}" target="_blank"></i>{{ setting('site.whatsapp') }}</a></div>
						</div>
						<div class="mb-2 d-flex align-items-center justify-content-center">
							<div class="mr-2" title="Instagram : {{ setting('site.medsos.instagram') }}"><a href="https://instagram.com/campusdigital.id" target="_blank"><i class="fa fa-instagram" style="font-size: 22px;"></i></a></div>
							<div class="mr-2" title="Facebook : Campus Digital"><a href="https://www.facebook.com/campusdigital.id/?ref=py_c" target="_blank"><i class="fa fa-facebook-square" style="font-size: 22px;"></i></a></div>
							<div class="" title="Youtube : Campus Digital"><a href="https://www.youtube.com/channel/UCz6opXZW_HqPU6RQlfxOS9w" target="_blank"><i class="fa fa-youtube-play" style="font-size: 22px;"></i></a></div>
						</div>
						</div>
					</div>
				</div>
<!-- 				<div class="col-xl-4 col-lg-12">
					{!! html_entity_decode(setting('site.google_maps')) !!}
				</div> -->
			</div>
			<div class="copyright text-center text-white py-2" style="background-color: rgba(0, 0, 0,.25);">
			Copyright &copy; 2019 - <script>document.write(new Date().getFullYear());</script> <a class="text-white" href="{{ URL::to('/') }}" target="_blank">{{ setting('site.name') }}</a>
			</div>
	</footer>
	<!-- Footer Section end -->

	<!-- fab -->
	<div class="fixed-bottom d-flex align-items-center justify-content-end text-end fab-wa" style="width: fit-content; left: unset;">
		<a href="#" onClick="window.open('https://api.whatsapp.com/send?phone={{ setting('site.whatsapp') }}&text=Halo Campus Digital, saya butuh informasi tentang layanan Campus Digital...', '_blank')" class="text-decoration-none text-body">
			<div class="bg-white shadow-sm px-3 py-2 mr-2 rounded-3" style="width: fit-content; animation: fab 2s infinite ease">
				<span class="font-weight-bold">Hubungi Kami</span>
			</div>
		</a>
		<a href="#" onClick="window.open('https://api.whatsapp.com/send?phone={{ setting('site.whatsapp') }}&text=Halo Campus Digital, saya butuh informasi tentang layanan Campus Digital...', '_blank')">
		<div class="rounded-circle shadow-sm float-right text-center d-flex align-items-center justify-content-center mr-2 mb-2" style="width: 60px; height: 60px; background-color: #00E676;">
			<i class="fa fa-whatsapp text-white" style="font-size: 2.5rem"></i>
		</div>
		</a>
	</div>