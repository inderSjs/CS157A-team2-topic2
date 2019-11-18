<?php
$con =  mysqli_connect('localhost', 'root','','login_db');


//function to count the row of all the records inside our table
function row_count($result) {
	return mysqli_num_rows($result);

}
function escape($string) {
	global $con;
	return mysqli_real_escape_string($con, $string);

}
//performs a query on the database
function query($query) {
	global $con;
	return mysqli_query($con, $query);
}

//confirm function
function confirm($result) {
	global $con;
	if(!$result) {
		die("Query failed!". mysqli_error($con));
	}
}
//grab the result and fetch for us, fetch all data. 
function fetch_array($result) {
	global $con;
	return mysqli_fetch_array($result);
}


?>