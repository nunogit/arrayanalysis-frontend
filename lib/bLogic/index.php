<?php


function aac_savePDF($content, $filename){

	$folder = $_SERVER["DOCUMENT_ROOT"].getConfig("TMPDIR");

	file_put_contents ($folder."/".$filename, $content);
	
	return $filename;
}
