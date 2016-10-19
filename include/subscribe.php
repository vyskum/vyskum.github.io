<?php
require 'MailChimp.php';
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

}
?>