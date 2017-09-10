

<a href="<?php echo base_url('students/add'); ?>">ADD</a>

<h1>STUDENTS-View students</h1>
<img src="<?php echo base_url('assets/images/table.jpg') ?>" alt="table" width="20%" height="20%" />
<table border="1">
	<thead>
	<th>ID NO.</th>
	<th>LAST NAME</th>
	<th>FIRST NAME</th>
	<th>MIDDLE NAME</th>
	<th>ACTIONS</th>
	<th>SEX</th>
	<th>ACTIONS</th>
	</thead>
<tbody>
<?php
foreach($students as $s)
{
	
	echo '<tr >
				<td>'.$s['idno'].'</td>
				<td>'.$s['lastname'].'</td>
				<td>'.$s['firstname'].'</td>
				<td>'.$s['middlename'].'</td>
				<td>'.$s['course'].'</td>
				<td>'.$s['sex'].'</td>
				<td> <a href="'.base_url('students/profile/'.$s['idno']).'">VIEW </a>|<a href="'.base_url('students/update/'.$s['idno']).'"> EDIT</a> |<a href="'.base_url('students/del/'.$s['idno']).'"> DELETE</a></td>
	<tr>';
	/*note : base url content is the controller_name/function_name*/
	
	
	
	
	
}
?>	
			