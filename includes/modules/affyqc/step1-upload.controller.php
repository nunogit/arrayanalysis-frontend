<?php
      use \Httpful\Request;

      /*POST FILE*/
      $ds          = DIRECTORY_SEPARATOR;  			//1
      $storeFolder = '/var/www/arrayanalysis.org-nuno/v2/full-width-pics/data/';   //2 replace this with the configuretion TODO
      if (!empty($_FILES)) {
	//print_r($_FILES);
        $tempFile = $_FILES['file']['tmp_name'];          	//3
	//$targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;
	$targetPath = $storeFolder;
        $targetFile =  $targetPath. $_FILES['file']['name'];    //5
       	move_uploaded_file($tempFile,$targetFile); 		//6
      }

      //TODO validate todo
      $type  = $_REQUEST["type"];
           
      
      $uri = getConfig("WS_URL") . "/index.php?method=submitFile&type=$type&format=json";
      $response = Request::post($uri)->attach(array('cellfilename' => $targetFile))->expectsJson()->send();


      tcontenttype(null);
      texport("response", $response->body);
