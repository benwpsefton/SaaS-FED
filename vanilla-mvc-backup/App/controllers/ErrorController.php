<?php

/**
 * error controller - handles 403 and 404 errors
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

class ErrorController
{
    /**
     * Makes the response code for HTTP response equal to 404 before loading the error view
     *
     * @param $message
     * @return void
     */
    public static function notFound($message = 'Resource not found')
    {
        http_response_code(404);

        loadView('error', [
            'status' => '404',
            'message' => $message
        ]);
    }

    /**
     * Shows the 403 page when a user tries to perform an action they are not authorised to do
     *
     * @param $message
     * @return void
     */
    public static function unauthorized($message = 'You are not authorized to view this resource')
    {
        http_response_code(403);

        loadView('error', [
            'status' => '403',
            'message' => $message
        ]);
    }
}