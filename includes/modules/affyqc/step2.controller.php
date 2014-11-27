<?php

        use \Httpful\Request;

	$handler = !isset($_REQUEST["handler"]) ? "test": $_REQUEST["handler"];

        /*POST FILE*/

//      $uri = getConfig("WS_URL") . "/method=submitRawData";
//      $response = Request::get($uri)->post();

        /*GET FILENAMES*/
        //$uri = getConfig("WS_URL") . "/index.php?method=getFilenamesFromRawData&format=json&handler=$handler";
	//echo $uri;
        //$response = Request::get($uri)->expectsJson()->send();

        //$nArrays = count($response->body);
        //$UNZIP = $response->body;


        /*GET ARRAY INFORMATION*/
        $uri = getConfig("WS_URL") . "/index.php?handler=$handler&method=getArrayInformation&format=json";
        //echo $uri;

        $response = Request::get($uri)->expectsJson()->send();
        //var_dump($response->body);

        $aType = $response->body->atype;
        $chipName = $response->body->chiptype;
        $species = $response->body->species;


	/*GET ARRAY SAMPLE NAME*/
        $uri = getConfig("WS_URL") . "/index.php?handler=$handler&method=getFilenamesFromRawData&format=json";
        //echo $uri;

        $response = Request::get($uri)->expectsJson()->send();

        $sampleNameList = $response->body;

        //$nArrays = count($response->body);
	//$UNZIP = $response->body;
	$nrRows = count($sampleNameList);

	/*EXPORT VARIABLES TO USE IN THE TEMPLATE*/
	texport("nrRows", $nrRows);
	texport("aType", $aType);
	texport("chipName", $chipName);
	texport("species", $species);
	texport("sampleNameList", $sampleNameList);
	texport("handler", $handler);