<?php

namespace todolist\classes;

class Request
{
    public function get($key)
    {
        return isset($_GET[$key]) ? $_GET[$key] : "not found the key";
        // return $_GET[$key] ?? "not found the key ";
    }
    public function post($key)
    {
        return isset($_POST[$key]) ? $_POST[$key] : "the key NOT vaild  ";
    }
    public function checkPost($key)
    {
        return isset($_POST[$key]);
    }
    public function checkGet($key)
    {
        return isset($_GET[$key]);
    }
    public function clean($key)
    {
        return trim(htmlspecialchars($key));
    }
    public function checkMethod()
    {
        return $_REQUEST['REQUET_METHOD'];
    }
    public function header($file){
        return header("location:$file");
    }
}
