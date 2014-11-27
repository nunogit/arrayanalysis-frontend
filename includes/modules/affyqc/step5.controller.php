<?php
        use \Httpful\Request;

        $handler = $_REQUEST["handler"];
	$correlqc = $_REQUEST["correlqc"]; // **
	$signalqc = $_REQUEST["signalqc"]; // **
	$sampleqc = $_REQUEST["sampleqc"]; // **
	$spatialqc = $_REQUEST["spatialqc"]; // **
	$normalization = $_REQUEST["normalization"];

/*	$signalqc[] = Array("maoption1"=> $_REQUEST["maoption1"]); // **

	$correlqc[] = Array("clusteroption1"=> $_REQUEST["clusteroption1"]);
	$correlqc[] = Array("clusteroption2"=> $_REQUEST["clusteroption2"]);

	$normalization[] = Array("normmeth"  => $_REQUEST["normmeth"]); // **
	$normalization[] = Array("normoption1" => $_REQUEST["normoption1"]);
	$normalization[] = Array("cdftype" => $_REQUEST["cdftype"]);
	$normalization[] = Array("species" => $_REQUEST["species"]);
*/
        $jCorrelqc = 	  $correlqc==null?"":json_encode($correlqc);
        $jSignalqc = 	  $signalqc==null?"":json_encode($signalqc);
        $jSampleqc = 	  $sampleqc==null?"":json_encode($sampleqc);
        $jSpatialqc = 	  $spatialqc==null?"":json_encode($spatialqc);
        $jNormalization = $normalization==null?"":json_encode($normalization);

	
        $uri  = getConfig("WS_URL") . "/index.php?";
	$uri .= "handler=$handler&sampleqc=$jSampleqc&signalqc=$jSignalqc&spatialqc=$jSpatialqc&correlqc=$jCorrelqc&normalization=$jNormalization&method=getArrayQCReport&format=application/pdf";

//        echo $uri;
	
	$uri2 = getConfig("WS_URL")."/index.php?handler=test&sampleqc=&signalqc=[{%22maoption1%22:null}]&spatialqc=&correlqc=[{%22clusteroption1%22:null},{%22clusteroption2%22:null}]&normalization=[{%22normmeth%22:null},{%22normoption1%22:null},{%22cdftype%22:null},{%22species%22:null}]&method=getArrayQCReport&format=application/pdf";

//        $response = Request::get($uri)->expectsHtml()->send();
        
//	$response = Request::get($uri)->expects("application/pdf")->send();
	$response = Request::get($uri)->send();
	//var_dump($response->body);
	/*The name generation does not follow any particular rule*/
	/*it generates a random number big enoug, and than transforms it into a string*/
	srand(time());
	$pdfurl = aac_savePDF($response, "report_".hash("md5",rand(1000, 100000000000)).".pdf");

        //$aType = $response->body->atype;
        //$chipName = $response->body->chiptype;
        //$species = $response->body->species;


        /*EXPORT VARIABLES TO USE IN THE TEMPLATE*/
	tcontenttype(null);
	texport("uri", $uri);
	texport("uri2", $uri2);
        texport("pdfurl", $pdfurl);
