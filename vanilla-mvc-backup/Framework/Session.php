<?php

/**
 * Router Access Class
 *
 * Directs the incoming requests to the correct location
 *
 * Filename:        Ratabase.php
 * Location:
 * Project:         vanilla-mvc
 * Date Created:    20/04/2025
 *
 * Author:          ben sefton
 *
 */

namespace Framework;


namespace Framework;

class Session
{
    /**
     * Start the session
     *
     * @return void
     */
    public static function start()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }
    /**
     * Clear all session data
     *
     * @return void
     */
    public static function clearAll()
    {
        session_unset();
        session_destroy();
    }
    /**
     * Clear session by key
     *
     * @param string $key
     * @return void
     */
    public static function clear($key)
    {
        if (isset($_SESSION[$key])) {
            unset($_SESSION[$key]);
        }
    }
    /**
     * Get a session value by the key
     *
     * @param string $key
     * @param mixed $default
     * @return mixed
     */
    public static function get($key, $default = null)
    {
        return isset($_SESSION[$key]) ? $_SESSION[$key] : $default;
    }
    /**
     * Set a session key/value pair
     *
     * @param string $key
     * @param mixed $value
     * @return void
     */
    public static function set($key, $value)
    {
        $_SESSION[$key] = $value;
    }
    /**
     * Check if session key exists
     *
     * @param string $key
     * @return bool
     */
    public static function has($key)
    {
        return isset($_SESSION[$key]);
    }

    /**
     * Sets flash message
     *
     * @param $key
     * @param $message
     * @return void
     */
    public static function setFlashMessage($key, $message)
    {
        self::set('flash_' . $key, $message);
    }

    /**
     * Makes key 'transient'
     *
     * @param $key
     * @param $default
     * @return mixed
     */
    public static function getFlashMessage($key, $default = null)
    {
        $message = self::get('flash_' . $key, $default);
        self::clear('flash_' . $key);
        return $message;
    }
}