<?php

abstract class page { //abstract class for defining the backbone of the project
    protected $html;

    public function __construct()
    {
        session_start(); //starting the session for retrieving session variables
        $this->html .= '<html>';
        $this->html .= '<link rel="stylesheet" href="stylesheet1.css">';
        $this->html .= '<body>';
    }
    public function __destruct()
    {
        $this->html .= '</body></html>';
        stringFunctions::printThis($this->html); //string functions are autoloaded for the stringFunctions class
    }

    //defination of the methods in the parent class to be implemented by the child classes
    public function get() {
        $this->html .= 'You are inside get method of parent class';
    }

    public function post() {
        $this->html .= 'You are inside post method of parent class';
    }
}

?>