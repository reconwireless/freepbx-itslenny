<?php

function itslenny_get_config($engine) {
  global $ext;
  switch($engine) {
    case 'asterisk':
    //teletorture. intro
      $ext->add('app-telemarket', 's', 'begin', new ext_background('telemarketer-intro'));
      $ext->add('app-telemarket', 's', '', new ext_background('telemarketer-choices'));
      $ext->add('app-telemarket', '1', '', new ext_goto('begin','s','app-telemarket-charity'));
      $ext->add('app-telemarket', '2', '', new ext_goto('begin','s','app-telemarket-political'));
      $ext->add('app-telemarket', '3', '', new ext_goto('begin','s','app-telemarket-pollster'));
      $ext->add('app-telemarket', '4', '', new ext_goto('begin','s','app-telemarket-research'));
      $ext->add('app-telemarket', '5', '', new ext_goto('begin','s','app-telemarket-magazine'));
      $ext->add('app-telemarket', '6', '', new ext_goto('begin','s','app-telemarket-commercial'));
      $ext->add('app-telemarket', '7', '', new ext_goto('begin','s','app-telemarket-other'));  
      $ext->add('app-telemarket', 't', '', new ext_goto('begin','s','app-telemarket'));    
      $ext->add('app-telemarket', 'i', '', new ext_goto('begin','s','app-telemarket'));
      $ext->add('app-telemarket', 'o', '', new ext_goto('begin','s','app-telemarket'));      
      //app-telemarket-charity
      $ext->add('app-telemarket-charity', 's', 'begin', new ext_background('telemark-charity-intro'));
      $ext->add('app-telemarket-charity', 's', '', new ext_background('telemark-charity-choices'));
      $ext->add('app-telemarket-charity', '1', '', new ext_goto('begin','s','app-telemarket-char-disease'));
      $ext->add('app-telemarket-charity', '2', '', new ext_goto('begin','s','app-telemarket-char-handicap'));
      $ext->add('app-telemarket-charity', '3', '', new ext_goto('begin','s','app-telemarket-char-police'));
      $ext->add('app-telemarket-charity', '4', '', new ext_goto('begin','s','app-telemarket-char-school'));
      $ext->add('app-telemarket-charity', '5', '', new ext_goto('begin','s','app-telemarket-char-college'));
      $ext->add('app-telemarket-charity', '6', '', new ext_goto('begin','s','app-telemarket-char-animal'));
      $ext->add('app-telemarket-charity', '7', '', new ext_goto('begin','s','app-telemarket-char-candidate'));
      $ext->add('app-telemarket-charity', '8', '', new ext_goto('begin','s','app-telemarket-char-abuse'));
      $ext->add('app-telemarket-charity', '9', '', new ext_goto('begin','s','app-telemarket-char-other'));
      $ext->add('app-telemarket-charity', 't', '', new ext_goto('begin','s','app-telemarket'));
      $ext->add('app-telemarket-charity', 'i', '', new ext_goto('begin','s','app-telemarket'));
      $ext->add('app-telemarket-charity', 'o', '', new ext_goto('begin','s','app-telemarket'));
      //app-telemarket-char-*
      $ext->add('app-telemarket-char-disease', 's', 'begin', new ext_goto('begin','s','app-telemarket-sorry'));
      $ext->add('app-telemarket-char-handicap', 's', 'begin', new ext_goto('begin','s','app-telemarket-sorry'));
      $ext->add('app-telemarket-char-police', 's', 'begin', new ext_goto('begin','s','app-telemarket-sorry'));
      $ext->add('app-telemarket-char-school', 's', 'begin', new ext_goto('begin','s','app-telemarket-sorry'));
      $ext->add('app-telemarket-char-college', 's', 'begin', new ext_goto('begin','s','app-telemarket-sorry'));
      $ext->add('app-telemarket-char-animal', 's', 'begin', new ext_goto('begin','s','app-telemarket-sorry'));
      $ext->add('app-telemarket-char-candidate', 's', 'begin', new ext_goto('begin','s','app-telemarket-sorry'));
      $ext->add('app-telemarket-char-abuse', 's', 'begin', new ext_goto('begin','s','app-telemarket-sorry'));
      $ext->add('app-telemarket-char-other', 's', 'begin', new ext_goto('begin','s','app-telemarket-sorry'));
      //app-telemarket-sorry
      $ext->add('app-telemarket-sorry', 's', 'begin', new ext_background('telemarket-sorry'));
      $ext->add('app-telemarket-sorry', 's', '', new ext_hangup());
      //app-telemarket-exception
      $ext->add('app-telemarket-exception', 's', 'begin', new ext_background('telemarket-success'));
      $ext->add('app-telemarket-exception', 's', '', new ext_hangup());
      //app-telemarket-political
      $ext->add('app-telemarket-political', 's', 'begin', new ext_background('telemark-polit-intro'));		
      $ext->add('app-telemarket-political', 's', '', new ext_background('telemark-polit-choices'));
      $ext->add('app-telemarket-political', '1', '', new ext_goto('begin','s','app-telemarket-poli-Am1st'));		
      $ext->add('app-telemarket-political', '2', '', new ext_goto('begin','s','app-telemarket-poli-American'));
      $ext->add('app-telemarket-political', '3', '', new ext_goto('begin','s','app-telemarket-poli-AmHer'));
      $ext->add('app-telemarket-political', '4', '', new ext_goto('begin','s','app-telemarket-poli-AmInd'));
      $ext->add('app-telemarket-political', '5', '', new ext_goto('begin','s','app-telemarket-poli-Am-Naz'));
      $ext->add('app-telemarket-political', '6', '', new ext_goto('begin','s','app-telemarket-poli-Pot'));
      $ext->add('app-telemarket-political', '7', '', new ext_goto('begin','s','app-telemarket-poli-AmRef'));
      $ext->add('app-telemarket-political', '8', '', new ext_goto('begin','s','app-telemarket-poli-CFP'));	
      $ext->add('app-telemarket-political', '9', '', new ext_goto('begin','s','app-telemarket-political2'));
      $ext->add('app-telemarket-political', 't', '', new ext_goto('begin','s','app-telemarket'));
      $ext->add('app-telemarket-political', 'i', '', new ext_goto('begin','s','app-telemarket'));
      $ext->add('app-telemarket-political', 'o', '', new ext_goto('begin','s','app-telemarket'));      								
      //app-telemarket-political2
      $ext->add('app-telemarket-political2', 's', 'begin', new ext_background('telemark-politx-intro'));		
      $ext->add('app-telemarket-political2', 's', '', new ext_background('telemark-polit2-choices'));		
      $ext->add('app-telemarket-political2', '1', '', new ext_goto('begin','s','app-telemarket-poli-Communist'));		
      $ext->add('app-telemarket-political2', '2', '', new ext_goto('begin','s','app-telemarket-poli-Constit'));
      $ext->add('app-telemarket-political2', '3', '', new ext_goto('begin','s','app-telemarket-poli-FamVal'));
      $ext->add('app-telemarket-political2', '4', '', new ext_goto('begin','s','app-telemarket-poli-FreedSoc'));
      $ext->add('app-telemarket-political2', '5', '', new ext_goto('begin','s','app-telemarket-poli-Grassroot'));
      $ext->add('app-telemarket-political2', '6', '', new ext_goto('begin','s','app-telemarket-poli-Green'));
      $ext->add('app-telemarket-political2', '7', '', new ext_goto('begin','s','app-telemarket-poli-Greens'));
      $ext->add('app-telemarket-political2', '8', '', new ext_goto('begin','s','app-telemarket-poli-Independence'));
      $ext->add('app-telemarket-political2', '9', '', new ext_goto('begin','s','app-telemarket-political3'));
      $ext->add('app-telemarket-political2', 't', '', new ext_goto('begin','s','app-telemarket'));
      $ext->add('app-telemarket-political2', 'i', '', new ext_goto('begin','s','app-telemarket'));
      $ext->add('app-telemarket-political2', 'o', '', new ext_goto('begin','s','app-telemarket'));
      //app-telemarket-political3
      $ext->add('app-telemarket-political3', 's', 'begin', new ext_background('telemark-politx-intro'));		
      $ext->add('app-telemarket-political3', 's', '', new ext_background('telemark-polit3-choices'));	
      $ext->add('app-telemarket-political3', '1', '', new ext_goto('begin','s','app-telemarket-poli-IndAm'));
      $ext->add('app-telemarket-political3', '2', '', new ext_goto('begin','s','app-telemarket-poli-Labor'));
      $ext->add('app-telemarket-political3', '3', '', new ext_goto('begin','s','app-telemarket-poli-Liber'));		
      $ext->add('app-telemarket-political3', '4', '', new ext_goto('begin','s','app-telemarket-poli-Light'));
      $ext->add('app-telemarket-political3', '5', '', new ext_goto('begin','s','app-telemarket-poli-NatLaw'));
      $ext->add('app-telemarket-political3', '6', '', new ext_goto('begin','s','app-telemarket-poli-New'));
      $ext->add('app-telemarket-political3', '7', '', new ext_goto('begin','s','app-telemarket-poli-NewUn'));
      $ext->add('app-telemarket-political3', '8', '', new ext_goto('begin','s','app-telemarket-poli-PeaceFree'));
      $ext->add('app-telemarket-political3', '9', '', new ext_goto('begin','s','app-telemarket-political4'));
      $ext->add('app-telemarket-political3', 't', '', new ext_goto('begin','s','app-telemarket'));
      $ext->add('app-telemarket-political3', 'i', '', new ext_goto('begin','s','app-telemarket'));
      $ext->add('app-telemarket-political3', 'o', '', new ext_goto('begin','s','app-telemarket'));		
      //app-telemarket-political4
      $ext->add('app-telemarket-political4', 's', 'begin', new ext_background('telemark-politx-intro'));		
      $ext->add('app-telemarket-political4', 's', '', new ext_background('telemark-polit4-choices'));	
      $ext->add('app-telemarket-political4', '1', '', new ext_goto('begin','s','app-telemarket-poli-Prohib'));
      $ext->add('app-telemarket-political4', '2', '', new ext_goto('begin','s','app-telemarket-poli-Ref'));
      $ext->add('app-telemarket-political4', '3', '', new ext_goto('begin','s','app-telemarket-poli-Revol'));
      $ext->add('app-telemarket-political4', '4', '', new ext_goto('begin','s','app-telemarket-poli-SocPart'));
      $ext->add('app-telemarket-political4', '5', '', new ext_goto('begin','s','app-telemarket-poli-SocAct'));
      $ext->add('app-telemarket-political4', '6', '', new ext_goto('begin','s','app-telemarket-poli-SocEq'));
      $ext->add('app-telemarket-political4', '7', '', new ext_goto('begin','s','app-telemarket-poli-SocLab'));
      $ext->add('app-telemarket-political4', '8', '', new ext_goto('begin','s','app-telemarket-poli-SocWork'));
      $ext->add('app-telemarket-political4', '9', '', new ext_goto('begin','s','app-telemarket-political5'));
      $ext->add('app-telemarket-political4', 't', '', new ext_goto('begin','s','app-telemarket'));
      $ext->add('app-telemarket-political4', 'i', '', new ext_goto('begin','s','app-telemarket'));
      $ext->add('app-telemarket-political4', 'o', '', new ext_goto('begin','s','app-telemarket'));      
      //app-telemarket-political5
      $ext->add('app-telemarket-political5', 's', 'begin', new ext_background('telemark-politx-intro'));		
      $ext->add('app-telemarket-political5', 's', '', new ext_background('telemark-polit5-choices'));	
      $ext->add('app-telemarket-political5', '1', '', new ext_goto('begin','s','app-telemarket-poli-South'));
      $ext->add('app-telemarket-political5', '2', '', new ext_goto('begin','s','app-telemarket-poli-SoInd'));
      $ext->add('app-telemarket-political5', '3', '', new ext_goto('begin','s','app-telemarket-poli-USPac'));
      $ext->add('app-telemarket-political5', '4', '', new ext_goto('begin','s','app-telemarket-poli-WTP'));
      $ext->add('app-telemarket-political5', '5', '', new ext_goto('begin','s','app-telemarket-poli-WWP'));
      $ext->add('app-telemarket-political5', '6', '', new ext_goto('begin','s','app-telemarket-poli-Democrat'));
      $ext->add('app-telemarket-political5', '7', '', new ext_goto('begin','s','app-telemarket-poli-Repub'));
      $ext->add('app-telemarket-political5', '8', '', new ext_goto('begin','s','app-telemarket-poli-other'));;
      $ext->add('app-telemarket-political5', 't', '', new ext_goto('begin','s','app-telemarket'));
      $ext->add('app-telemarket-political5', 'i', '', new ext_goto('begin','s','app-telemarket'));
      $ext->add('app-telemarket-political5', 'o', '', new ext_goto('begin','s','app-telemarket'));  
      //app-telemarket-poli-*
      $ext->add('app-telemarket-poli-other', 's', 'begin', new ext_goto('begin','s','app-telemarket-sorry'));		
      $ext->add('app-telemarket-poli-Repub', 's', 'begin', new ext_goto('begin','s','app-telemarket-sorry'));
      $ext->add('app-telemarket-poli-Democrat', 's', 'begin', new ext_goto('begin','s','app-telemarket-sorry'));
      $ext->add('app-telemarket-poli-WWP', 's', 'begin', new ext_goto('begin','s','app-telemarket-sorry'));
      $ext->add('app-telemarket-poli-WTP', 's', 'begin', new ext_goto('begin','s','app-telemarket-sorry'));
      $ext->add('app-telemarket-poli-USPac', 's', 'begin', new ext_goto('begin','s','app-telemarket-sorry'));
      $ext->add('app-telemarket-poli-SoInd', 's', 'begin', new ext_goto('begin','s','app-telemarket-sorry'));
      $ext->add('app-telemarket-poli-South', 's', 'begin', new ext_goto('begin','s','app-telemarket-sorry'));
      $ext->add('app-telemarket-poli-SocWork', 's', 'begin', new ext_goto('begin','s','app-telemarket-sorry'));
      $ext->add('app-telemarket-poli-SocLab', 's', 'begin', new ext_goto('begin','s','app-telemarket-sorry'));
      $ext->add('app-telemarket-poli-SocEq', 's', 'begin', new ext_goto('begin','s','app-telemarket-sorry'));
      $ext->add('app-telemarket-poli-SocAct', 's', 'begin', new ext_goto('begin','s','app-telemarket-sorry'));
      $ext->add('app-telemarket-poli-SocPart', 's', 'begin', new ext_goto('begin','s','app-telemarket-sorry'));
      $ext->add('app-telemarket-poli-Revol', 's', 'begin', new ext_goto('begin','s','app-telemarket-sorry'));
      $ext->add('app-telemarket-poli-Ref', 's', 'begin', new ext_goto('begin','s','app-telemarket-sorry'));
      $ext->add('app-telemarket-poli-Prohib', 's', 'begin', new ext_goto('begin','s','app-telemarket-sorry'));
      $ext->add('app-telemarket-poli-PeaceFree', 's', 'begin', new ext_goto('begin','s','app-telemarket-sorry'));
      $ext->add('app-telemarket-poli-NewUn', 's', 'begin', new ext_goto('begin','s','app-telemarket-sorry'));
      $ext->add('app-telemarket-poli-New', 's', 'begin', new ext_goto('begin','s','app-telemarket-sorry'));
      $ext->add('app-telemarket-poli-NatLaw', 's', 'begin', new ext_goto('begin','s','app-telemarket-sorry'));
      $ext->add('app-telemarket-poli-Light', 's', 'begin', new ext_goto('begin','s','app-telemarket-sorry'));
      $ext->add('app-telemarket-poli-Liber', 's', 'begin', new ext_goto('begin','s','app-telemarket-sorry'));
      $ext->add('app-telemarket-poli-Labor', 's', 'begin', new ext_goto('begin','s','app-telemarket-sorry'));
      $ext->add('app-telemarket-poli-IndAm', 's', 'begin', new ext_goto('begin','s','app-telemarket-sorry'));
      $ext->add('app-telemarket-poli-Independence', 's', 'begin', new ext_goto('begin','s','app-telemarket-sorry'));
      $ext->add('app-telemarket-poli-Greens', 's', 'begin', new ext_goto('begin','s','app-telemarket-sorry'));
      $ext->add('app-telemarket-poli-Green', 's', 'begin', new ext_goto('begin','s','app-telemarket-sorry'));
      $ext->add('app-telemarket-poli-Grassroot', 's', 'begin', new ext_goto('begin','s','app-telemarket-sorry'));
      $ext->add('app-telemarket-poli-FreedSoc', 's', 'begin', new ext_goto('begin','s','app-telemarket-sorry'));
      $ext->add('app-telemarket-poli-FamVal', 's', 'begin', new ext_goto('begin','s','app-telemarket-sorry'));
      $ext->add('app-telemarket-poli-Constit', 's', 'begin', new ext_goto('begin','s','app-telemarket-sorry'));
      $ext->add('app-telemarket-poli-Communist', 's', 'begin', new ext_goto('begin','s','app-telemarket-sorry'));
      $ext->add('app-telemarket-poli-CFP', 's', 'begin', new ext_goto('begin','s','app-telemarket-sorry'));  
      $ext->add('app-telemarket-poli-AmRef', 's', 'begin', new ext_goto('begin','s','app-telemarket-sorry'));
      //the pot party gets an endless loop cause they are stoned
      $ext->add('app-telemarket-poli-Pot', 's', 'begin', new ext_goto('begin','s','app-telemarket-political'));
      $ext->add('app-telemarket-poli-AmNaz', 's', 'begin', new ext_goto('begin','s','app-telemarket-sorry'));
      $ext->add('app-telemarket-poli-AmInd', 's', 'begin', new ext_goto('begin','s','app-telemarket-sorry'));
      $ext->add('app-telemarket-poli-AmHer', 's', 'begin', new ext_goto('begin','s','app-telemarket-sorry'));
      $ext->add('app-telemarket-poli-American', 's', 'begin', new ext_goto('begin','s','app-telemarket-sorry'));
      $ext->add('app-telemarket-poli-Am1st', 's', 'begin', new ext_goto('begin','s','app-telemarket-sorry'));
      //app-telemarket-research
      $ext->add('app-telemarket-pollster', 's', 'begin', new ext_background('telemark-poll-intro'));
      $ext->add('app-telemarket-research', 't', '', new ext_goto('begin','s','app-telemarket'));
      $ext->add('app-telemarket-research', 'i', '', new ext_goto('begin','s','app-telemarket'));
      $ext->add('app-telemarket-research', 'o', '', new ext_goto('begin','s','app-telemarket'));
      //app-telemarket-pollster
      $ext->add('app-telemarket-pollster', 's', 'begin', new ext_background('telemark-poll-intro'));
      $ext->add('app-telemarket-pollster', 't', '', new ext_goto('begin','s','app-telemarket'));
      $ext->add('app-telemarket-pollster', 'i', '', new ext_goto('begin','s','app-telemarket'));
      $ext->add('app-telemarket-pollster', 'o', '', new ext_goto('begin','s','app-telemarket'));   
      //app-telemarket-magazine
      $ext->add('app-telemarket-magazine', 's', 'begin', new ext_background('telemark-mag-choices'));
      $ext->add('app-telemarket-magazine', '1', '', new ext_goto('begin','s','app-telemark-mag-new'));
      $ext->add('app-telemarket-magazine', '2', '', new ext_goto('begin','s','app-telemark-mag-renew'));
      $ext->add('app-telemarket-magazine', '3', '', new ext_goto('begin','s','app-telemark-mag-survey'));
      $ext->add('app-telemarket-magazine', '4', '', new ext_goto('begin','s','app-telemark-mag-verify'));
      $ext->add('app-telemarket-magazine', '5', '', new ext_goto('begin','s','app-telemark-mag-other'));
      $ext->add('app-telemarket-magazine', 't', '', new ext_goto('begin','s','app-telemarket'));
      $ext->add('app-telemarket-magazine', 'i', '', new ext_goto('begin','s','app-telemarket'));
      $ext->add('app-telemarket-magazine', 'o', '', new ext_goto('begin','s','app-telemarket'));      	 		
       //telemark-mag-new
      $ext->add('app-telemark-mag-new', 's', 'begin', new ext_background('telemark-mag-new'));
      $ext->add('app-telemark-mag-new', 's', '', new ext_hangup());
      $ext->add('app-telemark-mag-new', 't', '', new ext_goto('begin','s','app-telemarket'));
      $ext->add('app-telemark-mag-new', 'i', '', new ext_goto('begin','s','app-telemarket'));
      $ext->add('app-telemark-mag-new', 'o', '', new ext_goto('begin','s','app-telemarket')); 	
      //telemark-mag-renew
      $ext->add('app-telemark-mag-renew', 's', 'begin', new ext_background('telemark-mag-renew'));
      $ext->add('app-telemark-mag-renew', 's', '', new ext_hangup());
      $ext->add('app-telemark-mag-renew', 't', '', new ext_goto('begin','s','app-telemarket'));
      $ext->add('app-telemark-mag-renew', 'i', '', new ext_goto('begin','s','app-telemarket'));
      $ext->add('app-telemark-mag-renew', 'o', '', new ext_goto('begin','s','app-telemarket')); 		
      //telemark-mag-survey
      $ext->add('app-telemark-mag-survey', 's', 'begin', new ext_background('telemark-mag-survey'));
      $ext->add('app-telemark-mag-survey', 's', '', new ext_hangup());
      $ext->add('app-telemark-mag-survey', 't', '', new ext_goto('begin','s','app-telemarket'));
      $ext->add('app-telemark-mag-survey', 'i', '', new ext_goto('begin','s','app-telemarket'));
      $ext->add('app-telemark-mag-survey', 'o', '', new ext_goto('begin','s','app-telemarket')); 		
      //telemark-mag-verify
      $ext->add('app-telemark-mag-verify', 's', 'begin', new ext_background('telemark-mag-verify'));
      $ext->add('app-telemark-mag-verify', 's', '', new ext_hangup());
      $ext->add('app-telemark-mag-verify', 't', '', new ext_goto('begin','s','app-telemarket'));
      $ext->add('app-telemark-mag-verify', 'i', '', new ext_goto('begin','s','app-telemarket'));
      $ext->add('app-telemark-mag-verify', 'o', '', new ext_goto('begin','s','app-telemarket')); 		
      //telemark-mag-other
      $ext->add('app-telemark-mag-other', 's', 'begin', new ext_goto('begin','s','app-telemarket-sorry'));
      //telemarket-commercial
      $ext->add('app-telemarket-commercial', 's', 'begin', new ext_background('telemark-comm-intro'));
      $ext->add('app-telemarket-commercial', 's', '', new ext_goto('begin','s','app-telemarket'));
      $ext->add('app-telemarket-commercial', 't', '', new ext_goto('begin','s','app-telemarket'));
      $ext->add('app-telemarket-commercial', 'i', '', new ext_goto('begin','s','app-telemarket'));
      $ext->add('app-telemarket-commercial', 'o', '', new ext_goto('begin','s','app-telemarket')); 	
      //telemarket-other
      $ext->add('app-telemarket-other', 's', 'begin', new ext_background('telemark-other-intro'));
      $ext->add('app-telemarket-other', 's', '', new ext_hangup());
      $ext->add('app-telemarket-other', 't', '', new ext_goto('begin','s','app-telemarket'));
      $ext->add('app-telemarket-other', 'i', '', new ext_goto('begin','s','app-telemarket'));
      $ext->add('app-telemarket-other', 'o', '', new ext_goto('begin','s','app-telemarket')); 	  	
 
 
     break;
  }
}
function itslenny_destinations(){
    return array(
      array(
         'destination' => 'app-telemarket,begin,1', 
         'description' => 'Default',
      ),
   );
}
function itslenny_options_getconfig() {
	#print_r($results);
	#die();
	$sql = "SELECT * FROM itslennyoptions LIMIT 1";
	$results= sql($sql, "getAll");
	$tmp = $results[0][4];
	$tmp = eregi_replace('"', '', $tmp);
	$tmp = eregi_replace('>', '', $tmp);
	$res = explode('<', $tmp);
	$results[0][] = trim($res[1]);
	$results[0][] = trim($res[0]);
	return $results[0];
}

function itslennyoptions_saveconfig() {

	require_once 'DB.php';

	# clean up
	$e = mysql_escape_string($_POST['itslennyemail']);
	
	


	# Make SQL thing
	$sql = "UPDATE `itslennyoptions` SET";
	$sql .= " `itslennyemail`='{$itslennyemail}',";
	$sql .= " LIMIT 1;";

	sql($sql);
	needreload();
}
?>
