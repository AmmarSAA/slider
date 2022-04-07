<?php

/********************************
* 	File Name: functions.php  	*
* 	Author: Ammar S.A.A       	*
* 	Output: Functions 			*
* 	Content: Functions for 		*
* 	1 . GetUsers 				*
* 	2 . GetTotalSearchResult 	*
* 	3 . GetTotal 				*
* 	4 . redirect 				*
* 	5 . IfIsUser 				*
* 	6 . IfExist 				*
* 	7 . GetTotalWhere 			*
* 	8 . GetTotalWhereAnd 		*
* 	9 . GetStatus 				*
********************************/

/*
1. Get User List
@Author:	Syed Ammar Ahmed
@Date:		18-Apr-2020
@input:		Database connection
@outout:	Array list of users 
*/

function GetUsers($conn)
{
	echo $sql = "SELECT id,full_name FROM tblusers";
	$result = $conn->query($sql);
	return $result;
}

/*
2. Get Total Of Search Results.
@Author:	Syed Ammar Ahmed
@Date:		7-Jul-2020
@input:		Database connection, Search, Search Result
@outout:	Total no. of Search Results
*/

function GetTotalSearchResult($conn,$result,$search)
{
	$result = mysqli_num_rows($result);
	echo "Found <b>".$search."</b> in <b>".$result."</b> ";
	if ($result = 1) {
		echo "row.";
	}else{ echo "rows.";}											
}

/*
3. Get Total No. Of Record(s) Found In A Table.
@Author:	Syed Ammar Ahmed
@Date:		7-Jul-2020
@input:		Database connection,Tables
@outout:	Total no. of record(s) found in a table
*/

function GetTotal($conn, $tblname)
{
	$sql = "SELECT * FROM $tblname";
    $result = $conn->query($sql);
    $result = mysqli_num_rows($result);

    return  ($result);
}

/*
4. Redirect
@Author:	Syed Ammar Ahmed
@Date:		25-Jul-2020
@input:		Database connection
@outout:	Redirect 
*/

function redirect($location)
{
    header("Location:".WEBSITE_URL. $location);
    exit;
}

/*
5. Get If User?
@Author:	Syed Ammar Ahmed
@Date:		28-Jul-2020
@input:		Database connection
@outout:	YES or NO 
*/

function IfIsUser($conn)
{
	if (isset($_SESSION['user_name'])) {
		$sql = "SELECT * FROM tblusers WHERE user_name = '{$_SESSION['user_name']}' ";
	    $result = $conn->query($sql);
		if ($result &&  $result->num_rows > 0){
			return true;
		}
		return false;
	}
}

/*
6. Get If Exist?
@Author:	Syed Ammar Ahmed
@Date:		28-Jul-2020
@input:		Database connection, Table,
@outout:	YES or NO 
*/

function IfExist($tblname, $column, $value)
{
	GLOBAL $conn;

	$sql = "SELECT * FROM $tblname WHERE $column = '{$value}' ";
    $result = $conn->query($sql);
	if ($result &&  $result->num_rows > 0){
		return true;
	}
	return false;
}

/*
7. Get Total No. Of Record(s) Found In A Table.
@Author:	Syed Ammar Ahmed
@Date:		8-Aug-2020
@input:		Database connection,Table, Column, Col-Value
@outout:	Total no. of record(s) found in a table
*/

function GetTotalWhere($conn, $tblname, $column, $value)
{
	$sql = "SELECT * FROM $tblname WHERE $column='{$value}'";
    $result = $conn->query($sql);
    $result = mysqli_num_rows($result);

    return  ($result);
}

/*
8. Get Total No. Of Record(s) Found In A Table.
@Author:	Syed Ammar Ahmed
@Date:		1-Sep-2020
@input:		Database connection,Table, Column, Col-Value
@outout:	Total no. of record(s) found in a table
*/

function GetTotalWhereAnd($conn, $tblname, $column, $value, $column_and, $value_and)
{
	$sql = "SELECT * FROM $tblname WHERE $column='{$value}' AND $column_and=$value_and";
    $result = $conn->query($sql);
    $result = mysqli_num_rows($result);

    return  ($result);
}

/*
9. Get Status
@Author:	Syed Ammar Ahmed
@Date:		29-Jan-2022
@input:		Row
@outout:	Status in String Format 
*/

function GetStatus($status)
{
GLOBAL $row;

	switch ($status) {
		case '0':
			echo "Inactive";
			break;
		case '1':
			echo "Active";
			break;

		default:
			echo "Error";
			break;
	}

}

/*
23. Check If Session started.
@Author:	Syed Ammar Ahmed
@Date:		14-Oct-2020
@input:		Database connection,Table, Column, Col-Value
@outout:	Total no. of record(s) found in a table
*/

function GetIfSessionStarted($conn, $SESSION)
{
	if(empty($_SESSION['user_name'])){ $msg = "<div class='alert alert-danger strong'>Please Sign In.</div>"; }
	echo $msg;
}