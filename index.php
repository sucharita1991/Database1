<?php

//turn on debugging messages
ini_set('display_errors', 'On');
error_reporting(E_ALL);


define('DATABASE', 'sd686');
define('USERNAME', 'sd686');
define('PASSWORD', 'ZOm1EN5l3');
define('CONNECTION', 'sql1.njit.edu');

//Autuloader class
class Manage {
    public static function autoload($class) {
        //you can put any file name or directory here
        include $class . '.php';
    }
}

spl_autoload_register(array('Manage', 'autoload'));

//instantiate the main object
$obj = new main();

class main
{

    public function __construct()
    {
        $requestPageType = requestTypeDefination :: pageRequest();
        $page = new $requestPageType;
        requestTypeDefination :: serverRequest($page);
    }
}

class requestTypeDefination{

    public static function pageRequest(){
        $requestPageType = 'homepage';
        if(isset($_REQUEST['page'])) { //checking if request parameter 'page' is set. If not, it will go to homepage by default
            $requestPageType = $_REQUEST['page'];
        }
        return $requestPageType;
    }
    public static function serverRequest($page){
        if($_SERVER['REQUEST_METHOD'] == 'GET') {
            $page->get();
        } else {
            $page->post();
        }
    }
}

class account {}
class todo {}

?>