<?php

function the_header(){
	global $templateExport;
	if(is_array($templateExport)){
	        foreach($templateExport as $value => $content){
        	        ${$value} = $content;
	        }
	}
	$tn=getConfig("TEMPLATENAME");
	include_once("includes/template/".$tn."/header.php");
}


function the_footer(){
	global $templateExport;
	if(is_array($templateExport)){
	        foreach($templateExport as $value => $content){
        	        ${$value} = $content;
	        }
	}
	$tn = getConfig("TEMPLATENAME");
	include_once("includes/template/".$tn."/footer.php");
}


function the_content($route = ""){
	global $templateExport;
	if(is_array($templateExport)){
	        foreach($templateExport as $value => $content){
        	        ${$value} = $content;
	        }
	}
	if($route == ""){
		$inc = getConfig("DEFAULTPAGE");
		include("includes/modules/".$inc.".php");
	} else {
		include("includes/modules/".$route.".php");
	}
}

function the_model($route = ""){
	if($route == ""){
		$inc = getConfig("DEFAULTPAGE");
		if(file_exists("includes/modules".$inc.".controller.php"))
			include("includes/modules/".$inc.".controller.php");
	} else {
		if(file_exists("includes/modules/".$route.".controller.php"))
			include("includes/modules/".$route.".controller.php");
	}
}


function troute($action, $vars=""){
	if($vars!="")
		$url = "index.php?route=$action&".$vars;
	else
		$url = "index.php?route=$action";

        echo $url;
}


function texport($vname, $vvalue){
	//improve
        global $templateExport;

	$templateExport[$vname] = $vvalue;
}

function timport(){
	global $templateExport;
	foreach($templateExport as $value => $content){
		${$value} = $content;
	}
}

/*this function is stupid! improve it - starting with the fact that we use a magical string*/
function tcontenttype($type="xpto"){
	//global $contentType;
	static $contentType = "html";
	if($type=="xpto"){
		return $contentType;
	}
	else $contentType = $type;
	return $contentType;
}
