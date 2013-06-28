<html>
<head>
	<title>
		<?php echo $page_title; ?>
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Brian Berg">
	<link href="css/bootstrap.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <style>  

    </style>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link rel="shortcut icon" href="img/favicon.ico" />
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv/dist/html5shiv.js"></script>
    <![endif]-->
</head>
<body>
    <!-- Main site content begin -->
    <div id="warp">

        <div class="container" id="main">

    	<?php include('menu.php'); ?>

        <?php
            $to = 'dachsund@dslextreme.com';
            $subject = 'Contact from bnberg.com';
            $contact_submitted = 'Your message has been sent.';

            // Do not amend anything below here, unless you know PHP
            function email_is_valid($email) {
                return preg_match('/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i',$email);
            }
            
            if (!email_is_valid($to)) {
                echo '<p style="color: red;">You must set-up a valid (to) email address before this contact page will work.</p>';
            }
            
            if (isset($_POST['contact_submitted'])) {
                $return = "\r";
                $youremail = trim(htmlspecialchars($_POST['your_email']));
                $yourname = stripslashes(strip_tags($_POST['your_name']));
                $yourcompany = stripslashes(strip_tags($_POST['your_company']));
                $yourmessage = stripslashes(strip_tags($_POST['your_message']));
                $contact_name = "Name: ".$yourname;
                $message_text = "Message: ".$yourmessage;
                $copany_name = "Company: ".$yourcompany;
                
                $message = $contact_name . $return . $copany_name . $return . $message_text;
                $headers = "From: ".$youremail;
                    
                    if (email_is_valid($youremail) && !eregi("\r",$youremail) && !eregi("\n",$youremail) && $yourname != "") {
                        mail($to,$subject,$message,$headers);
                        $yourname = '';
                        $youremail = '';
                        $yourcompany = '';
                        $yourmessage = '';
                        echo '<div class="alert alert-success">'.$contact_submitted.'   <button type="button" class="close" data-dismiss="alert">&times;</button></div>';
                    }

            else echo '<div class="alert alert-error">Please enter your name, a valid email address, and your message before submitting.<button type="button" class="close" data-dismiss="alert">&times;</button></div>';
            }       
        ?>
            
        <?php include($page_content); ?>

        <div id="push"><!--/ /--></div>

        </div> 
    </div>

    <?php include('footer.php'); ?>
    <!-- Main site content End -->

<!-- Scripting Begin -->
<script src="http://code.jquery.com/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/sticky.js"></script>
<script src="js/stickyResize.js"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-40300492-1', 'http://www.bnberg.com');
  ga('send', 'pageview');
</script>	
<!-- Scripting End -->
</body>
</html>