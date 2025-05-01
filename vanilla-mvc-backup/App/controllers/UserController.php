<?php

/**
 * User Controller
 *
 * Provides the Register, Login and Logout capabilities
 * of the application
 *
 * Filename:        UserController.php
 * Location:        App/Controllers
 * Project:         SaaS-Vanilla-MVC
 * Date Created:    20/04/2025
 *
 * Author:          ben sefton <20127535@tafe.wa.edu.au>
 *
 */

namespace App\controllers;

use Framework\Database;
use Framework\Session;
use Framework\Validation;

protected $db;

class UserController
{
    public function __construct()
    {
        $config = require basePath('config/db.php');
        $this->db = new Database($config);
    }
    public function login()
    {
        exit('User login not implemented');
    }

    public function create()
    {
        exit('User registration not implemented');
    }

    public function store()
    {
        exit('User creation not implemented');
    }

    public function logout()
    {
        exit('User logout not implemented');
    }

    public function authenticate()
    {
        exit('User authentication not implemented');
    }
    public function create()
    {
        loadView('users/create');
    }
}