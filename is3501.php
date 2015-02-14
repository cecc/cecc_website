
<?php

$name = $_REQUEST['fullname'];
$phone = $_REQUEST['phone'];
$ucid = $_REQUEST['ucid'];
$major = $_REQUEST['major'];
$level = $_REQUEST['level'];
$experience = $_REQUEST['experience'];
$contribute = $_REQUEST['contribute'];


$startMonday = $_REQUEST['startMonday'];
$endMonday = $_REQUEST['endMonday'];
$startTuesday = $_REQUEST['startTuesday'];
$endTuesday = $_REQUEST['endTuesday'];
$startWednesday = $_REQUEST['startWednesday'];
$endWednesday = $_REQUEST['endWednesday'];
$startThursday = $_REQUEST['startThursday'];
$endThursday = $_REQUEST['endThursday'];
$startFriday = $_REQUEST['startFriday'];
$endFriday = $_REQUEST['endFriday'];
$startSaturday = $_REQUEST['startSaturday'];
$endSaturday = $_REQUEST['endSaturday'];


$transportation = $_REQUEST['transportation'];
$honors = $_REQUEST['honors'];



$message = "<h1>IS350 - " . $name ."</h1><hr>";
$message .= "<p><strong>Full Name: </strong> " . $name ."</p>";
$message .= "<p><strong>UCID / Email: </strong> " . $ucid ."</p>";
$message .= "<p><strong>Phone Number: </strong> " . $phone ."</p>";
$message .= "<p><strong>Year Level: </strong> " . $level ."</p>";
$message .= "<p><strong>Major: </strong> " . $major ."</p><hr>";
$message .= "<p><strong>What are your experiences with web develop or computer programming ?</strong><br> " . $experience ."</p><hr>";
$message .= "<p><strong>What do you hope to contribute to this community service experience and what do you hope to gain from this community service assignment? ?</strong><br> " . $contribute ."</p><hr>";

$message .= "<p><strong>Do you have your own transportation ? </strong><br> " . $transportation ."</p><hr>";

$message .= "
			<h2>Student Schedule</h2>
			<table border='1'>
				<tr>
					<td></td>
					<td>Start Time</td>
					<td>End Time</td>
				</tr>
				<tr>
					<td>Monday</td>
					<td>" . $startMonday ."</td>
					<td>" . $endMonday ."</td>
				</tr>
				<tr>
					<td>Tuesday</td>
					<td>" . $startTuesday ."</td>
					<td>" . $endTuesday ."</td>
				</tr>
				<tr>
					<td>Wednesday</td>
					<td>" . $startWednesday ."</td>
					<td>" . $endWednesday ."</td>
				</tr>
				<tr>
					<td>Thursday</td>
					<td>" . $startThursday ."</td>
					<td>" . $endThursday ."</td>
				</tr>
				<tr>
					<td>Friday</td>
					<td>" . $startFriday ."</td>
					<td>" . $endFriday ."</td>
				</tr>
				<tr>
					<td>Saturday</td>
					<td>" . $startSaturday ."</td>
					<td>" . $endSaturday ."</td>
				</tr>
			</table>
			<br> <br>";

$message .= "<p><a href=\"http://cecc.njit.edu/beta/IS350SignUp.html\"> Click here to go back to the CECC site </a></p>";

$headers = "From: " . $ucid . "\r\n";
$headers .= "Reply-To: cecc@njit.edu \r\n";
$headers .= "CC: susan@example.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$to = 'cecc@njit.edu';

$subject = 'IS350 - Student Application';

mail($to, $subject, $message, $headers);


echo $message; 

?>
