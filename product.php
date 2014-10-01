<?php include('partials/header.php'); ?>

		<div class="band band-white">
			<div class="container">
				<a class="" href="listing.php">< Back to list</a>
				<div class="row">
					<div class="col-sm-10">
						<h1>Poweredge 1650</h1>
						<img class="logo logo-primary" src="assets/img/l_dell.png" alt="Dell" />
					</div>
				</div>
				<div class="row">
					<div class="col-md-9">
						<ul class="nav nav-tabs tabs-gray" role="tablist">
							<li class="active"><a href="#temp1" role="tab" data-toggle="tab">Overview</a></li>
							<li><a href="#temp2" role="tab" data-toggle="tab">Support</a></li>
							<li><a href="#temp3" role="tab" data-toggle="tab">Editions & Pricing</a></li>
							<li><a href="#temp4" role="tab" data-toggle="tab">Documentation</a></li>
							<li><a href="#temp5" role="tab" data-toggle="tab">Images</a></li>
						</ul>
						<div class="tabs-container tabs-gray">
							<div class="tab-content">
								<div id="temp1" class="tab-pane active">
									<h3>Tab One Content</h3>
									<p>Aenean ac nibh vel nibh porta rhoncus id non lectus. Etiam commodo vel augue non pretium. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec malesuada, sapien id volutpat aliquam, metus dolor porta nibh, a porttitor sapien urna eget nisl. Morbi dictum urna pharetra leo suscipit, vel dictum tellus congue. Nullam at nunc libero. Curabitur at elit libero. Curabitur sit amet arcu gravida, lacinia ante laoreet, consequat mauris. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam malesuada, lectus at elementum dictum, libero justo malesuada tellus, quis lacinia purus odio ut urna.</p>
								</div>

								<div id="temp2" class="tab-pane fade">
									<h3>Tab Two Content</h3>
									<p>Phasellus facilisis odio enim, nec aliquam sem faucibus sit amet. Morbi vestibulum, magna eu volutpat commodo, justo mi faucibus tellus, ut varius mi dolor eu dolor. Curabitur bibendum sed ligula a commodo. Nam in velit at ipsum aliquet auctor. Morbi lacinia risus id nisi pharetra laoreet. Integer pharetra diam at diam mollis lacinia. Donec rhoncus iaculis aliquam. Suspendisse venenatis leo metus, quis ullamcorper erat varius vel. Aliquam hendrerit turpis nec est mollis convallis. Vivamus ac ipsum et orci malesuada fermentum vitae eu diam. Sed aliquam nibh ac ante dictum sodales. Pellentesque id sem eget mauris consequat viverra sodales commodo est. Suspendisse sit amet ornare eros. Duis ut ipsum vitae libero lobortis luctus at et neque. Nunc non enim eu nisi ultrices suscipit vel et libero.</p>
								</div>
							</div>
						</div>
					</div>


					<div class="col-md-3">
						<table class="cert-list">
							<thead>
								<tr>
									<th>
										Certifications
									</th>
									<th class="version">
										Version
									</th>
								</tr>
							</thead>
							<tbody>
								<?php for($i=0; $i<10; $i++): ?>
								<tr>
									<td class="cert">Red Hat Linux (i386)</td>
									<td class="version">5.x</td>
								</tr>
								<?php endfor; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>

<?php include('partials/footer.php'); ?>