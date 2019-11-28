<?php
//Helper functions
//function to clean out special characters like $, #,@ in the password
$counter = 0;
function clean($string){
	return htmlentities($string);
}

function redirect($location){
	return header("Location: {$location}");
}

//set messages in session
function set_message($message) {
	if(!empty($message)) {
		$_SESSION['message'] = $message;
	}
	else {
		$message = ""; //set message to empty string
	}

}

function display_message () {
	if(isset($_SESSION['message'])) {
		echo $_SESSION['message'];
		unset ($_SESSION['message']);
	}
}

function token_generator () {
	$token = $_SESSION['token'] = md5(uniqid(mt_rand(),true));
	return $token;
}

function email_exists($email) {
	$sql = "SELECT id FROM users WHERE email = '$email'";
	$result = query($sql);

	if(row_count($result)==1){
		return true;
	} else {
		return false;
	}
}

function username_exists($username) {
	$sql = "SELECT id FROM users WHERE username = '$username'";
	$result = query($sql);

	if(row_count($result)==1){
		return true;
	} else {
		return false;
	}
}

//Validation functions----------------------------------------

function validate_user_registration_first() {
	global $counter;
	if($_SERVER['REQUEST_METHOD'] == "POST") {
		$thc_no = clean($_POST['thc_no']);
		$first_name = clean($_POST['first_name']);
		$current_day = clean($_POST['current_day']);
		$middle_name = clean($_POST['middle_name']);
		$last_name = clean($_POST['last_name']);

		if(!empty($errors)) {
			foreach ($errors as $error) {
				$message  = <<<DELIMITER
				<div class="alert alert-danger" role="alert">
				  $error
				</div> 
				DELIMITER;
				echo $message;
			} 
		} else {
				if( register_user_first($thc_no, $current_day,$first_name, $middle_name,$last_name)) {
					set_message("<p class ='bg-success text-center'> Congrats! $first_name is registered!</p>");
					redirect("index.php");
				}
		}
	}
}

function register_user_first($thc_no, $current_day,$first_name, $middle_name,$last_name) {

	$thc_no = escape($thc_no);
	$current_day = escape($current_day);
	$first_name =escape($first_name);
	$middle_name = escape($middle_name);
	$last_name =escape($last_name);

	$sql = "INSERT INTO patient( current_day,first_name , middle_name, last_name)";
	$sql.= " VALUES('$current_day','$first_name','$middle_name','$last_name')";
	$result = query($sql);
	confirm($result);
	return true;

}

//User login function
function login_user($thc_no) {

	$sql = "SELECT first_name, last_name
			FROM patient 
			WHERE thc_no ='".escape($thc_no)."'";
	$result = query($sql);

	if(row_count($result)==1) {

		return true;
	} else {
		return false;
	}
 
}

//validate user login functions
function validate_user_login() {

	$errors  = [];

	$min = 0;
	$max = 20;

	if($_SERVER['REQUEST_METHOD'] == "POST") {
		$thc_no = clean($_POST['thc_no']);



		if(!empty($errors)) {
			foreach ($errors as $error) {
				$message  = <<<DELIMITER
				<div class="alert alert-danger" role="alert">
				  $error
				</div> 
				DELIMITER;
				echo $message;
			} 
		} else {
			if(login_user($thc_no)) {
				set_message("<p class ='bg-success text-center'> Congrats! THC#: $thc_no is logged in!</p>");
				$_SESSION['thc_no'] = $thc_no;

				redirect("patients.php");
			}
			else {
				echo "THC# is not found. Cannot log-in. Sorry";
			}
		}
	}
}

//function to fill in the medical dictionary table

function get_other() {
	$sql = "SELECT * FROM other";
	$result = query($sql);
	confirm($result);
	while($row = fetch_array($result)) {
		echo '<tr>';
		echo '<td>';
		echo $row['code_id'];
		echo '</td>';
		echo '<td>';
		echo $row['full_name'];
		echo '</td>';
		echo '<td>';
		echo $row['abbreviation'];
		echo '</td>';
		echo '<td>';
		echo $row['description'];
		echo '</td>';
		echo '</tr>';
	}
}
//function to insert other medical
function validate_insert_medical() {

	if($_SERVER['REQUEST_METHOD'] == "POST") {
		$code_id = clean($_POST['code_id']);
		$full_name = clean($_POST['full_name']);
		$abbreviation = clean($_POST['abbreviation']);
		$description = clean($_POST['description']);
		if(insert_medical($code_id, $full_name, $abbreviation, $description)) {
		set_message("<p class ='bg-success text-center'> Added to database.</p>");
		redirect("modifyMedical.php");
	}
	}
}
function insert_medical($code_id, $full_name, $abbreviation, $description) {
		$sql = "INSERT INTO other(code_id, full_name, abbreviation, description)";
		$sql.= " VALUES('$code_id','$full_name','$abbreviation','$description')";
		$result = query($sql);
		confirm($result);
		return true;
}


function validate_intial_interview_visit_id(){

	if($_SERVER['REQUEST_METHOD'] == "POST") {
		$visit_id= clean($_POST['visit_id']);
		if(intial_interview_visit_id($visit_id)) {
		set_message("<p class ='bg-success text-center'> Visit ID added</p>");
	}
	}
}
function intial_interview_visit_id($visit_id) {

	if(isset($_POST['initial_interview_visit_id'])) {
		$sql = "INSERT INTO initial_interview(ID)
				VALUES('".escape($_SESSION['thc_no'])."')";	
		redirect("initial_Interview.php");
		//$_SESSION['ID'] = $visit_id;
		} elseif (isset($_POST['follow_up_interview_visit_id'])){
			$sql = "INSERT INTO follow_up_interview(visit_id)
					VALUES('$visit_id')";	
					set_message("<p class ='bg-success text-center'> thc_no added</p>");
					//'".escape($_SESSION['thc_no'])."'
		redirect("follow_up_Interview.php");
		$_SESSION['visit_id'] = $visit_id;
		}		
	$result = query($sql);
	confirm($result);
	return true;
}


// function validate_submit_initial_interview() {
// 	if($_SERVER['REQUEST_METHOD'] == "POST") {
// 		$intermittent= clean($_POST['intermittent']);
// 		if(submit_initial_interview($intermittent)) {
// 		set_message("<p class ='bg-success text-center'> Submitted Initial Interview</p>");
// 	}
// 	}
// }

// function submit_initial_interview($intermittent) {
// 	$sql = "UPDATE patient
// 			SET intermittent = '$intermittent'
// 			WHERE thc_no ='".escape($_SESSION['thc_no'])."'";
// 	$result = query($sql);
// 	confirm($result);
// 	return true;
// }


// function validate_submit_follow_up_interview() {
// 	if($_SERVER['REQUEST_METHOD'] == "POST") {
// 		$concentration= clean($_POST['concentration']);
// 		$severity = clean($_POST['severity']);
// 		if(submit_follow_up_interview($concentration, $severity)) {
// 		set_message("<p class ='bg-success text-center'> Submitted Follow Up Interview</p>");
// 	}
// 	}
// }

// function submit_follow_up_interview($concentration, $severity) {
// 	$sql = "UPDATE patient
// 			SET concentration = '$concentration', 
// 			    severity = '$severity'
// 			WHERE thc_no ='".escape($_SESSION['thc_no'])."'";
// 	$result = query($sql);
// 	confirm($result);
// 	return true;
// }



function validate_submit_initial_interview_final(){
	if($_SERVER['REQUEST_METHOD'] == "POST") {
		$RE =clean($_POST['RE']);
		$LE =clean($_POST['LE']);
		$T_Both =clean($_POST['T_Both']);
		$Head =clean($_POST['Head']);
		$Intermittent =clean($_POST['Intermittent']);
		$Constant =clean($_POST['Constant']);
		$Gradual =clean($_POST['Gradual']);
		$Sudden =clean($_POST['Sudden']);
		$Initial_Date =clean($_POST['Initial_Date']);
		$Fl_In_Volume_Yes =clean($_POST['Fl_In_Volume_Yes']);
		$Fl_In_Volume_No =clean($_POST['Fl_In_Volume_No']);
		$Description =clean($_POST['Description']);
		$T_Concentration =clean($_POST['T_Concentration']);
		$T_Sleep =clean($_POST['T_Sleep']);
		$T_Qra =clean($_POST['T_Qra']);
		$T_Work =clean($_POST['T_Work']);
		$T_Restaurents =clean($_POST['T_Restaurents']);
		$T_Sports =clean($_POST['T_Sports']);
		$T_Social =clean($_POST['T_Social']);
		$T_Other =clean($_POST['T_Other']);
		$T_Aware =clean($_POST['T_Aware']);
		$T_Annoyed =clean($_POST['T_Annoyed']);
		$T_Severity =clean($_POST['T_Severity']);
		$T_Annoyance =clean($_POST['T_Annoyance']);
		$T_EffectOnLife =clean($_POST['T_EffectOnLife']);
		$T_Comments =clean($_POST['T_Comments']);
		$T_BadDays_Yes =clean($_POST['T_BadDays_Yes']);
		$T_BadDays_No =clean($_POST['T_BadDays_No']);
		$T_None =clean($_POST['T_None']);
		$T_Louder =clean($_POST['T_Louder']);
		$T_Softer =clean($_POST['T_Softer']);
		$T_Minutes =clean($_POST['T_Minutes']);
		$T_Hours =clean($_POST['T_Hours']);
		$T_Days =clean($_POST['T_Days']);
		$T_EarProtection_Yes =clean($_POST['T_EarProtection_Yes']);
		$T_EarProtection_No =clean($_POST['T_EarProtection_No']);
		$T_PercentOfTime =clean($_POST['T_PercentOfTime']);
		$T_InQuiet_Yes =clean($_POST['T_InQuiet_Yes']);
		$T_InQuiet_No =clean($_POST['T_InQuiet_No']);
		$T_SpecificTreatment =clean($_POST['T_SpecificTreatment']);
		$T_Problem =clean($_POST['T_Problem']);
		$S_Oversensitivity_Yes =clean($_POST['S_Oversensitivity_Yes']);
		$S_Oversensitivity_No =clean($_POST['S_Oversensitivity_No']);
		$S_PhysicalDiscomfort_Yes =clean($_POST['S_PhysicalDiscomfort_Yes']);
		$S_PhysicalDiscomfort_No =clean($_POST['S_PhysicalDiscomfort_No']);
		$S_Description =clean($_POST['S_Description']);
		$S_Concerts =clean($_POST['S_Concerts']);
		$S_Shopping =clean($_POST['S_Shopping']);
		$S_Movies =clean($_POST['S_Movies']);
		$S_Work =clean($_POST['S_Work']);
		$S_Restaurants =clean($_POST['S_Restaurants']);
		$S_Driving =clean($_POST['S_Driving']);
		$S_Sports =clean($_POST['S_Sports']);
		$S_Church =clean($_POST['S_Church']);
		$S_Housekeeping =clean($_POST['S_Housekeeping']);
		$S_Childcare =clean($_POST['S_Childcare']);
		$S_Social =clean($_POST['S_Social']);
		$S_Other =clean($_POST['S_Other']);
		$S_Severity =clean($_POST['S_Severity']);
		$S_Annoyance =clean($_POST['S_Annoyance']);
		$S_EffectOnLife =clean($_POST['S_EffectOnLife']);
		$S_Comments =clean($_POST['S_Comments']);
		$S_BadDays_Yes =clean($_POST['S_BadDays_Yes']);
		$S_Frequency =clean($_POST['S_Frequency']);
		$S_None =clean($_POST['S_None']);
		$S_Stronger =clean($_POST['S_Stronger']);
		$S_Weaker =clean($_POST['S_Weaker']);
		$S_Min =clean($_POST['S_Min']);
		$S_Hours =clean($_POST['S_Hours']);
		$S_Days =clean($_POST['S_Days']);
		$S_EarProtection_Yes =clean($_POST['S_EarProtection_Yes']);
		$S_EarProtection_No =clean($_POST['S_EarProtection_No']);
		$S_PercentofTime =clean($_POST['S_PercentofTime']);
		$S_InQuiet_Yes =clean($_POST['S_InQuiet_Yes']);
		$S_InQuiet_No =clean($_POST['S_InQuiet_No']);
		$S_specificTreatment =clean($_POST['S_specificTreatment']);
		$S_Problem =clean($_POST['S_Problem']);
		$Hearing_Problem_Yes =clean($_POST['Hearing_Problem_Yes']);
		$Hearing_Problem_No =clean($_POST['Hearing_Problem_No']);
		$Hearing_Aid_Yes =clean($_POST['Hearing_Aid_Yes']);
		$Hearing_Aid_No =clean($_POST['Hearing_Aid_No']);
		$Type =clean($_POST['Type']);
		$Ever_Recommended_Yes =clean($_POST['Ever_Recommended_Yes']);
		$Ever_Recommended_No =clean($_POST['Ever_Recommended_No']);
		$Category =clean($_POST['Category']);
		$Recommendation =clean($_POST['Recommendation']);
		$Tinnitus =clean($_POST['Tinnitus']);
		$Sound_Tolerance =clean($_POST['Sound_Tolerance']);
		$Hearing =clean($_POST['Hearing']);
		$Ptn_Decision =clean($_POST['Ptn_Decision']);
		$Next_Visit =clean($_POST['Next_Visit']);
		if(submit_initial_interview_final($ID, $RE, $LE, $T_Both, $Head, $Intermittent, $Constant, $Gradual, $Sudden, $Initial_Date, $Fl_In_Volume_Yes, $Fl_In_Volume_No, $Description, $T_Concentration, $T_Sleep, $T_Qra, $T_Work, $T_Restaurents, $T_Sports, $T_Social, $T_Other, $T_Aware, $T_Annoyed, $T_Severity, $T_Annoyance, $T_EffectOnLife, $T_Comments, $T_BadDays_Yes, $T_BadDays_No, $T_None, $T_Louder, $T_Softer, $T_Minutes, $T_Hours, $T_Days, $T_EarProtection_Yes, $T_EarProtection_No, $T_PercentOfTime, $T_InQuiet_Yes, $T_InQuiet_No, $T_SpecificTreatment, $T_Problem, $S_Oversensitivity_Yes, $S_Oversensitivity_No, $S_PhysicalDiscomfort_Yes, $S_PhysicalDiscomfort_No, $S_Description, $S_Concerts, $S_Shopping, $S_Movies, $S_Work, $S_Restaurants, $S_Driving, $S_Sports, $S_Church, $S_Housekeeping, $S_Childcare, $S_Social, $S_Other, $S_Severity, $S_Annoyance, $S_EffectOnLife, $S_Comments, $S_BadDays_Yes, $S_Frequency, $S_None, $S_Stronger, $S_Weaker, $S_Min, $S_Hours, $S_Days, $S_EarProtection_Yes, $S_EarProtection_No, $S_PercentofTime, $S_InQuiet_Yes, $S_InQuiet_No, $S_specificTreatment, $S_Problem, $Hearing_Problem_Yes, $Hearing_Problem_No, $Hearing_Aid_Yes, $Hearing_Aid_No, $Type, $Ever_Recommended_Yes, $Ever_Recommended_No, $Category, $Recommendation, $Tinnitus, $Sound_Tolerance, $Hearing, $Ptn_Decision, $Next_Visit)) {
				set_message("<p class ='bg-success text-center'> Success Submitted</p>");
				redirect("initial_Interview.php");
			 }
	}
}
function submit_initial_interview_final( $RE, $LE, $T_Both, $Head, $Intermittent, $Constant, $Gradual, $Sudden, $Initial_Date, $Fl_In_Volume_Yes, $Fl_In_Volume_No, $Description, $T_Concentration, $T_Sleep, $T_Qra, $T_Work, $T_Restaurents, $T_Sports, $T_Social, $T_Other, $T_Aware, $T_Annoyed, $T_Severity, $T_Annoyance, $T_EffectOnLife, $T_Comments, $T_BadDays_Yes, $T_BadDays_No, $T_None, $T_Louder, $T_Softer, $T_Minutes, $T_Hours, $T_Days, $T_EarProtection_Yes, $T_EarProtection_No, $T_PercentOfTime, $T_InQuiet_Yes, $T_InQuiet_No, $T_SpecificTreatment, $T_Problem, $S_Oversensitivity_Yes, $S_Oversensitivity_No, $S_PhysicalDiscomfort_Yes, $S_PhysicalDiscomfort_No, $S_Description, $S_Concerts, $S_Shopping, $S_Movies, $S_Work, $S_Restaurants, $S_Driving, $S_Sports, $S_Church, $S_Housekeeping, $S_Childcare, $S_Social, $S_Other, $S_Severity, $S_Annoyance, $S_EffectOnLife, $S_Comments, $S_BadDays_Yes, $S_Frequency, $S_None, $S_Stronger, $S_Weaker, $S_Min, $S_Hours, $S_Days, $S_EarProtection_Yes, $S_EarProtection_No, $S_PercentofTime, $S_InQuiet_Yes, $S_InQuiet_No, $S_specificTreatment, $S_Problem, $Hearing_Problem_Yes, $Hearing_Problem_No, $Hearing_Aid_Yes, $Hearing_Aid_No, $Type, $Ever_Recommended_Yes, $Ever_Recommended_No, $Category, $Recommendation, $Tinnitus, $Sound_Tolerance, $Hearing, $Ptn_Decision, $Next_Visit) {
	$sql = "UPDATE initial_interview
			  SET RE='$RE',
						  LE='$LE',
						  T_Both='$T_Both',
						  Head='$Head',
						  Intermittent='$Intermittent',
						  Constant='$Constant',
						  Gradual='$Gradual',
						  Sudden='$Sudden',
						  Initial_Date='$Initial_Date',
						  Fl_In_Volume_Yes='$Fl_In_Volume_Yes',
						  Fl_In_Volume_No='$Fl_In_Volume_No',
						  Description='$Description',
						  T_Concentration='$T_Concentration',
						  T_Sleep='$T_Sleep',
						  T_Qra='$T_Qra',
						  T_Work='$T_Work',
						  T_Restaurents='$T_Restaurents',
						  T_Sports='$T_Sports',
						  T_Social='$T_Social',
						  T_Other='$T_Other',
						  T_Aware='$T_Aware',
						  T_Annoyed='$T_Annoyed',
						  T_Severity='$T_Severity',
						  T_Annoyance='$T_Annoyance',
						  T_EffectOnLife='$T_EffectOnLife',
						  T_Comments='$T_Comments',
						  T_BadDays_Yes='$T_BadDays_Yes',
						  T_BadDays_No='$T_BadDays_No',
						  T_None='$T_None',
						  T_Louder='$T_Louder',
						  T_Softer='$T_Softer',
						  T_Minutes='$T_Minutes',
						  T_Hours='$T_Hours',
						  T_Days='$T_Days',
						  T_EarProtection_Yes='$T_EarProtection_Yes',
						  T_EarProtection_No='$T_EarProtection_No',
						  T_PercentOfTime='$T_PercentOfTime',
						  T_InQuiet_Yes='$T_InQuiet_Yes',
						  T_InQuiet_No='$T_InQuiet_No',
						  T_SpecificTreatment='$T_SpecificTreatment',
						  T_Problem='$T_Problem',
						  S_Oversensitivity_Yes='$S_Oversensitivity_Yes',
						  S_Oversensitivity_No='$S_Oversensitivity_No',
						  S_PhysicalDiscomfort_Yes='$S_PhysicalDiscomfort_Yes',
						  S_PhysicalDiscomfort_No='$S_PhysicalDiscomfort_No',
						  S_Description='$S_Description',
						  S_Concerts='$S_Concerts',
						  S_Shopping='$S_Shopping',
						  S_Movies='$S_Movies',
						  S_Work='$S_Work',
						  S_Restaurants='$S_Restaurants',
						  S_Driving='$S_Driving',
						  S_Sports='$S_Sports',
						  S_Church='$S_Church',
						  S_Housekeeping='$S_Housekeeping',
						  S_Childcare='$S_Childcare',
						  S_Social='$S_Social',
						  S_Other='$S_Other',
						  S_Severity='$S_Severity',
						  S_Annoyance='$S_Annoyance',
						  S_EffectOnLife='$S_EffectOnLife',
						  S_Comments='$S_Comments',
						  S_BadDays_Yes='$S_BadDays_Yes',
						  S_Frequency='$S_Frequency',
						  S_None='$S_None',
						  S_Stronger='$S_Stronger',
						  S_Weaker='$S_Weaker',
						  S_Min='$S_Min',
						  S_Hours='$S_Hours',
						  S_Days='$S_Days',
						  S_EarProtection_Yes='$S_EarProtection_Yes',
						  S_EarProtection_No='$S_EarProtection_No',
						  S_PercentofTime='$S_PercentofTime',
						  S_InQuiet_Yes='$S_InQuiet_Yes',
						  S_InQuiet_No='$S_InQuiet_No',
						  S_specificTreatment='$S_specificTreatment',
						  S_Problem='$S_Problem',
						  Hearing_Problem_Yes='$Hearing_Problem_Yes',
						  Hearing_Problem_No='$Hearing_Problem_No',
						  Hearing_Aid_Yes='$Hearing_Aid_Yes',
						  Hearing_Aid_No='$Hearing_Aid_No',
						  Type='$Type',
						  Ever_Recommended_Yes='$Ever_Recommended_Yes',
						  Ever_Recommended_No='$Ever_Recommended_No',
						  Category='$Category',
						  Recommendation='$Recommendation',
						  Tinnitus='$Tinnitus',
						  Sound_Tolerance='$Sound_Tolerance',
						  Hearing='$Hearing',
						  Ptn_Decision='$Ptn_Decision',
						  Next_Visit='$Next_Visit'";		
	$result = query($sql);
	confirm($result);
	return true;

}


function validate_submit_followup_interview_final(){
	if($_SERVER['REQUEST_METHOD'] == "POST") {
		$thc_no =clean($_POST['thc_no']);
		$visit_id =clean($_POST['visit_id']);
		$Changes_Yes =clean($_POST['Changes_Yes']);
		$Changes_No =clean($_POST['Changes_No']);
		$T_B_Concentration =clean($_POST['T_B_Concentration']);
		$T_A_Concentratiion =clean($_POST['T_A_Concentratiion']);
		$T_B_Sleep =clean($_POST['T_B_Sleep']);
		$T_A_Sleep =clean($_POST['T_A_Sleep']);
		$T_B_QRA =clean($_POST['T_B_QRA']);
		$T_A_QRA =clean($_POST['T_A_QRA']);
		$T_B_Work =clean($_POST['T_B_Work']);
		$T_A_Work =clean($_POST['T_A_Work']);
		$T_B_Restaurants =clean($_POST['T_B_Restaurants']);
		$T_A_Restaurants =clean($_POST['T_A_Restaurants']);
		$T_B_Sports =clean($_POST['T_B_Sports']);
		$T_A_Sports =clean($_POST['T_A_Sports']);
		$T_B_Social =clean($_POST['T_B_Social']);
		$T_A_Social =clean($_POST['T_A_Social']);
		$T_B_Other =clean($_POST['T_B_Other']);
		$T_A_Other =clean($_POST['T_A_Other']);
		$T_Aware =clean($_POST['T_Aware']);
		$T_Annoyed =clean($_POST['T_Annoyed']);
		$T_Changed_Yes =clean($_POST['T_Changed_Yes']);
		$T_Changed_No =clean($_POST['T_Changed_No']);
		$T_Severity =clean($_POST['T_Severity']);
		$T_Annoyance =clean($_POST['T_Annoyance']);
		$T_EffectONLife =clean($_POST['T_EffectONLife']);
		$T_Comments =clean($_POST['T_Comments']);
		$T_BadDays_Yes =clean($_POST['T_BadDays_Yes']);
		$T_BadDays_No =clean($_POST['T_BadDays_No']);
		$T_Frequency =clean($_POST['T_Frequency']);
		$T_FR =clean($_POST['T_FR']);
		$T_asBad =clean($_POST['T_asBad']);
		$T_None =clean($_POST['T_None']);
		$T_Louder =clean($_POST['T_Louder']);
		$T_Softer =clean($_POST['T_Softer']);
		$T_Min =clean($_POST['T_Min']);
		$T_Hours =clean($_POST['T_Hours']);
		$T_Days =clean($_POST['T_Days']);
		$T_EarProtection_Yes =clean($_POST['T_EarProtection_Yes']);
		$T_EarProtection_No =clean($_POST['T_EarProtection_No']);
		$T_InQuite_Yes =clean($_POST['T_InQuite_Yes']);
		$T_InQuiet_No =clean($_POST['T_InQuiet_No']);
		$T_PercentOftime =clean($_POST['T_PercentOftime']);
		$T_Treatment =clean($_POST['T_Treatment']);
		$S_Description =clean($_POST['S_Description']);
		$S_Changes =clean($_POST['S_Changes']);
		$S_B_Concerts =clean($_POST['S_B_Concerts']);
		$S_A_Concerts =clean($_POST['S_A_Concerts']);
		$S_B_Shopping =clean($_POST['S_B_Shopping']);
		$S_A_Shopping =clean($_POST['S_A_Shopping']);
		$S_B_Movies =clean($_POST['S_B_Movies']);
		$S_A_Movies =clean($_POST['S_A_Movies']);
		$S_B_Work =clean($_POST['S_B_Work']);
		$S_A_Work =clean($_POST['S_A_Work']);
		$S_B_Restaurant =clean($_POST['S_B_Restaurant']);
		$S_A_Restaurant =clean($_POST['S_A_Restaurant']);
		$S_B_Driving =clean($_POST['S_B_Driving']);
		$S_A_Driving =clean($_POST['S_A_Driving']);
		$S_B_Sports =clean($_POST['S_B_Sports']);
		$S_A_Sports =clean($_POST['S_A_Sports']);
		$S_B_Church =clean($_POST['S_B_Church']);
		$S_A_Church =clean($_POST['S_A_Church']);
		$S_B_Housekeeping =clean($_POST['S_B_Housekeeping']);
		$S_A_Housekeeping =clean($_POST['S_A_Housekeeping']);
		$S_B_Childcare =clean($_POST['S_B_Childcare']);
		$S_A_Childcare =clean($_POST['S_A_Childcare']);
		$S_B_Social =clean($_POST['S_B_Social']);
		$S_A_Social =clean($_POST['S_A_Social']);
		$S_B_Other =clean($_POST['S_B_Other']);
		$S_A_Other =clean($_POST['S_A_Other']);
		$S_Severity =clean($_POST['S_Severity']);
		$S_Annoyance =clean($_POST['S_Annoyance']);
		$S_EffectOnLife =clean($_POST['S_EffectOnLife']);
		$S_Comments =clean($_POST['S_Comments']);
		$S_BadDays_Yes =clean($_POST['S_BadDays_Yes']);
		$S_BadDays_No =clean($_POST['S_BadDays_No']);
		$S_Frequency =clean($_POST['S_Frequency']);
		$S_asFrequent =clean($_POST['S_asFrequent']);
		$S_asbad =clean($_POST['S_asbad']);
		$S_None =clean($_POST['S_None']);
		$S_Stronger =clean($_POST['S_Stronger']);
		$S_Weaker =clean($_POST['S_Weaker']);
		$S_Min =clean($_POST['S_Min']);
		$S_Hours =clean($_POST['S_Hours']);
		$S_Days =clean($_POST['S_Days']);
		$S_EarProtection_Yes =clean($_POST['S_EarProtection_Yes']);
		$S_EarProtection_No =clean($_POST['S_EarProtection_No']);
		$S_InQuite_Yes =clean($_POST['S_InQuite_Yes']);
		$S_InQuiet_No =clean($_POST['S_InQuiet_No']);
		$S_Treatment =clean($_POST['S_Treatment']);
		$Hearing_Problem_Yes =clean($_POST['Hearing_Problem_Yes']);
		$Hearing_Problem_No =clean($_POST['Hearing_Problem_No']);
		$Recommendation =clean($_POST['Recommendation']);
		$General =clean($_POST['General']);
		$Same =clean($_POST['Same']);
		$Better =clean($_POST['Better']);
		$Worse =clean($_POST['Worse']);
		$Tinnitus =clean($_POST['Tinnitus']);
		$Sound_Tolerance =clean($_POST['Sound_Tolerance']);
		$Hearing =clean($_POST['Hearing']);
		$Next_Visit =clean($_POST['Next_Visit']);
		$Instruments =clean($_POST['Instruments']);
		$Program_Yes =clean($_POST['Program_Yes']);
		$Program_No =clean($_POST['Program_No']);
		$Program_NS =clean($_POST['Program_NS']);
		$Discussion =clean($_POST['Discussion']);
		if(submit_followup_interview_final($thc_no, $visit_id, $Changes_Yes, $Changes_No, $T_B_Concentration, $T_A_Concentratiion, $T_B_Sleep, $T_A_Sleep, $T_B_QRA, $T_A_QRA, $T_B_Work, $T_A_Work, $T_B_Restaurants, $T_A_Restaurants, $T_B_Sports, $T_A_Sports, $T_B_Social, $T_A_Social, $T_B_Other, $T_A_Other, $T_Aware, $T_Annoyed, $T_Changed_Yes, $T_Changed_No, $T_Severity, $T_Annoyance, $T_EffectONLife, $T_Comments, $T_BadDays_Yes, $T_BadDays_No, $T_Frequency, $T_FR, $T_asBad, $T_None, $T_Louder, $T_Softer, $T_Min, $T_Hours, $T_Days, $T_EarProtection_Yes, $T_EarProtection_No, $T_InQuite_Yes, $T_InQuiet_No, $T_PercentOftime, $T_Treatment, $S_Description, $S_Changes, $S_B_Concerts, $S_A_Concerts, $S_B_Shopping, $S_A_Shopping, $S_B_Movies, $S_A_Movies, $S_B_Work, $S_A_Work, $S_B_Restaurant, $S_A_Restaurant, $S_B_Driving, $S_A_Driving, $S_B_Sports, $S_A_Sports, $S_B_Church, $S_A_Church, $S_B_Housekeeping, $S_A_Housekeeping, $S_B_Childcare, $S_A_Childcare, $S_B_Social, $S_A_Social, $S_B_Other, $S_A_Other, $S_Severity, $S_Annoyance, $S_EffectOnLife, $S_Comments, $S_BadDays_Yes, $S_BadDays_No, $S_Frequency, $S_asFrequent, $S_asbad, $S_None, $S_Stronger, $S_Weaker, $S_Min, $S_Hours, $S_Days, $S_EarProtection_Yes, $S_EarProtection_No, $S_InQuite_Yes, $S_InQuiet_No, $S_Treatment, $Hearing_Problem_Yes, $Hearing_Problem_No, $Recommendation, $General, $Same, $Better, $Worse, $Tinnitus, $Sound_Tolerance, $Hearing, $Next_Visit, $Instruments, $Program_Yes, $Program_No, $Program_NS, $Discussion)) {
		set_message("<p class ='bg-success text-center'> Success Submitted</p>");
		redirect("follow_up_Interview.php");
	}
	}
}
function submit_followup_interview_final($thc_no, $visit_id, $Changes_Yes, $Changes_No, $T_B_Concentration, $T_A_Concentratiion, $T_B_Sleep, $T_A_Sleep, $T_B_QRA, $T_A_QRA, $T_B_Work, $T_A_Work, $T_B_Restaurants, $T_A_Restaurants, $T_B_Sports, $T_A_Sports, $T_B_Social, $T_A_Social, $T_B_Other, $T_A_Other, $T_Aware, $T_Annoyed, $T_Changed_Yes, $T_Changed_No, $T_Severity, $T_Annoyance, $T_EffectONLife, $T_Comments, $T_BadDays_Yes, $T_BadDays_No, $T_Frequency, $T_FR, $T_asBad, $T_None, $T_Louder, $T_Softer, $T_Min, $T_Hours, $T_Days, $T_EarProtection_Yes, $T_EarProtection_No, $T_InQuite_Yes, $T_InQuiet_No, $T_PercentOftime, $T_Treatment, $S_Description, $S_Changes, $S_B_Concerts, $S_A_Concerts, $S_B_Shopping, $S_A_Shopping, $S_B_Movies, $S_A_Movies, $S_B_Work, $S_A_Work, $S_B_Restaurant, $S_A_Restaurant, $S_B_Driving, $S_A_Driving, $S_B_Sports, $S_A_Sports, $S_B_Church, $S_A_Church, $S_B_Housekeeping, $S_A_Housekeeping, $S_B_Childcare, $S_A_Childcare, $S_B_Social, $S_A_Social, $S_B_Other, $S_A_Other, $S_Severity, $S_Annoyance, $S_EffectOnLife, $S_Comments, $S_BadDays_Yes, $S_BadDays_No, $S_Frequency, $S_asFrequent, $S_asbad, $S_None, $S_Stronger, $S_Weaker, $S_Min, $S_Hours, $S_Days, $S_EarProtection_Yes, $S_EarProtection_No, $S_InQuite_Yes, $S_InQuiet_No, $S_Treatment, $Hearing_Problem_Yes, $Hearing_Problem_No, $Recommendation, $General, $Same, $Better, $Worse, $Tinnitus, $Sound_Tolerance, $Hearing, $Next_Visit, $Instruments, $Program_Yes, $Program_No, $Program_NS, $Discussion) {
	$sql = "UPDATE follow_up_interview
			   
			   SET  thc_no='$thc_no',
			   visit_id='$visit_id',
			   Changes_Yes='$Changes_Yes',
			   Changes_No='$Changes_No',
			   T_B_Concentration='$T_B_Concentration',
			   T_A_Concentratiion='$T_A_Concentratiion',
			   T_B_Sleep='$T_B_Sleep',
			   T_A_Sleep='$T_A_Sleep',
			   T_B_QRA='$T_B_QRA',
			   T_A_QRA='$T_A_QRA',
			   T_B_Work='$T_B_Work',
			   T_A_Work='$T_A_Work',
			   T_B_Restaurants='$T_B_Restaurants',
			   T_A_Restaurants='$T_A_Restaurants',
			   T_B_Sports='$T_B_Sports',
			   T_A_Sports='$T_A_Sports',
			   T_B_Social='$T_B_Social',
			   T_A_Social='$T_A_Social',
			   T_B_Other='$T_B_Other',
			   T_A_Other='$T_A_Other',
			   T_Aware='$T_Aware',
			   T_Annoyed='$T_Annoyed',
			   T_Changed_Yes='$T_Changed_Yes',
			   T_Changed_No='$T_Changed_No',
			   T_Severity='$T_Severity',
			   T_Annoyance='$T_Annoyance',
			   T_EffectONLife='$T_EffectONLife',
			   T_Comments='$T_Comments',
			   T_BadDays_Yes='$T_BadDays_Yes',
			   T_BadDays_No='$T_BadDays_No',
			   T_Frequency='$T_Frequency',
			   T_FR='$T_FR',
			   T_asBad='$T_asBad',
			   T_None='$T_None',
			   T_Louder='$T_Louder',
			   T_Softer='$T_Softer',
			   T_Min='$T_Min',
			   T_Hours='$T_Hours',
			   T_Days='$T_Days',
			   T_EarProtection_Yes='$T_EarProtection_Yes',
			   T_EarProtection_No='$T_EarProtection_No',
			   T_InQuite_Yes='$T_InQuite_Yes',
			   T_InQuiet_No='$T_InQuiet_No',
			   T_PercentOftime='$T_PercentOftime',
			   T_Treatment='$T_Treatment',
			   S_Description='$S_Description',
			   S_Changes='$S_Changes',
			   S_B_Concerts='$S_B_Concerts',
			   S_A_Concerts='$S_A_Concerts',
			   S_B_Shopping='$S_B_Shopping',
			   S_A_Shopping='$S_A_Shopping',
			   S_B_Movies='$S_B_Movies',
			   S_A_Movies='$S_A_Movies',
			   S_B_Work='$S_B_Work',
			   S_A_Work='$S_A_Work',
			   S_B_Restaurant='$S_B_Restaurant',
			   S_A_Restaurant='$S_A_Restaurant',
			   S_B_Driving='$S_B_Driving',
			   S_A_Driving='$S_A_Driving',
			   S_B_Sports='$S_B_Sports',
			   S_A_Sports='$S_A_Sports',
			   S_B_Church='$S_B_Church',
			   S_A_Church='$S_A_Church',
			   S_B_Housekeeping='$S_B_Housekeeping',
			   S_A_Housekeeping='$S_A_Housekeeping',
			   S_B_Childcare='$S_B_Childcare',
			   S_A_Childcare='$S_A_Childcare',
			   S_B_Social='$S_B_Social',
			   S_A_Social='$S_A_Social',
			   S_B_Other='$S_B_Other',
			   S_A_Other='$S_A_Other',
			   S_Severity='$S_Severity',
			   S_Annoyance='$S_Annoyance',
			   S_EffectOnLife='$S_EffectOnLife',
			   S_Comments='$S_Comments',
			   S_BadDays_Yes='$S_BadDays_Yes',
			   S_BadDays_No='$S_BadDays_No',
			   S_Frequency='$S_Frequency',
			   S_asFrequent='$S_asFrequent',
			   S_asbad='$S_asbad',
			   S_None='$S_None',
			   S_Stronger='$S_Stronger',
			   S_Weaker='$S_Weaker',
			   S_Min='$S_Min',
			   S_Hours='$S_Hours',
			   S_Days='$S_Days',
			   S_EarProtection_Yes='$S_EarProtection_Yes',
			   S_EarProtection_No='$S_EarProtection_No',
			   S_InQuite_Yes='$S_InQuite_Yes',
			   S_InQuiet_No='$S_InQuiet_No',
			   S_Treatment='$S_Treatment',
			   Hearing_Problem_Yes='$Hearing_Problem_Yes',
			   Hearing_Problem_No='$Hearing_Problem_No',
			   Recommendation='$Recommendation',
			   General='$General',
			   Same='$Same',
			   Better='$Better',
			   Worse='$Worse',
			   Tinnitus='$Tinnitus',
			   Sound_Tolerance='$Sound_Tolerance',
			   Hearing='$Hearing',
			   Next_Visit='$Next_Visit',
			   Instruments='$Instruments',
			   Program_Yes='$Program_Yes',
			   Program_No='$Program_No',
			   Program_NS='$Program_NS',
			   Discussion='$Discussion'
			WHERE visit_id ='".escape($_SESSION['visit_id'])."'";		
	$result = query($sql);
	confirm($result);
	return true;
}


?>
