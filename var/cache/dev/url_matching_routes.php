<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/all_rapport' => [[['_route' => 'dashboard_user_rapport', '_controller' => 'App\\Controller\\RapportController::dashboard_user'], null, ['GET' => 0], null, false, false, null]],
        '/recent/rapport' => [[['_route' => 'rapport_rapport_user', '_controller' => 'App\\Controller\\RapportController::recent_rapport'], null, ['GET' => 0], null, false, false, null]],
        '/api/rapport/add' => [[['_route' => 'create_rapport', '_controller' => 'App\\Controller\\RapportController::insertUser'], null, ['POST' => 0], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\UtilisateurController::logout'], null, ['GET' => 0], null, false, false, null]],
        '/admin' => [[['_route' => 'app_project', '_controller' => 'App\\Controller\\UtilisateurController::index'], null, null, null, false, false, null]],
        '/dashboard_users' => [[['_route' => 'dashboard_user', '_controller' => 'App\\Controller\\UtilisateurController::dashboard_user'], null, ['GET' => 0], null, false, false, null]],
        '/user/add' => [[['_route' => 'app_utilisateur', '_controller' => 'App\\Controller\\UtilisateurController::insertUser'], null, ['POST' => 0], null, false, false, null]],
        '/api/login_check' => [[['_route' => 'api_login_check'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/find/rapport/([^/]++)(*:29)'
                .'|/api/rapport/edit/([^/]++)(*:62)'
                .'|/rapport/delete/([^/]++)(*:93)'
                .'|/user/delete/([^/]++)(*:121)'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:157)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        29 => [[['_route' => 'find_user_rapport', '_controller' => 'App\\Controller\\RapportController::findRapport'], ['id'], ['GET' => 0], null, false, true, null]],
        62 => [[['_route' => 'rapports_update', '_controller' => 'App\\Controller\\RapportController::edit'], ['id'], ['PUT' => 0], null, false, true, null]],
        93 => [[['_route' => 'rapports_delete', '_controller' => 'App\\Controller\\RapportController::deleteRapport'], ['id'], ['DELETE' => 0, 'GET' => 1], null, false, true, null]],
        121 => [[['_route' => 'app_utilisateur_delete', '_controller' => 'App\\Controller\\UtilisateurController::deleteUser'], ['id'], ['DELETE' => 0, 'POST' => 1, 'GET' => 2], null, false, true, null]],
        157 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
