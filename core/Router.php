<?php

class Router {

    protected $routes = [];

    public function define($routes){

        $this->route = $routes;
    }

    public function direct($uri){

        if(array_key_exists($uri, $this->route)){
           
            return $this->route[$uri];
        }
        // throw new Exception($uri);
        
        var_dump($this->route);
        
        echo " could not find " . $uri;
    }

}