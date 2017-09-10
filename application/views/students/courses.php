<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 header">
			<h1> HELLO BOOTSTRAP !! </h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-xs-4 col-sm-4">
		<p class="lead">MENU</p>
		<?php 
		if (isset($errors)){
		echo 	'<h6>'.$errors.'</h6>';
			
		}
		?>
			
		</div>
	</div>

<div class="col-md-8 col-xs-8 col-sm-8 contents">

	<form role="form" method="POST">
	<div class="form-group">
	<label for="idno"> Courses</label>
	<input type="text" class="form-control" id="course" name="course" value="<?php echo set_value('course'); ?>" />
	<label for="fname"> Description</label>
	<input type="text" class="form-control" id="fd" name="fd" value="<?php echo set_value('fd'); ?>"/>
	</div>
	<div class="form-gorup">
		<button type="submit" class="btn btn-primary">
			<span class="glyphicon glyphicon-add"></span> Save
			</button>
			</div>
	</div>
	</form>
</div>
</div>
<div class="row">
	<div class="col-md-12 footer ">
		Copy &copy 2017 . bootSTRAP
		
		</div>

</div>
</div>