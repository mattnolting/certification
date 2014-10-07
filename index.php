	<?php include('partials/header.php'); ?>

	<div class="band band-narrow band-alt band-white home-bottom">
		<div class="container">
			<div class="module module-home-video">
				<h2 class="module-heading" style="height: 22px;">Welcome to Your New Portal</h2>
				<div id="columns">
					<div class="column" draggable="true"><header>A</header></div>
					<div class="column" draggable="true"><header>B</header></div>
					<div class="column" draggable="true"><header>C</header></div>
				</div>
				<div class="caption">See what's changed in the most recent release of the Customer Portal.</div>
				<div class="card card-grey" style="height: 260px;">
					<div class="card-thumb card-thumb-flush">
						<a data-toggle="modal" href="#welcome-video">
							<span class="media-thumb-wrap"><img src="../chrome_themes/nimbus/img/portal-welcome-video.jpg" alt=""></span>
							<span class="web-icon-chevron video-thumb-icon" aria-hidden="true"></span>
						</a>
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
						<div class="fluid-width-video-wrapper" style="padding-top: 56.25%;"><iframe src="//www.youtube.com/embed/jllOREEn3-c" frameborder="0" allowfullscreen="" id="fitvid936127"></iframe></div>
						<figcaption>See what's changed in the most recent release of the Customer Portal.</figcaption>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
	</div>


<?php include('partials/footer.php'); ?>