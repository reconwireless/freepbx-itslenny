Installing Its Lenny<br>
<h5>Telemarketer Revenge</h5>
This module will record calls please make sure you are not breaking the laws of your State/Region/Territory/Country by doing so.<br>
<?php
if ( (isset($amp_conf['ASTVARLIBDIR'])?$amp_conf['ASTVARLIBDIR']:'') == '') {
	$astlib_path = "/var/lib/asterisk";
} else {
	$astlib_path = $amp_conf['ASTVARLIBDIR'];
}


?><br>Installing Default Configuration values.<br>
<?php

$sql ="INSERT INTO itslennyoptions (itslennyemail) ";
$sql .= "               VALUES ('ROOT')";
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
?>

