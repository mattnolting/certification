<?php include('partials/header.php'); ?>

		<div class="band plain">
			<div class="container">
				<div class="row">
					<div class="col-sm-3">
						<aside id="category" class="filter-list">
							<h3 class="title">Category</h3>
								<div class="radio">
									<label>
										<input class="all" type="radio" checked>All Categories</label>
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio">Servers</label>
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio">Desktops</label>
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio">Laptops</label>
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio">Components</label>
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio">Drivers & Plugins</label>
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio">Applications</label>
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio">Service Providers</label>
									</label>
								</div>
						</aside>
						<aside id="vendor" class="filter-list">
							<h3 class="title" data-toggle="modal" data-target="#vendor">Vendor <i class="fa fa-edit pull-right"></i></h3>
							<div class="selected-filters">
<!--								<button class="btn btn-filter">Nelson Van Buren of Hitachi</button>-->
<!--								<button class="btn btn-filter">Hitachi</button>-->
<!--								<button class="btn btn-filter">Dell</button>-->
<!--								<button class="btn btn-filter">Acer</button>-->
<!--								<button class="btn btn-filter">IBM</button>-->
							</div>
						</aside>

						<aside id="vendor" class="filter-list">
							<h3 class="title" data-toggle="modal" data-target="#environments">Certified For<i class="fa fa-edit pull-right"></i></h3>
						</aside>
					</div>
					<div class="col-sm-9">
						<table class="results">
							<thead>
							<tr>
								<th colspan="2">245 Matching Products</th>
								<th colspan="1">
									<div class="dropdown sort-by">
										<a id="drop" class="btn btn-simple" role="button" data-toggle="dropdown" href="#">Sort by:<span class="caret"></span></a>
										<ul id="sort" class="dropdown-menu" role="menu" aria-labelledby="drop">
											<li role="presentation">Action</li>
											<li role="presentation">Another action</li>
											<li role="presentation"><a role="menuitem" tabindex="-1" href="http://twitter.com/fat">Something else here</a></li>
											<li role="presentation" class="divider"></li>
											<li role="presentation"><a role="menuitem" tabindex="-1" href="http://twitter.com/fat">Separated link</a></li>
										</ul>
									</div>
								</th>
							</tr>
							</thead>
							<tbody>
								<tr>
									<td class="thumb">
										<a href="product.php">
											<img src="assets/img/l_hitachi.jpg" alt="placeholder" />
										</a>
									</td>
									<td class="title">
										<a href="product.php">
											<h4>Bladesymphony - 1000 IPF Server Module GVAA64A4</h4>
											<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
										</a>
									</td>
									<td class="option">
										<span class="category">Hardware</span>
									</td>
								</tr>
								<tr>
									<td class="thumb">
										<a href="product.php">
											<img src="assets/img/l_fujitsu.jpg" alt="placeholder" />
										</a>
									</td>
									<td class="title">
										<a href="product.php">
											<h4>Celsius - C620</h4>
											<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
										</a>
									</td>
									<td class="option">
										<span class="category">Hardware</span>
									</td>
								</tr>


							<?php for($i = 0; $i<6; $i++): ?>
								<tr>
									<td class="thumb">
										<a href="product.php">
											<?php if($i===1) : ?>
												<img src="assets/img/l_hitachi.jpg" alt="placeholder" />
											<?php elseif($i===2) : ?>
												<img src="assets/img/l_fujitsu.jpg" alt="placeholder" />
											<?php elseif($i===3) : ?>
												<img src="assets/img/l_hp.jpg" alt="placeholder" />
											<?php elseif($i===4) : ?>
												<img src="assets/img/l_sun.gif" alt="placeholder" />
											<?php else : ?>
												<img src="assets/img/l_dell.png" alt="placeholder" />
											<?php endif; ?>
										</a>
									</td>
									<td class="title">
										<a href="product.php">
											<h4>Abbee Sshope - PC Diamond</h4>
											<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet.</span>
										</a>
									</td>
									<td class="option">
										<span class="category">Hardware</span>
									</td>
								</tr>
							<?php endfor; ?>
							</tbody>
						</table>
					</div>
					</div>
				</div>
			</div>

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