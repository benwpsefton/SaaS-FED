<?php

/**
 * home controller - added the following:
 * A protected variable to hold the database connection
 * A constructor to connect to the database
 * An index method that retrieves the latest six products and sends them to the home view for display
 *
 * filename: ErrorController.php
 * location: app/controllers
 * project: SaaS-FED-Notes
 * date created 20/04/2025
 *
 * author: ben sefton <20127535@tafe.wa.edu.au>
 *
 */

namespace App\controllers;

protected $db;
class HomeController
{
    /**
     * Store the config data in a $config variable
     * Add $config details to Database class
     */
    public function __construct()
    {
        $config = require basePath('config/db.php');
        $this->db = new Database($config);
    }

    /**
     * Retrieve the last 6 added products
     * Retrieve a count of all the products
     * Retrieve a count of all the users
     * Load the home view with the above data for display
     *
     * @return void
     */
    public function __index()
    {
        $products = $this->db->query(
            'SELECT * FROM products ORDER BY created_at DESC LIMIT 6'
        )->fetchAll();

        $productCount = $this->db->query(
            'SELECT count(id) as total FROM products '
        )->fetch();

        $userCount = $this->db->query(
            'SELECT count(id) as total FROM users'
        )->fetch();

        loadView('home', [
            'products' => $products,
            'productCount' => $productCount,
            'userCount' => $userCount,
        ]);
    }
}