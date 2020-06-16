<?php
	include("request.php");
    	//$url ="https://api.github.com/users/codeRookieErick/repos";
    	#header("Content-Type:text/json");
    	print(request(
        	"https://api.github.com/users/codeRookieErick/repos", 
        	"GET", 
        #Arguments
        	array(), 
        #Header
        	array(
            	"Content-Type"=>"text/plain")
        	));
?>
