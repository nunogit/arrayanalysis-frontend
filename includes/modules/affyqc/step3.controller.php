<?php

	error_reporting(E_ALL);
	ini_set('display_errors', 1);

        use \Httpful\Request;
        $handler = 	$_REQUEST["handler"];
	$sample = 	$_REQUEST["sample"];
	$sampleName = 	$_REQUEST["samplename"];
	$group = 	$_REQUEST["group"];

	$aSample = explode("\n", $sample);
	$aSampleName = explode("\n", $sampleName);
	$aSampleGroup = explode("\n", $group);
	
	foreach($aSample as $sample) $sample = str_replace("\r",'',$sample)."xx";
	foreach($aSampleName as $samplename) $samplename =  str_replace("\r",'',$sampleName);
	foreach($aSampleGroup as $group) $group =  str_replace("\r",'',$group);
	
	$iS = count($aSample);
	$iSN = count($aSampleName);
	$iSG = count($aSampleGroup);

	//if($iS!=$iSN)  //error;
	//if($iSN!=$iSG) //error;

	$sSample =  str_replace("\\r", '', json_encode($aSample));
	$sSampleName =  str_replace("\\r", '', json_encode($aSampleName));
	$sSampleGroup =   str_replace("\\r", '', json_encode($aSampleGroup));

        /*GET ARRAY INFORMATION*/
        $uri = getConfig("WS_URL") . "/index.php?handler=$handler&filenames=$sSample&samplenames=$sSampleName&groupnames=$sSampleGroup&method=setGroups&format=json";

//	echo $uri;

        $response = Request::get( $uri )->send();
//        var_dump($response->body);


	texport("handler", $handler);
