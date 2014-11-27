<?php
/*        use \Httpful\Request;*/
        $handler = $_REQUEST["handler"];

	$correlqc = $_REQUEST["correlqc"]; // **
	$signalqc = $_REQUEST["signalqc"]; // **
	$sampleqc = $_REQUEST["sampleqc"]; // **
	$spatialqc = $_REQUEST["spatialqc"]; // **
	$normalization = $_REQUEST["normalization"];

	$signalqc[] = Array("maoption1"=> $_REQUEST["maoption1"]); // **

	$correlqc[] = Array("clusteroption1"=> $_REQUEST["clusteroption1"]);
	$correlqc[] = Array("clusteroption2"=> $_REQUEST["clusteroption2"]);

	$normalization[] = Array("normmeth"  => $_REQUEST["normmeth"]); // **
	$normalization[] = Array("normoption1" => $_REQUEST["normoption1"]);
	$normalization[] = Array("cdftype" => $_REQUEST["cdftype"]);
	$normalization[] = Array("species" => $_REQUEST["species"]);

        $jCorrelqc = 	  json_encode($correlqc);
        $jSignalqc = 	  json_encode($signalqc);
        $jSampleqc = 	  json_encode($sampleqc);
        $jSpatialqc = 	  json_encode($spatialqc);
        $jNormalization = json_encode($normalization);

        /*$jCorrelqc =      $correlqc==null?"":json_encode($correlqc);
        $jSignalqc =      $signalqc==null?"":json_encode($signalqc);
        $jSampleqc =      $sampleqc==null?"":json_encode($sampleqc);
        $jSpatialqc =     $spatialqc==null?"":json_encode($spatialqc);
        $jNormalization = $normalization==null?"":json_encode($normalization);*/



	$jsonvar = "sampleqc=$jSampleqc&signalqc=$jSignalqc&spatialqc=$jSpatialqc&correlqc=$jCorrelqc&normalization=$jNormalization";


        //echo $uri;
	


//      $response = Request::get($uri)->expectsHtml()->send();
//      var_dump($response->body);

        //$aType = $response->body->atype;
        //$chipName = $response->body->chiptype;
        //$species = $response->body->species;


        /*EXPORT VARIABLES TO USE IN THE TEMPLATE*/
        //texport("nrRows", $nrRows);
        //texport("aType", $aType);
        //texport("chipName", $chipName);
        //texport("species", $species);
        //texport("sampleNameList", $sampleNameList);
	
	texport("handler", $handler);
	texport("jsonvar",$jsonvar);
	texport("jCorrelqc", $jCorrelqc);
	texport("jSignalqc", $jSignalqc);
	texport("jSampleqc", $jSampleqc);
	texport("jSpatialqc", $jSpatialqc);
	texport("jNormalization", $jNormalization);
