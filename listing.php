<?php include('partials/header.php'); ?>

		<div class="band plain">
			<div class="container">
				<div class="row">
					<div class="col-sm-3">
						<aside id="category" class="filter-list">
							<h3>Category</h3>
								<div class="checkbox">
									<label>
										<input class="all" type="checkbox" checked>All Categories</label>
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox">Servers</label>
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox">Desktops</label>
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox">Laptops</label>
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox">Components</label>
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox">Plugins</label>
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox">Applications</label>
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox">Service Providers</label>
									</label>
								</div>
						</aside>
						<aside id="vendor" class="filter-list">
							<h3>Vendors</h3>
							<div class="checkbox">
								<label>
									<input class="all" type="checkbox" checked>All Categories</label>
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox">Servers</label>
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox">Desktops</label>
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox">Laptops</label>
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox">Components</label>
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox">Plugins</label>
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox">Applications</label>
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox">Service Providers</label>
								</label>
							</div>
						</aside>
					</div>
					<div class="col-sm-9">
						<table class="results">
							<thead>
							<tr>
								<th colspan="3">test</th>
							</tr>
							</thead>
							<tbody>
							<?php for($i = 0; $i<10; $i++): ?>
								<tr>
									<td class="thumb">
										<a href="product.php">
											<img src="http://placehold.it/150x75" alt="placeholder" />
										</a>
									</td>
									<td class="title">
										<h4 class="">Abbee Sshope - PC Diamond</h4>
										<span>Enterprise Linux 4</span>
									</td>
									<td class="option">

									</td>
								</tr>
							<?php endfor; ?>
							</tbody>
						</table>
					</div>
					</div>
				</div>
			</div>

			<div class="band band-hero band-hero-cover band-hero-top" style="background-image: url(/nimbus/chrome_themes/nimbus/img/temp-banner.jpg);">
				<div class="container">

					<div class="hero">
						<h2 class="lead-in lead-in-white">Heroes</h2>
						<p class="headline headline-white">Super awesome banners</p>
						<p class="strapline strapline-white">Lorem ipsum dolor sit amet consectetur adipiscing elit. Fusce libero urna, sagittis sit amet metus nec, commodo congue est. Quisque consectetur dolor posuere arcu molestie, a volutpat lacus feugiat.</p>
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

<?php include('partials/footer.php'); ?>