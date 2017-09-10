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
	<label for="idno"> ID no.</label>
	<input type="text" class="form-control" id="idno" name="idno" value="<?php echo set_value('idno'); ?>" />
	<label for="fname"> First Name.</label>
	<input type="text" class="form-control" id="fname" name="fname" value="<?php echo set_value('fname'); ?>"/>
	<label for="fname"> last name</label>
	<input type="text" class="form-control" id="lname" name="lname" value="<?php echo set_value('lname'); ?>"/>
	
	<label for="fname"> Middle name</label>
	<input type="text" class="form-control" id="mname" name="mname" value="<?php echo set_value('mname'); ?>" />
	<label for="fname"> SEX.</label>	
	<input type="text" class="form-control" id="sex" name="sex" value="<?php echo set_value('sex'); ?>"/>
	<label for="fname"> course.</label>
	<input type="text" class="form-control" id="course" name="course" value="<?php echo set_value('course'); ?>"/>
	</div>
	<div class="form-gorup">
		<button type="submit" class="btn btn-primary">
			<span class="glyphicon glyphicon-plus"></span> Save
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