<?php

/**
 * Authorisation Class
 *
 * Method checks resource ownership with current user
 *
 * Filename:        Authorisation.php
 * Location:
 * Project:         vanilla-mvc
 * Date Created:    20/04/2025
 *
 * Author:          ben sefton
 *
 */


namespace Framework;

class Authorisation
{
    /**
     * Checks if a resource is owned by current user
     *
     * @param $resourceId
     * @return bool
     */
    public static function isOwner($resourceId)
    {
        $sessionUser = Session::get('user');

        if ($sessionUser !== null && isset($sessionUser['id'])) {
            $sessionUserId = (int)$sessionUser['id'];
            return $sessionUserId === $resourceId;
        }

        return false;
    }
}