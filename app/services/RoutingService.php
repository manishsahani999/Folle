<?php

use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class RoutingService 
{
    public $request;
    public $response;
    public $context;
    public $matcher;
    public $routes;

    public function __construct()
    {
        $this->request = Request::createFromGlobals();
        $this->response = new Response();
        $this->context = new RequestContext();
        $this->routes = new RouteCollection();
        $this->matcher = new UrlMatcher($this->routes, $this->context);
    }

    public function getPath()
    {
        return $this->request->getPathInfo();
    }
}
