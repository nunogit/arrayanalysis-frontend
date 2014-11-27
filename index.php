<?php
//load libraries
//echo "loading libraries";
include_once("lib/lib.php");


if(!isset($_REQUEST["route"])){
	the_model();
} else {
	the_model($_REQUEST["route"]);
}


/*not very happy with contenttype, this should be more about gui... think of a better way*/
$tct = tcontenttype();

if($tct!=null)
	the_header();

if(!isset($_REQUEST["route"])){
	the_content();
} else {
	the_content($_REQUEST["route"]);
}

if($tct!=null)
	the_footer();
