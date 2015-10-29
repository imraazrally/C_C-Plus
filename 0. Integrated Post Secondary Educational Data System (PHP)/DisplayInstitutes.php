<?php
	require_once("app/model/db/DbService.php");
	require_once("app/model/institute/InstituteHandler.php");
	
	$dbService=new DbService();
	$InstituteHandler=new InstituteHandler($dbService::getDbConnection());

	//Retrieveing a List of Institute Names and Id's from the database
	$listOfInstituteNames=$InstituteHandler->getListOfInstituteNamesAndIds();
	//The URL that displays detailed information when clicked on a peticular institute
	$instituteDetailsPageUrl=$dbService->getHostName()."Institute.php?";

	//Displaying the clickable links for each institute by passing the ID as a GET parameter
	foreach($listOfInstituteNames as $institute) echo "<a href='$instituteDetailsPageUrl"."id=$institute->unitid'>$institute->instnm</a><br>";
	
?>