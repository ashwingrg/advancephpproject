<?php
    function __autoload($cname){
        include 'corelib/classes/'.'class.'.$cname.'.php';
        // include 'controllers/'.'class.'.$cname.'.php';
        // if(!file_exists($cname)){
        // 	include 'corelib/classes/'.'class.'.$cname.'.php';
        // }
        // else {
        // 	include 'controllers/'.'class.'.$cname.'.php';	
        // }
    }