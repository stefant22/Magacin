<?php
namespace App\Core;
class Route
{
private $reqMethod ='any';
private $pattern;
private $controller;
private $method;

private function __construct(string $reqMethod, string $pattern,string $controller, string $method){
    $this->reqMethod=$reqMethod;
    $this->controller=$controller;
    $this->method=$method;
    $this->pattern=$pattern;

}

public static function get(string $pattern ,string $controller,string $method) : Route{
    return new Route ('GET',$pattern,$controller,$method);
}


public static function post(string $pattern,string $controller,string $method) : Route{
    return new Route ('POST',$pattern,$controller,$method);
}


public static function any(string $pattern,string $controller,string $method) : Route{
    return new Route ('GET|POST',$pattern,$controller,$method);
}

public function matches(string $method,string $url):bool {
    if (!preg_match('/^' . $this->reqMethod .'$/',$method)){
        return false;

    }

    return boolval(preg_match($this->pattern,$url));
}


public function getControllerName():string{
    return $this->controller;
}

public function getMethodName():string{
    return $this->method;
}

public function &extractArguments(string $url):array{
    $matches=[];
    $arguments=[];
    preg_match_all($this->pattern,$url,$matches);
    if(isset($matches[1])){
        $arguments=$matches[1];
    }
    return $arguments;
    }




    
}

