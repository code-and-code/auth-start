<?php

namespace Cac\Auth\Providers;

use Cac\Provider\ServiceProvider;
use Cac\Route\Router;
use Cac\Support\Cache;

class AuthProvider extends  ServiceProvider
{
    protected $namespace  = 'Cac\Auth\Controllers';

    public function boot()
    {
        $this->mapRoutes();
        $this->registerRoutes();
        $this->loadViewsFrom('Authentication', '../vendor/codeandcode/auth-start/src/views/');
    }

    public function mapRoutes()
    {
        Router::get(['route'  => '/auth',       'namespace' => $this->namespace,'controller' => 'AuthController','action' => 'getLogin']);
        Router::post(['route' => '/auth/login', 'namespace' => $this->namespace,'controller' => 'AuthController','action' => 'postLogin']);
        Router::get(['route'  => '/auth/logout', 'namespace' => $this->namespace,'controller' => 'AuthController','action' => 'logout'   ]);
    }

    public function registerRoutes()
    {
        Router::get(['route'  => '/register',       'namespace' => $this->namespace,'controller' => 'AuthController','action'  => 'getRegister'  ]);
        Router::post(['route'  => '/register/store','namespace' => $this->namespace,'controller' => 'AuthController','action'  => 'postRegister'  ]);
    }

 }
