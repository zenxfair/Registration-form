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
				<li class="item_list"><a href="sing_pic.php">Photo & singture</a></li>
				<li class="item_list"><a href="#">Payment Status</a></li>
				<li class="item_list"><a href="#">Downlode Registration Card</a></li>
				<li class="item_list"><a href="show_all_reg.php">Show All Registration</a></li>				
			</ul>
		</div>
	</section>
	<!-- Navbar  section end -->
	<!-- Form start -->
	<div class="form_page">
		<form method="POST" action="insart.php">
			<table class="table_frist">
				<!-- set applicant name -->
				<tr>
					<td class="td_frist"><label>Applicant's Name</label><span>*</span></td>
					<td class="td_second">:</td>
					<td class="td_thard"><input type="text"  name="name" required></td>
				</tr>
				<!-- set father name -->
				<tr>
					<td class="td_frist"><label>Father's Name</label><span>*</span></td>
					<td class="td_second">:</td>
					<td class="td_thard"><input type="text"  name="father_name" required></td>
				</tr>
				<!-- set mother name -->
				<tr>
					<td class="td_frist"><label>Mother's Name</label><span>*</span></td>
					<td class="td_second">:</td>
					<td class="td_thard"><input type="text"  name="mother_name" required></td>
				</tr>
				<!-- set date of barth -->
				<tr>
					<td class="td_frist"><label>Date Of Barth</label><span>*</span></td>
					<td class="td_second">:</td>
					<td class="td_thard"><span>Date</span>
						<!-- select date -->
						<select name="date"  type="number" required>
							<option value="" >Select</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="28">28</option>
							<option value="29">29</option>
							<option value="30">30</option>
							<option value="31">31</option>
						</select>
						<span>Month</span>
						<select name="month"  type="number" required>
							<!-- select month -->
							<option value="" >Selcect</option>
							<option value="1">1- January</option>
							<option value="2">2- February</option>
							<option value="3">3- March</option>
							<option value="4">4- April</option>
							<option value="5">5- May</option>
							<option value="6">6- June</option>
							<option value="7">7- July</option>
							<option value="8">8- August</option>
							<option value="9">9- Septomber</option>
							<option value="10">10- October</option>
							<option value="11">11- Noberber</option>
							<option value="12">12- December</option>
						</select>
						<span>Year</span>
						<select name="year" type="number" required>
							<!-- select year -->
							<option value="" >Select</option>
							<option value="1990">1990</option>
							<option value="1991">1991</option>
							<option value="1992">1992</option>
							<option value="1993">1993</option>
							<option value="1994">1994</option>
							<option value="1995">1995</option>
							<option value="1996">1996</option>
							<option value="1997">1997</option>
							<option value="1998">1998</option>
							<option value="1999">1999</option>
							<option value="2000">2000</option>
							<option value="2001">2001</option>
							<option value="2002">2002</option>
							<option value="2003">2003</option>
							<option value="2004">2004</option>
							<option value="2005">2005</option>
						</select>
					</td>
				</tr>
				<!-- set gender -->
				<tr>
					<td class="td_frist"><label>Gender</label><span>*</span></td>
					<td class="td_second">:</td>
					<td class="td_thard">
						<span><input class="redio_normal" type="radio" name="gender" value="1" required>Male</span>
						<span><input class="redio_normal" type="radio" name="gender" value="2" required>Female</span>
						<span><input class="redio_normal" type="radio" name="gender" value="3" required>others</span>
					</td>
				</tr>
				<!-- set nationality -->
				<tr>
					<td class="td_frist"><label>Nationality</label><span>*</span></td>
					<td class="td_second">:</td>
					<td class="td_thard">
						<select name="nationality" required>
							<option value="bangladeshi">Bangladeshi</option>
						</select>
					</td>
				</tr>
				<!-- set religion -->
				<tr>
					<td class="td_frist"><label>Religion</label><span>*</span></td>
					<td class="td_second">:</td>
					<td class="td_thard">
						<select name="religion" required>
							<option value="">Select</option>
							<option value="Islam">Islam</option>
							<option value="Hinduism">Hinduism</option>
							<option value="Christianiy">Christianiy</option>
							<option value="Buddhism">Buddhism</option>
							<option value="Others">Others</option>							
						</select>
					</td>
				</tr>
				<!-- set national id -->
				<tr>
					<td class="td_frist"><label>National Id</label><span>*</span></td>
					<td class="td_second">:</td>
					<td class="td_thard">
						<!-- set javascript for hide & Show input filed -->
						<span>
							<input class="redio_normal" type="radio" onclick="javascript:yesnidCheck();" name="nid" value="1" id="nid" required>Yes
						</span>
						<span>
						    <input style="width: 60%;" id="ifNid" type='text' name='nid'>
						</span>
						<span>
							<input class="redio_normal" type="radio" onclick="javascript:yesnidCheck();" name="nid" value="0" id="noCheck" required>No
						</span>
					</td>
				</tr>
				<!-- set birth registation number -->
				<tr>
					<td class="td_frist"><label>Birth Registation</label><span>*</span></td>
					<td class="td_second">:</td>
					<td class="td_thard">
						<!-- set javascript for hide & Show input filed -->
						<span>
							<input class="redio_normal" type="radio" onclick="javascript:yesbrgCheck();" name="brg" value="1"  id="brg" required>Yes
						</span>
						<span>
						    <input style="width: 60%;" id="ifBrg" type='text' name='brg'>
						</span>
						<span>
							<input class="redio_normal" type="radio" onclick="javascript:yesbrgCheck();" name="brg" value="0" id="noCheck" required>No
						</span>
					</td>
				</tr>
				<!-- set marital status  -->
				<tr>
					<td class="td_frist"><label>Marital Status</label><span>*</span></td>
					<td class="td_second">:</td>
					<td class="td_thard">
						<!-- set javascript for hide & Show input filed -->
						<span>
							<input class="redio_normal" type="radio" onclick="javascript:yesmstCheck();" name="maried" value="1" id="maried" required>Maried
						</span>
						<span  id="ifMst">
							<span>[Spouse Name]</span>
						    <input style="width: 40%;" type='text' name='maried'>
						</span>
						<span>
							<input class="redio_normal" type="radio" onclick="javascript:yesmstCheck();" name="maried" value="0" id="noCheck" required>Single
						</span>
					</td>
				</tr>
				<!-- set other's Quota -->
				<tr>
					<td class="td_frist"><label>Quota</label><span>*</span></td>
					<td class="td_second">:</td>
					<td class="td_thard">
						<select name="quota">
							<option value="">Select</option>
							<option value="1">Freedom Fighter</option>
							<option value="2">Child Of Freedom Fighter</option>
							<option value="3">Grand Child Of Freedom Fighter</option>
							<option value="4">Physically Hadicappid</option>
							<option value="5">Others</option>							
						</select>
					</td>
				</tr>
				<!-- adderess table -->
				<table class="table_mid">
					<!-- set parsent address -->
					<tr>
						<td colspan="2">
							<div class="top_table_hadder">
								<p>Mailing/Present Address<span>*</span></p>							
							</div>
						</td>
					</tr>
					<tr>
						<td class="td_frist_mid">Care of</td>
						<td class="td_second_mid"><input type="text" name="pse_name" required></td>
					</tr>
					<tr>
						<td class="td_frist_mid">Village/town</td>
						<td class="td_second_mid"><input type="text" name="pse_vname" required></td>
					</tr>
					<tr>
						<td class="td_frist_mid">Upazila</td>
						<td class="td_second_mid"><input type="text" name="pse_upname" required></td>
					</tr>
					<tr>
						<td class="td_frist_mid">District</td>
						<td class="td_second_mid"><input type="text" name="pse_disname" required></td>
					</tr>
					<tr>
						<td class="td_frist_mid">Psot Office</td>
						<td class="td_second_mid"><input type="text" name="pse_poname" required></td>
					</tr>
					<tr>
						<td class="td_frist_mid">Psot Code</td>
						<td class="td_second_mid"><input type="text" name="pse_psc" required></td>
					</tr>
				</table>
				<table class="table_mid">
					<!-- set premanent address -->
					<tr>
						<td colspan="2">
							<div class="top_table_hadder">
								<p>Parmanent Address<span>*</span><span><input type="checkbox"></span></p>				
							</div>
						</td>
					<tr>
					<tr>
						<td class="td_frist_mid">Care of</td>
						<td class="td_second_mid"><input  type="text" name="prm_name"></td>
					</tr>
					<tr>
						<td class="td_frist_mid">Village/town</td>
						<td class="td_second_mid"><input  type="text" name="prm_vname"></td>
					</tr>
					<tr>
						<td class="td_frist_mid">Upazila</td>
						<td class="td_second_mid"><input  type="text" name="prm_upname"></td>
					</tr>
					<tr>
						<td class="td_frist_mid">District</td>
						<td class="td_second_mid"><input type="text" name="prm_disname"></td>
					</tr>
					<tr>
						<td class="td_frist_mid">Psot Office</td>
						<td class="td_second_mid"><input  type="text" name="prm_poname"></td>
					</tr>
					<tr>
						<td class="td_frist_mid">Psot Code</td>
						<td class="td_second_mid"><input  type="text" name="prm_pcname"></td>
					</tr>
				</table>
				<!-- set phone number & mail  -->
				<table class="table_frist">	
					<!-- set phone number -->
					<tr>
						<td class="td_frist"><label>Phone Number</label><span>*</span></td>
						<td class="td_second">:</td>
						<td class="td_thard"><input style="width: 40%;" type="text"  name="p_number" required><span style="color: red;">It's Use for Sms</span></td>
					</tr>
					<!-- set comfarm number -->
					<tr>
						<td class="td_frist"><label> Confirm Phone Number</label><span>*</span></td>
						<td class="td_second">:</td>
						<td class="td_thard"><input style="width: 40%;" type="text"  name="p_number_comform" required><span>Repeat Number</span></td>
					</tr>
					<!-- set email  -->
					<tr>
						<td class="td_frist"><label>Email</label><span>*</span></td>
						<td class="td_second">:</td>
						<td class="td_thard"><input type="email"  name="email" required></td>
					</tr>
				</table>
				<!-- set education info -->
				<table class="table_mid">
					<!-- set ssc education info -->
					<tr>
						<td colspan="2">
							<div class="top_table_hadder">
								<p>SSC Level<span>*</span></p>							
							</div>
						</td>
					</tr>
					<tr>
						<td class="td_frist_mid">Examination</td>
						<td class="td_second_mid"><input type="text" name="ssc_exam_type" required></td>
					</tr>
					<tr>
						<td class="td_frist_mid">Board</td>
						<td class="td_second_mid"><input type="text" name="ssc_board" required></td>
					</tr>
					<tr>
						<td class="td_frist_mid">Result</td>
						<td class="td_second_mid"><input type="number" name="ssc_result" required></td>
					</tr>
					<tr>
						<td class="td_frist_mid">Roll Number</td>
						<td class="td_second_mid"><input type="number" name="ssc_roll_number" required></td>
					</tr>
					<tr>
						<td class="td_frist_mid">Group/Subject</td>
						<td class="td_second_mid"><input type="text" name="ssc_gro_sup" required></td>
					</tr>
					<tr>
						<td class="td_frist_mid">Passing Year</td>
						<td class="td_second_mid"><input type="number" name="ssc_pass_year" required></td>
					</tr>
				</table>
				<table class="table_mid">
					<!-- set hsc education info -->
					<tr>
						<td colspan="2">
							<div class="top_table_hadder">
								<p>Hsc Level<span>*</span></p>							
							</div>
						</td>
					</tr>
					<tr>
						<td class="td_frist_mid">Examination</td>
						<td class="td_second_mid"><input type="text"name="hsc_exam_type" required></td>
					</tr>
					<tr>
						<td class="td_frist_mid">Board</td>
						<td class="td_second_mid"><input type="number"name="hsc_board" required></td>
					</tr>
					<tr>
						<td class="td_frist_mid">Result</td>
						<td class="td_second_mid"><input type="number"name="hsc_result" required></td>
					</tr>
					<tr>
						<td class="td_frist_mid">Roll Number</td>
						<td class="td_second_mid"><input type="number"name="hsc_roll_number" required></td>
					</tr>
					<tr>
						<td class="td_frist_mid">Group/Subject</td>
						<td class="td_second_mid"><input type="text"name="hsc_gro_sub" required></td>
					</tr>
					<tr>
						<td class="td_frist_mid">Passing Year</td>
						<td class="td_second_mid"><input type="number"name="hsc_pass_year" required></td>
					</tr>
				</table>
				<!-- set information confarm & submit -->
				<table class="end_table">
					<!-- information confarm checkbox -->
					<tr>
						<td>
							<input type="checkbox" name="info_ok" required><span>The above information is correct and I would like to go the next step</span>
						</td>
					</tr>
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
	<!-- for show and hide input National Id -->
	<script type="text/javascript">
	    window.onload = function() {
	        document.getElementById('ifNid').style.display = 'none';
	        document.getElementById('ifMst').style.display = 'none';
	        document.getElementById('ifBrg').style.display = 'none';
	    }
	    //for show and hide Nastional Id
	    function yesnidCheck() {
	        if (document.getElementById('nid').checked) {
	            document.getElementById('ifNid').style.display = 'inline';
	        } 
	        else {
	            document.getElementById('ifNid').style.display = 'none';
	        }
	    }
	    //for show and hide Barth Regsition
	    function yesbrgCheck() {
	        if (document.getElementById('brg').checked) {
	            document.getElementById('ifBrg').style.display = 'inline';
	        } 
	        else {
	            document.getElementById('ifBrg').style.display = 'none';
	        }
	    }
	    //for Show and hide marite Status
	    function yesmstCheck() {
	        if (document.getElementById('maried').checked) {
	            document.getElementById('ifMst').style.display = 'inline';
	        } 
	        else {
	            document.getElementById('ifMst').style.display = 'none';
	        }
	    }
	</script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="src/jquery-3.2.1.slim.min.js"></script>
    <script src="src/popper.min.js"></script>
    <script src="src/bootstrap.min.js"></script>
  </body>
</html>