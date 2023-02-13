<?php
	include('./query/dbconection.php');

	$type="select * from `type` where `type` ='Notebook'";
	$notebook=$db->query($type);

	$typed="select * from `type` where `type` ='Destops'";
	$destop=$db->query($typed);
	
?>