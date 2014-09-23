<?php include('header.php'); ?>

<main class="portal-content-area" role="main">
	<div id="content" class="main-content">
		<ul id="notices" class="message"></ul>
		<!--googleoff: all-->
		<noscript>
			&lt;div id="noJavaScript" class="alertError"&gt;Note: Our personalized web services require that your browser be enabled for JavaScript and cookies&lt;/div&gt;
		</noscript>
		<!--googleon: all--><div id="messages"></div><div class="band band-narrow home-top band-hero">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="home-security">
							<h2 class="lead-in lead-in-white">Certified by Red Hat</h2>
							<p class="headline headline-white">Tested. Supported. Certified.</p>
							<p class="strapline strapline-white">Learn more about the Red Hat ecosystem and the assurance it provides.</p>
							<a href="/certification" class="cta btn btn-accent">Learn More</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="band band-narrow band-alt home-bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-3" id="home-announcements">
						<span class="loading">Loading…</span>
					</div>
					<div class="col-md-3">
						<div class="module module-home-labs">
							<h2 class="module-heading" style="height: 22px;">Red Hat Access Labs</h2>
							<div class="card card-feature card-craggle card-craggle-virt-white" style="height: 260px;">
								<a href="/labs/networkbondinghelper/">
									<h3 class="headline headline-sm">Network Bonding</h3>
									<div class="strapline strapline-sm">Simplify network bonding configuration with Red Hat Access Labs.</div>
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="module module-home-intro">
							<h2 class="module-heading" style="height: 22px;">Introducing Red Hat Satellite 6</h2>
							<div class="card card-feature card-craggle card-craggle-cloud-white" style="height: 260px;">
								<a href="/products/red-hat-satellite/">
									<h3 class="product-name">
										<span class="rh">Red Hat </span><span class="product">Satellite </span><span class="version">6</span>
									</h3>
								</a><!--
						--></div><!--
					--></div><!--
				--></div>
					<div class="col-md-3">
						<div class="module module-home-video">
							<h2 class="module-heading" style="height: 22px;">Welcome to Your New Portal</h2>
							<div class="card card-grey" style="height: 260px;">
								<div class="card-thumb card-thumb-flush">
									<a data-toggle="modal" href="#welcome-video">
										<span class="media-thumb-wrap"><img src="../chrome_themes/nimbus/img/portal-welcome-video.jpg" alt=""></span>
										<span class="web-icon-chevron video-thumb-icon" aria-hidden="true"></span>
									</a>
								</div>
								<div class="caption">See what's changed in the most recent release of the Customer Portal.</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Welcome Video Modal -->
			<div class="modal video fade" id="welcome-video" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<h3 style="margin: 0;">Welcome to Your New Portal</h3>
						</div>
						<div class="modal-body">
							<iframe width="560" height="315" src="//www.youtube.com/embed/jllOREEn3-c" frameborder="0" allowfullscreen=""></iframe>
							<figcaption>See what's changed in the most recent release of the Customer Portal.</figcaption>
						</div>
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div><!-- /.modal -->

			<script type="text/javascript">
				chrometwo_require(["jquery", "fitvids"], function($) {

					$(document).ready(function() {
						createAnnouncements();

						$('.home-bottom .card').equalHeights();
						$('.home-bottom .module-heading').equalHeights();

						$('.modal-body').fitVids();
						$(document).bind('hidden.bs.modal', function() {
							var vid = $('.modal.video iframe[src*="youtube"]');
							if ( vid.length > 0 ){
								vid.each(function() {
									var src = $(this).attr('src');
									$(this).attr('src', '');
									$(this).attr('src', src);
								});
							}
						});
					});

					$(window).resize(function() {
						$('.home-bottom .card').attr('style', '').equalHeights();
						$('.home-bottom .module-heading').attr('style', '').equalHeights();
					});

				});
			</script>
		</div><!-- band needs to be the :last-child -->

	</div>
</main>

<?php include('footer.php'); ?>