#!/usr/bin/php -q
<?php

/**
* To send email notification when Telemarker call is recorded

*/


/** ***********************************************************
* a quick script to link the email address entered in the module page, with the SQL table and the
* *************************************************************
*/

  //*** start code added for #module compatibility
$bootstrap_settings['freepbx_auth'] = false;
if (!@include_once(getenv('FREEPBX_CONF') ? getenv('FREEPBX_CONF') : '/etc/freepbx.conf')) {
include_once('/etc/asterisk/freepbx.conf');
}
// get user data from module
$itslennyemail = itslennyoptions_getconfig();
//*** end code added for #module compatibility      

// set up the email address to receive the alert email
$report_email = $itslennyemail [0];
$subject = "It's Lenny";
$email_content = "Test";


// No need to edit below, unless you need or want.


}





function send_alert_email($subject, $email_content = '')
{
	global $report_email;
	mail($report_email, $subject, $email_content);
}

?>