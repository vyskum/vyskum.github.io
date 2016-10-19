<?php
$thankshow = "none";
$formshow = "block";
require 'include/MailChimp.php';
if ($_POST['subscribe']) {
$MailChimp = new \Drewm\MailChimp('73bb603c1db862353cada64d88442759-us11');
$email_val = $_REQUEST['EMAIL'];
$result = $MailChimp->call('lists/subscribe', array(
                'id'                => '99a68bacad',
                'email'             => array('email'=>$email_val),
                'double_optin'      => false,
                'update_existing'   => true,
                'replace_interests' => false,
                'send_welcome'      => false,
            ));
//print_r($result);
$thankshow = "block";
$formshow = "none";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Nástroje pre podporu výskumu">
    <meta name="author" content="Tomas Balint">

    <title>Vyskum.eu | Nástroje pre podporu výskumu</title>
    
    <link rel="shortcut icon" href="images/favicon.png" type="image/png">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<script src='http://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js'></script>
<script>
	WebFont.load( {
		google: {
			families: ['Ubuntu', 'Ubuntu']
		}
	} );
</script>

</head>

<body>
    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
            <img alt="Logo" width="400" src="img/vyskum.png" />
            </div>
            <div class="col-lg-8 col-lg-offset-2 text-center">
                 <h4 class="secondary-text">Užitočné nástroje pre Váš vedecký výskum už čoskoro!</h4> 
                <div id="save" class="alert alert-success" style="display:<?php echo $thankshow; ?>;">
                    <strong>Ďakujeme za Váš záujem!</strong>
                </div>
                <!-- Begin MailChimp Signup Form -->
<div id="formular" style="display:<?php echo $formshow; ?>;">
<form action="index.php" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" novalidate>
    <div id="mc_embed_signup_scroll">
	
	<input type="email" placeholder="Zadajte Váš e-mail, ak sa chcete dozvedieť viac" name="EMAIL" class="email" placeholder="email address" required width="400px">
    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;"><input type="text" name="b_628751867f8f330d5bc4da16a_99a68bacad" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Odoslať" name="subscribe" class="button"></div>
    </div>
</form>
</div>

<!--End mc_embed_signup-->
           
                <div class="anti-spam">info (at) vyskum.eu</br>2015</div>
            </div>
        
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    
    <!-- Google Analytics Tracking -->
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
     m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
     })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
     ga('create', 'UA-64046980-2', 'auto');
     ga('send', 'pageview');
    </script>

</body>

</html>
