<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Submit a ticket to CCA Facilities</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<meta name="description" content="" />
<link rel="stylesheet" type="text/css" media="all" href="include/technology.css" />
<script type="text/javascript" language="javascript" src="include/nav.js"></script>
<script type="text/javascript" language="javascript" charset="utf-8" src="include/facilities.js"></script>
<link rel="shortcut icon" href="http://www.cca.edu/sites/all/themes/cca_responsive/favicon.ico" type="image/vnd.microsoft.icon">
</head>

<body>
<div id="content-top"> </div>
<div id="page">



<div id="content-section">

<!----- Start Page Content ----->
<h1>Submit a ticket to CCA Facilities</h1>
<p>
<?php
// Set form variables
$firstname = $_REQUEST['firstname'];
$lastname = $_REQUEST['lastname'];
$username = $_REQUEST['username'];
$areacode = $_REQUEST['areacode'];
$prefix = $_REQUEST['prefix'];
$linenumber = $_REQUEST['linenumber'];
$campus = $_REQUEST['campus'];
$bldg = $_REQUEST['bldg'];
$room = $_REQUEST['room'];
$start = $_REQUEST['start'];
$subject = $_REQUEST['subject'];
$comments = $_REQUEST['comments'];

// Use the stripslashes function to display any variables containing possible outputs with an apostrophe
$echo_firstname = stripslashes($firstname);
$echo_lastname =  stripslashes($lastname);
$echo_bldg = stripslashes($bldg);
$echo_room = stripslashes($room);
$echo_start = stripslashes($start);
$echo_subject = stripslashes($subject);
$echo_comments = stripslashes($comments);

// Display empty form when fields contain no values (i.e, when page is loaded)
if (!isset($firstname)){
	echo ('<form name="ticket" action="'.$_SERVER["PHP_SELF"].'" method="post">');
	echo "<p>To submit a ticket to the CCA Facilities department, fill out the form below.  Please include as much information about your issue as possible, as this will aid in a quick resolution.<br><br><i>(<b><font color='Red'>*</font></b> = required field)</i><br><br></p>";
	echo ('<p><b>First name: </b><input type="text" name="firstname" size="12" maxlength="30" title="example: John"/><b><font color="Red">*</font></b><br><br>
	<b>Last name: </b><input type="text" name="lastname" size="12" maxlength="30" title="example: Smith"/><b><font color="Red">*</font></b><br><br>
	<b>CCA username: </b><input type="text" name="username" size="12" maxlength="30" title="example: jsmith"/>@cca.edu<b><font color="Red">*</font></b><br>(If you don\'t have a CCA email account, please contact the Helpdesk at 510.594.5010)<br><br>
	<b>Phone number: </b><input type="text" name="areacode" size="3" maxlength="3" title="example: 510"/>&nbsp;<b>.</b>&nbsp;<input type="text" name="prefix" size="3" maxlength="3" title="example: 594"/>&nbsp;<b>.</b>&nbsp;<input type="text" name="linenumber" size="4" maxlength="4" title="example: 5010"/><b><font color="Red">*</font></b><br><br>
	<b>Campus: <font color="Red">*</font></b><br>
	<input type="radio" name="campus" value="Oakland" onclick="bldgSelect(1)"/>Oakland<br>
	<input type="radio" name="campus" value="San Francisco" onclick="bldgSelect(2)"/>San Francisco<br><br>
	<b>Building: <font color="Red">*</font></b><br><select name="bldg" value="">
	<option size="15">Select building</option>
	</select><br><br>
	<b>Room/Area: <font color="Red">*</font></b><br><input type="text" name="room" size="12" maxlength="30" title="examples: Room 123, Hooper Courtyard"/><b><font color="Red"></font></b><br><br>
	<b>When problem began: <font color="Red">*</font></b><br><input type="text" name="start" size="20" maxlength="100" title="examples: about 10 mins ago, March 10, 2:00 PM"/><br><br>
	<b>One-line description of the issue: <font color="Red">*</font></b><br><input type="text" name="subject" size="25" maxlength="100" title="example: Elevator in 80 Carolina is broken"/><br><br>
	<b>Describe the issue: <font color="Red">*</font></b><br><textarea class="messagebox" rows="10" cols="35" style="font-size:11px" name="comments" title="example: Help! The elevator in 80 Carolina is not working."></textarea><br><br>
	<input type="submit" name="submit" value="Submit">&nbsp;&nbsp;<input type="reset" value="Reset Form"></p>
	</form>');
	}

// If all required form values are met, submit to Facilities
elseif ($firstname!=NULL && $lastname!=NULL && $username!=NULL && $areacode!=NULL && $prefix!=NULL && $linenumber!=NULL && $campus!=NULL && $bldg!=NULL && $room!=NULL && $start!=NULL && $subject!=NULL && $comments!=NULL){

	// Set form destination variables
	while ($campus == "Oakland"){
		$to = "facilities-oak@cca.edu";
		break;
	}
	while($campus == "San Francisco"){
		$to = "facilities-sf@cca.edu";
		break;
	}
	$from = "$username@cca.edu";
	//$headers .= "Content-Type: text/plain; charset=iso-8859-1\n";
	$headers = "From: $from";

	// Check to see whether user has input illegal symbols in the username field
	if (!preg_match('/^[-._a-z0-9]+$/i',$username)) {
		echo "The username field should only contain your first initial followed by your last name (for exampleuser@cca.edu, enter 'exampleuser' in the field).<br>Please click the Back button and correct the form.";
	}
	else{
		mail ($to, $echo_subject.'  '.$bldg.'  '.$room, "***\nName of Requestor- $echo_firstname $echo_lastname \nPhone Number- $areacode.$prefix.$linenumber \nCampus- $campus \nBuilding- $echo_bldg \nRoom- $echo_room \nWhen problem began- $echo_start \nBody- \n$echo_comments", $headers);
		echo "<strong>Thank you!  Your request has been submitted to the CCA Facilities department in $campus!</strong><br /><br />You will receive an email confirmation at $username@cca.edu once your request has been received.";
		}
	}

// Display error page if any form requirements are missing
else{
	echo "Form is incomplete!  Click the Back button and enter all required fields!";
	}
?>
</p>

</div>
</body>
</html>
