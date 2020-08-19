<?php 
require_once "insart.php";
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
				<li class="item_list"><a href="#">Photo & singture</a></li>
				<li class="item_list"><a href="#">Payment Status</a></li>
				<li class="item_list"><a href="#">Downlode Registration Card</a></li>
				<li class="item_list"><a href="show_all_reg.php">Show All Registration</a></li>				
			</ul>
		</div>
	</section>
	<!-- Navbar  section end -->
	<!-- Form start -->
	<div class="form_page">
		<form method="POST" action="insart_pic.php">
			<table class="table_frist">
				<!-- set picture -->
				<tr>
					<td class="td_frist"><label>Picture</label><span>300px*300px</span></td>
					<td class="td_second">:</td>
					<td class="td_thard"><input type="file"  name="pic" required></td>
				</tr>
				<!-- set singture -->
				<tr>
					<td class="td_frist"><label>singture</label><span>120px*80px</span></td>
					<td class="td_second">:</td>
					<td class="td_thard"><input type="file"  name="sing" required></td>
				</tr>
				<table class="end_table">		
					<!-- set submit button -->
					<tr>
						<td>
							<button type="submit" name="save" class="btn btn-success" value="save">Submit</button>
						</td>
					</tr>
				</table>
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