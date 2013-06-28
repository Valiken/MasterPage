		<?php
		//setup parameters
				
		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'] ;
		$subject = 'Enquiry from your site';
		$company = $_REQUEST['company'];
		$message = $_REQUEST['comment'] ;
		mail("dachsund@dslextreme.com", $subject,
		$message, "From:" . $email);
		echo "Thank you for using our mail form!";		
		?>