<?php 
require_once "database.php";

$result=mysqli_query($conn,"SELECT `id`,`name`,`p_number`,`email`, FROM `student_reg`");


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="src/bootstrap.min.css">
	<!--CSS -->
    <link rel="stylesheet" href="src/style.css">

    <title>Html_form</title>
  </head>
  <body>
  	<!-- set top margin -->
  	<section class="margin_top"></section>
  	<!-- top hedder srart-->
  	<section class="hedder_top">
  		<div class="logo_div">
  			<img class="logo" src="img/logo.png">
  		</div><!-- end logo_div-->
  		<div class="name_title">
  			<h5>International Univercity of Barishal</h5>
  			<h3> Stedunt Registration form </h3>
  			<p><a href="#">www.international.univercity.edu</a></p>
  		</div><!-- end name_title-->
  	</section>
	<!-- top hedder end-->
	<!-- Navbar section start -->
	<section class="">
		<div class="">
			<ul class="manu">
				<li class="item_list"><a href="index.php">Home</a></li>
				<li class="item_list"><a href="sing_pic.php">Photo & singture</a></li>
				<li class="item_list"><a href="#">Payment Status</a></li>
				<li class="item_list"><a href="#">Downlode Registration Card</a></li>
				<li class="item_list"><a href="show_all_reg.php">Show All Registration</a></li>			
			</ul>
		</div>
	</section>
	<!-- Navbar  section end -->
	<!-- Form start -->
	<div class="form_page_list">
		<form method="POST" action="insart_pic.php">
			<table class="table_frist_list">
				<!-- set Table Head Name -->
				<tr> 
					<th class="table_broder">Id</th>
					<th class="table_broder">Name</th>
					<th class="table_broder">Mobile Number</th>
					<th class="table_broder">Email</th>
					<th class="table_broder">Action</th>
				</tr>
				<!-- Show all Data -->
				<!-- start while loop for show data -->
				<?php while ($row = mysqli_fetch_assoc($result)){
				?>
				<tr>
					<td class="table_broder"><?= $row['id'] ?></td><!-- show id-->
					<td class="table_broder"><?= $row['name'] ?></td><!-- show Name-->
					<td class="table_broder"><?= $row['p_number'] ?></td><!-- show phone number-->
					<td class="table_broder"><?= $row['email'] ?></td><!-- show email-->
					<td class="table_broder"><a class="btn btn-warning" href="">Edit</a>
						<a href="delete.php?delete=<?= base64_encode($row['id']) ?>">Delete</a>
					</td><!-- action and retune work-->
				</tr>
				<?php endwhile;	?>
				<!-- end while loop  -->
			</table>
		</form>
	</div>
	<!-- Form End -->
	<!-- for Devloper name and copy right policy -->
	<div class="end">
		<p>© 2020-Tawhidul Islam Sojib.</p>
	</div>
    <!-- Optional JavaScript -->
	

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="src/jquery-3.2.1.slim.min.js"></script>
    <script src="src/popper.min.js"></script>
    <script src="src/bootstrap.min.js"></script>
  </body>
</html>