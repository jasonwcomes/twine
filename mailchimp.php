<?php

require_once('Drewm/MailChimp.php');

$MailChimp = new \Drewm\MailChimp('8521811541d0a95fa4dd65b8fc37be1a-us3');
$result = $MailChimp->call('lists/subscribe', array(
                'id'                => '9831223e0b',
                'email'             => array('email'=> $_POST['email'] ),
                'double_optin'      => true,
                'update_existing'   => true,
                'replace_interests' => false,
                'send_welcome'      => true,
));
print("Email has Been Added To List");
?>