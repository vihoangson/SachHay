<div class="container">
	<div class="row">
		<div class="col-md-12">

			<h4 class="mb-none"><strong>Single</strong> Image</h4>
			<p>Simple popups with different styles.</p>

			<div class="row">
				<?php 
				foreach ($rs as $key => $value) {
					//printf("<p>%s</p>",$value["name"]);
					?>
					<div class="col-md-3">
						<h5 class="text-semibold text-uppercase mt-lg"><?= $value["name"]; ?></h5>
						<a class="model_box" data-id="<?= $value["id"]; ?>" href="<?= PATH_IMAGE; ?><?= $value["image"]; ?>" data-plugin-options='{"type":"image"}'>
							<img class="img-responsive" src="<?= PATH_IMAGE; ?><?= $value["image"]; ?>" alt="Project Image">
						</a>
					</div>
					<?php
				}
				 ?>
				
			</div>

		</div>
	</div>
</div>


<div class="modal fade" id="modal-id">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Modal title</h4>
			</div>
			<div class="modal-body">
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>