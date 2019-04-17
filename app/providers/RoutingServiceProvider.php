<?php

require __DIR__.'/../services/RoutingService.php';

use Symfony\Component\Routing\Route;
use Symfony\Component\HttpFoundation\Response;

class RoutingServiceProvider extends RoutingService
{
    public function boot()
    {
        $this->routes->add('products', new Route('/products/{name}', ['name' => 'World']));
        $this->routes->add('home', new Route('/'));
        $path = $this->getPath();
        $this->context->fromRequest($this->request);
        $this->attributes = $this->matcher->match($this->getPath());
        
        try {
            extract($this->matcher->match($this->getPath()), EXTR_SKIP);
            ob_start();
            include sprintf(__DIR__.'/../../views/%s.php', $_route);
        
            $this->response = new Response(ob_get_clean());
        } catch (Routing\Exception\ResourceNotFoundException $exception) {
            $this->response = new Response('Not Found', 404);
        } catch (Exception $exception) {
            $this->response = new Response('An error occurred', 500);
        }

        $this->response->send();
    }
}



