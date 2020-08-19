<?php 
require_once "database.php";

if (isset($_POST['save']) /* && isset($_POST['chackbox'])*/) {

	//name Secction
	$name=$_POST['name'];
	$father_name=$_POST['father_name'];
	$mother_name=$_POST['mother_name'];

	//date of barth
	$date=$_POST['date'];
	$month=$_POST['month'];
	$year=$_POST['year'];

	//gemder, nid, barth Reg, maried statuse & quota
	$gender=$_POST['gender'];
	$nationality=$_POST['nationality'];
	$religion=$_POST['religion'];
	$nid=$_POST['nid'];
	$brg=$_POST['brg'];
	$maried=$_POST['maried'];
	$quota=$_POST['quota'];

	//present Address
	$pse_name=$_POST['pse_name'];
	$pse_vname=$_POST['pse_vname'];
	$pse_upname=$_POST['pse_upname'];
	$pse_disname=$_POST['pse_disname'];
	$pse_poname=$_POST['pse_poname'];
	$pse_psc=$_POST['pse_psc'];

	//parmanent Address
	$prm_name=$_POST['prm_name'];
	$prm_vname=$_POST['prm_vname'];
	$prm_upname=$_POST['prm_upname'];
	$prm_disname=$_POST['prm_disname'];
	$prm_poname=$_POST['prm_poname'];
	$prm_pcname=$_POST['prm_pcname'];

	//Phone Number & email
	$p_number=$_POST['p_number'];
	$p_number_comform=$_POST['p_number_comform'];
	$email=$_POST['email'];

	//ssc exam info
	$ssc_exam_type=$_POST['ssc_exam_type'];
	$ssc_board=$_POST['ssc_board'];
	$ssc_result=$_POST['ssc_result'];
	$ssc_roll_number=$_POST['ssc_roll_number'];
	$ssc_gro_sup=$_POST['ssc_gro_sup'];
	$ssc_pass_year=$_POST['ssc_pass_year'];

	//hsc exam info
	$hsc_exam_type=$_POST['hsc_exam_type'];
	$hsc_board=$_POST['hsc_board'];
	$hsc_result=$_POST['hsc_result'];
	$hsc_roll_number=$_POST['hsc_roll_number'];
	$hsc_gro_sub=$_POST['hsc_gro_sub'];
	$hsc_pass_year=$_POST['hsc_pass_year'];

// insert  data 
	$success=mysqli_query($conn,
				"INSERT INTO `student_reg`(`name`, `father_name`, `mother_name`,/* it's for neme*/
							`date`, `month`, `year`,/* it's for date of Barth*/
							`gender`, `nationality`, `religion`, `nid`, `brg`, `maried`, `quota`,/* it's for gender others*/
							`pse_name`, `pse_vname`, `pse_upname`, `pse_disname`, `pse_poname`, `pse_psc`,/* it's for present adders*/
							`prm_name`, `prm_vname`, `prm_upname`, `prm_disname`, `prm_poname`, `prm_pcname`,/* it's for parmanent address*/
							`p_number`, `p_number_comform`, `email`,/* it's for phone number & email*/
							 `ssc_exam_type`, `ssc_board`, `ssc_result`, `ssc_roll_number`, `ssc_gro_sup`, `ssc_pass_year`, /* it's for ssc exam info*/
							`hsc_exam_type`, `hsc_board`, `hsc_result`, `hsc_roll_number`, `hsc_gro_sub`, `hsc_pass_year`)/* it's for hsc exam info*/ 
				VALUES('$name','$father_name','$mother_name',/* it's for neme*/
							'$date','$month','$year',/* it's for date of Barth*/
							'$nationality','$religion','$nid','$brg','$maried','$quota',/* it's for gender others*/
							'$gender','$pse_name','$pse_vname','$pse_upname','$pse_disname','$pse_poname','$pse_psc',/* it's for present adders*/
							'$prm_name','$prm_vname','$prm_upname','$prm_disname','$prm_poname','$prm_pcname',/* it's for parmanent address*/
							'$p_number','$p_number_comform','$email',/* it's for phone number & email*/
							'$ssc_exam_type','$ssc_board','$ssc_result','$ssc_roll_number','$ssc_gro_sup','$ssc_pass_year',/* it's for ssc exam info*/
							'$hsc_exam_type','$hsc_board','$hsc_result','$hsc_roll_number','$hsc_gro_sub','$hsc_pass_year')"/* it's for hsc exam info*/ );
	
	// incert chack and retune file
	if ($success) {
		header('location:sing_pic.php');
		exit;
	}else{
		echo "Data not Insert";
	}
}
?>