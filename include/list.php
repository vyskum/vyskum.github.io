<?php
require 'MailChimp.php';
$MailChimp = new \Drewm\MailChimp('73bb603c1db862353cada64d88442759-us11');
print_r($MailChimp->call('lists/list'));
?>