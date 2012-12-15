Installing It's Lenny Module<br>
<h5>Telemarketer Revenge</h5>
This module will record calls if selected please make sure you are not breaking the laws of your State/Region/Territory/Country by doing so.<br>
<?php
if ( (isset($amp_conf['ASTVARLIBDIR'])?$amp_conf['ASTVARLIBDIR']:'') == '') {
	$astlib_path = "/var/lib/asterisk";
} else {
	$astlib_path = $amp_conf['ASTVARLIBDIR'];
}


?><br>Installing Default Configuration values.<br>
<?php

$sql ="INSERT INTO itslennyoptions (engine, itslennyemail) ";
$sql .= "               VALUES ('app-blacklist-check',        '')";
$check = $db->query($sql);
if (DB::IsError($check)) {
        die_freepbx( "Can not create default values in `itslennyoptions` table: " . $check->getMessage() .  "\n");
}

// Add dialplan include to asterisk conf file
$filename = '/etc/asterisk/extensions_override_freepbx.conf';
$includecontent = "#include custom_itslenny.conf\n";

// First we need to look for existing occurances of the include line from past sloppy uninstall/upgrade and remove all of them
function replace_file($path, $string, $replace)
{
    set_time_limit(0);
    if (is_file($path) === true)
    {
        $file = fopen($path, 'r');
        $temp = tempnam('./', 'tmp');
        if (is_resource($file) === true)
        {
            while (feof($file) === false)
            {
                file_put_contents($temp, str_replace($string, $replace, fgets($file)), FILE_APPEND);
            }
            fclose($file);
        }
        unlink($path);
    }
    return rename($temp, $path);
}

replace_file($filename, $includecontent, '');

// Now add back include line
if (is_writable($filename)) {
 
    if (!$handle = fopen($filename, 'a')) {
         echo "Cannot open file ($filename)";
         exit;
    }
    // Write $somecontent to our opened file.
    if (fwrite($handle, $includecontent) === FALSE) {
        echo "Cannot write to file ($filename)";
        exit;
    }
    echo "<br>Success, wrote ($includecontent)<br> to file ($filename)<br><br>";

    fclose($handle);

} else {
    echo "The file $filename is not writable";
}
?>Verifying / Installing cronjob into the FreePBX cron manager.<br>
<?php
$sql = "SELECT * FROM `cronmanager` WHERE `module` = 't' LIMIT 1;";

$res = $db->query($sql);

if($res->numRows() != 1)
{
$sql = "INSERT INTO	cronmanager (module,id,time,freq,command) VALUES ('itslenny','every_day',23,24,'/usr/bin/find /var/lib/asterisk/sounds/tts -name \"*.wav\" -mtime +1 -exec rm {} \\\;')";

$check = $db->query($sql);
if (DB::IsError($check))
	{
	die_freepbx( "Can not create values in cronmanager table: " . $check->getMessage() .  "\n");
	}
}
?>
<?php
 Register FeatureCode - Its Lenny;
$fcc = new featurecode('itslenny', 'itslenny');
$fcc->setDescription('It's Lenny');
$fcc->setDefault('*53669');
$fcc->update();
unset($fcc);
?>
