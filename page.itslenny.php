<?php
//
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


}

//tts_findengines()
if(count($_POST)){
	itslennyoptions_saveconfig();
}
	$itslennyemail = itslennyoptions_getconfig();

<form method="POST" action="">
	<br><h2><?php echo _("itslenny")?><hr></h5></td></tr>
Its Lenny allows you to route calls to an IVR Torture Chamber, or send your blacklisted calls to ItsLenny.com <br>

<br><h5>User Data:<hr></h5>
<img align="center" src="images/lenny.jpg" border="0">

<br><a href="#" class="info">It's Lenny Notication Email<span>enter email address</span></a>
<input type="text" name="itslennyemail" size="40" value="<?php echo $itslennyemail[0]; ?>">  <a href="javascript: return false;" class="info"> 

		
<br><br><input type="submit" value="Submit" name="B1"><br>

<center><br>
Support, documentation and current versions are available at the <a target="_blank" href="https://github.com/reconwireless/freepbx-teletorture">reconwireless dev site</a></center>
<?php
//print '<p align="center" style="font-size:11px;">The Teletorture Module was originally created by jfinstrom and Its Lenny Dialplann was built on the PIAF forum <a target="_blank" href="http://pbxinaflash.com/community/index.php?threads/revenge-on-telemarketers.14749/page-3#post-96374">on this post</a>.';

