<?php

if(isset($_REQUEST['contactformid']) && $_REQUEST['contactformid'] == 1){
	
	//$youremail = "neerienvis@neerienvis.byethost3.com"; // Enter your email here!!
	
	$youremail = "neerienvis@neerienvis.uphero.com"; // Enter your email here!!

	$usersname = $_POST["usersname"];
	$usersemail = $_POST["usersemail"];
	$usersphonenumber = $_POST["usersphonenumber"];
	$usersmessage = $_POST["usersmessage"];
	$subject = 'Message From ENVIS Contact Form';
	$message =  '<p>'.$usersname.' has contacted you from your site.</p></br>
				<p><b>Their Message is as follows:</b></p></br>
				<p>'.$usersmessage.'</p></br>
				<p><b>Contact details:</b></p></br>
				<p>Phone Number: '.$usersphonenumber.'</p></br>
				<p>Email Address: '.$usersemail.'</p>'; 
                
	$from="From: $usersname<$usersemail>\r\nReturn-path: $usersemail<$usersemail>CC: envis<neeri-env@nic.in>\r\nContent-type: text/html\r\n";  
	
	mail($youremail, $subject, $message, $from);
	
	echo '<p>Thank you for your email, a member of our ENVIS staff will contact you soon regarding your email!</p>';
	
} else {
	echo '<p>Form could not be sent, please try again!</p>';
}

?>