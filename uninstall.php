Un Installing It's Lenny.<br>
<?php

if ( (isset($amp_conf['ASTVARLIBDIR'])?$amp_conf['ASTVARLIBDIR']:'') == '') {
	$astlib_path = "/var/lib/asterisk";
} else {
	$astlib_path = $amp_conf['ASTVARLIBDIR'];
}

if ( file_exists($astlib_path."/agi-bin/itslenny-email.php") ) {
	if ( !unlink($astlib_path."/agi-bin/itslenny-email.php") ) {
		echo _("Its Lenny AGI script cannot be removed.");
	}
}
print 'Deleting the cron manager entries for this module.<br>';
$sql = "DELETE FROM cronmanager WHERE module = 'itslenny'";
$check = $db->query($sql);
if (DB::IsError($check))
{
	die_freepbx( "Can not delete values in cronmanager table: " . $check->getMessage() .  "\n");
}

?>

