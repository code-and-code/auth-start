<?php
namespace Cac\Auth\Controllers;

use Cac\Auth\Authentication\Authenticate;

class AuthController extends Authenticate
{
    public function __construct()
    {
        $this->setConfig('auth.auth');

    }

    public function getLogin()
    {
       echo $this->render('Authentication:login');
    }

    public function getRegister()
    {
        echo $this->render('register');
    }

}