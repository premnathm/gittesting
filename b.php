<?php
    // easy way in php language
	
	echo __DIR__;
//	echo $containing_dir = basename(dirname(__FILE__)); 
     
    $a = 5;
    $b = 6;
    list($a, $b) = array($b, $a);
    print $a;
	echo "<br>";
    print $b;
?>

qa_logger
id
user_id
status         - online/offline
module_type    - login / logout / save / delete / update / assign
logged_date


{{ action('DefectController@Viewing', [$requestObj->pid, encryptData($caseValue->case_id)]) }}