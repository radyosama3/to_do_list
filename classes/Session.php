<?php

namespace todolist\classes;

class Session
{
    public function __construct()
    {
        session_start();
    }
    //set 
    public function set($key,$value)
    {
        $_SESSION[$key]=$value;
    }

    // get 
    public function get($key)
    {   
        return isset($_SESSION[$key])?$_SESSION[$key] : "key not found";
    }
    // remove
    public function remove($key)
    {
         unset($_SESSION[$key]);
    }
    // destroy 
    public function destroy()
    {
        session_destroy();
    }
    //abort 
    public function abort(){
        session_abort();
    }
}
