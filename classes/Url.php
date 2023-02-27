<?php

/**
 * Url
 * 
 * Response methods
 */

class Url {

/**
 * Redirect to another URL on the same site
 * 
 * @param string $path The path to redirect to
 * 
 * @return void
 */

public static function redirect($path) {

    if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') {
        $protocol = 'https';
       } else {
        $protocol = 'http';
       }
    
       header("Location:  $protocol://" . $_SERVER['HTTP_HOST'] . $path);
       exit;
    }

public static function getUrl() {
       
   //if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
     //$url = "https://";   
 //else  
  //$url = "http://";   
    // Append the host(domain name, ip) to the URL.   
  //$url.= $_SERVER['HTTP_HOST'];   
    
    // Append the requested resource location to the URL   
    $url = $_SERVER['REQUEST_URI'];    
      
    return $url;  
    }
}

