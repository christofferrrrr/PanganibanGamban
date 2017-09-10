<div>
<form action="<?php echo base_url('students/updateDb'); ?>" method="post">
<p>ID NO:
<br /> <input type="text" name="idno" value="<?php echo $student['idno'];?>" /></p>
<p>NAME:
<br /> <input type="text" name="fname" value="<?php echo $student['fname'];?>" /> </p>
<p>MIDDLE NAME:
<br /><input type="text" name="mname" value="<?php echo $student['mname'];?>" /></p>
<p>LAST NAME:
<br /><input type="text" name="lname" value="<?php echo $student['lname'];?>"  /></p>
<p>COURSE:
<br /><input type="text" name="course" value="<?php echo $student['course'];?>" /></p>
<p>SEX:
<br /><input type="text" name="sex" value="<?php echo $student['sex'];?>" /></p>
<p><input style="margin-left:20px; margin-right:30px;" class="button" type="submit" value="submit" />
<input style=" margin-top:40px;" class="button" type="reset" value="clear" /></p>
</form>	
</div>