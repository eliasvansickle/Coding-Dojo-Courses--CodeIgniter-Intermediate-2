<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="/assets/style.css">
	<title>Add Course</title>
</head>
<body>
	<div id="wrapper">
		<h1>Add A New Course</h1>
		<div id="top">
			<form action="/main/add" method="post">
				<input class="name" type="text" name="name" placeholder="Name Here">
				<input class="description" type="text" name="description" placeholder="Description Here">
				<input type="submit" value="Add">
			</form>
		</div>
		<div id="bottom">
			<h1>Courses</h1>
			<table>
				<thead>
					<th>Course Name</th>
					<th>Description</th>
					<th>Date Added</th>
					<th>Actions</th>
				</thead>
				<tbody>
<?php
					foreach($course as $individual)
					{
?>
					<tr>
<?php

						foreach($individual as $key => $value)
						{
							echo "<td>".$value."</td>";
						}
						// echo "<td>".$individual['name']."</td>";
						// echo "<td>".$individual['description']."</td>";
						// echo "<td>".$individual['created_at']."</td>";
?>
						<td><a href="/main/delete">remove</a name=""></td>
					</tr>
<?php
						} 
?>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>