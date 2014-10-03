<?php
	$link = mysql_connect("localhost", "root", "");
	if($link){
		mysql_select_db("tesis_p1",$link);
	}
?>