<?php

if(isset($_POST['hidden_val']))
{	
	$name=$_POST['name'];
	$phone=$_POST['phone'];
	// $fax=$_POST['fax'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$to = "vannammahesh000@gmail.com, shsglobalsolutions@gmail.com, sriranganadh63@gmail.com";
	$subject = "Business Tech Mail Box";
	$message = "
	<html>
		<head>
			<title>HTML email</title>
		</head>
		<body>
			<p>This email contains HTML Tags!</p>
			<table>
			
					<tr>
                        <td width='250'>Your Name</td>
                        <td width='50'> : </td>
                        <td width='350'>" . $name . "</td>
                    </tr>
			
					<tr>
                        <td>Phone</td>
                        <td> : </td>
                        <td>" . $phone . "</td>
                    </tr>
					
					
                        <td>Email Address</td>
                        <td> : </td>
                        <td>" . $email . "</td>
                    </tr>
					
					<tr>
                        <td>Message</td>
                        <td> : </td>
                        <td>" . $address . "</td>
                    </tr>
		</table>
		</body>
	</html>
	";
	
	// Always set content-type when sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	// More headers
	$headers .= 'From: '. $email . "\r\n";
	$headers .= 'Cc: vannammahesh000@gmail.com' . "\r\n";
	//echo "success";

		
	if(mail($to,$subject,$message,$headers)){
		echo true;
		
	}
	else{
		echo false;
		
	}
	//echo "success";
	
}