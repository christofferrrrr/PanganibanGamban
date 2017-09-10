<div class="container">
<div class="modal fade" role="dialog" id="myModal">
		<div class="modal-dialog" >
			<div class="modal-content">
				<div class="modal-title">
				 <button type="button" class="close" data-dismiss="modal">&times;</button>
				      <h4 class="modal-title">Modal Header</h4>
				</div>
				 <div class="modal-body">
<?php echo form_open('students/add'); ?>
<p>ID NO:
<br /> <input type="text" name="idno" value="<?php echo set_value('idno'); ?>" /></p><?php echo form_error('idno'); ?>
<p>NAME:
<br /> <input type="text" name="fname" value="<?php echo set_value('fname'); ?>"/><?php echo form_error('fname'); ?></p>
<p>MIDDLE NAME:
<br /><input type="text" name="mname" value="<?php echo set_value('mname'); ?>"/><?php echo form_error('mname'); ?></p>
<p>LAST NAME:
<br /><input type="text" name="lname" value="<?php echo set_value('lname'); ?>"/></p>
<p>COURSE:
<br /><input type="text" name="course" value="<?php echo set_value('course'); ?>"/></p>
<p><input style="margin-left:20px; margin-right:30px;" class="button" type="submit" value="submit" />
<input style=" margin-top:40px;" class="button" type="reset" value="clear" /></p>
</form>	
</div>
  <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
</div>
        </div>
      
</div>
</div>