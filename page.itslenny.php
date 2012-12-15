<?php
//RECONWIRELESS
//
//This program is free software; you can redistribute it and/or
//modify it under the terms of the GNU General Public License
//as published by the Free Software Foundation; either version 2
//of the License, or (at your option) any later version.
//
//This program is distributed in the hope that it will be useful,
//but WITHOUT ANY WARRANTY; without even the implied warranty of
//MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//GNU General Public License for more details.

// check to see if user has automatic updates enabled
$cm =& cronmanager::create($db);
$online_updates = $cm->updates_enabled() ? true : false;

// check if new version of module is available
if ($online_updates && $foo = intslenny_vercheck()) {
	print "<br>A <b>new version</b> of this module is available from the <a target='_blank' href='http://github.com/reconwireless/freepbx-itslenny/'>Reconwireless Repository on Git Hub</a><br>";
}

//tts_findengines()
if(count($_POST)){
	itslennyoptions_saveconfig();
}
	$date = itslennyoptions_getconfig();
	$selected = ($date[0]);

//  Get current featurecode from FreePBX registry
$fcc = new featurecode('itslenny', 'itslenny');
$featurecode = $fcc->getCodeActive(); 

?>
<form method="POST" action="">
	<br><h2><?php echo _("It's Lenny Telemarketer Revenge")?><hr></h5></td></tr>
It's Lenny Telemarketer Revenge forwards all blacklisted calls to sip:lenny@sip.itslenny.com:5060 and records the call on your local system for your entertainment and punishment of your blacklisted callers.  You can blacklist a number by using the Blacklist Module, or dialing the associated Feature code on your system The Defaults are:<br>
 Blacklist a number *30<br>Blacklist the last caller *32 <br>
 Remove a number from Blacklist *31<br><br>
Current conditions and/or forecast for the chosen Zip Code will then will be retrieved from the selected service using the selected text-to-speech engine. <br><br>

<br><h5>User Data:<hr></h5>
Select the options to either send the call without recording, send and record, or send,record and email notification.<br><br>
<a href="#" class="info">Choose a It's Lenny Option:<span>Choose from the list of supported It's Lenny Options</span></a>

<select size="1" name="engine">
<?php
echo "<option".(($date[0]=='app-blacklist-check')?' selected':'').">app-blacklist-check</option>\n";
echo "<option".(($date[0]=='app-blacklist-check-record')?' selected':'').">app-blacklist-check-record</option>\n";
echo "<option".(($date[0]=='app-blacklist-check-email')?' selected':'').">app-blacklist-check-email</option>\n";
?>
</select>
<br><a href="#" class="info">Notification Email Address:<span>Input email for It's Lenny Call notification</span></a>
<input type="text" name="itslennyemail" size="40" value="<?php echo $date[1]; ?>">  <a href="javascript: return false;" class="info"> 
<br><br>key:<br>
<b>Forward</b> - Forward Calls to It's Lenny<br>
<b>Forward & Record Local</b> - Forward Calls & Record Local<br>
<b>Forward, Record & Email</b> - Forward, Record & Email Notify<br>

		
<br><br><input type="submit" value="Submit" name="B1"><br>

<center><br>
The module is written by reconwireless with dial plan created by   <a target="_blank" href="https://github.com/lgaetz"> lgaetz</a>.  Limited Support, documentation and current versions are available at the it's lenny module <a target="_blank" href="https://github.com/reconwireless/freepbx-itslenny">reconwireless dev site</a></center>
<?php
print '<p align="center" style="font-size:11px;">This module was inspired by a the a thread on the PBX in a Flash Forum <a target="_blank" href="http://pbxinaflash.com/community/index.php?threads/revenge-on-telemarketers.14749/#post-96154</a>.';

?>

