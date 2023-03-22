<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/all_rapport_admin' => [[['_route' => 'dashboard_user_rapport', '_controller' => 'App\\Controller\\RapportController::dashboard_user'], null, ['GET' => 0], null, false, false, null]],
        '/all_rapport_admins' => [[['_route' => 'dashboard_user_rapports', '_controller' => 'App\\Controller\\RapportController::dashboard_user_rapport'], null, ['GET' => 0], null, false, false, null]],
        '/recent/rapport' => [[['_route' => 'rapport_rapport_user', '_controller' => 'App\\Controller\\RapportController::recent_rapport'], null, ['GET' => 0], null, false, false, null]],
        '/api/rapport/add' => [[['_route' => 'create_rapport', '_controller' => 'App\\Controller\\RapportController::insertUser'], null, ['POST' => 0], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\UtilisateurController::logout'], null, ['GET' => 0], null, false, false, null]],
        '/admin' => [[['_route' => 'app_project', '_controller' => 'App\\Controller\\UtilisateurController::index'], null, null, null, false, false, null]],
        '/all/users' => [[['_route' => 'gestion/users', '_controller' => 'App\\Controller\\UtilisateurController::dashboard_user'], null, ['GET' => 0], null, false, false, null]],
        '/user/add' => [[['_route' => 'app_utilisateur', '_controller' => 'App\\Controller\\UtilisateurController::insertUser'], null, ['POST' => 0], null, false, false, null]],
        '/api/login_check' => [[['_route' => 'api_login_check'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|ll_rapport_admin_show/([^/]++)(*:42)'
                    .'|pi/rapport/edit/([^/]++)(*:73)'
                .')'
                .'|/find/rapport/([^/]++)(*:103)'
                .'|/rapport/delete/(?'
                    .'|([^/]++)(*:138)'
                    .'|admin/([^/]++)(*:160)'
                .')'
                .'|/user/delete/([^/]++)(*:190)'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:226)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        42 => [[['_route' => 'dashboard_user_rapports_show', '_controller' => 'App\\Controller\\RapportController::dashboard_user_rapport_print'], ['id'], ['GET' => 0], null, false, true, null]],
        73 => [[['_route' => 'rapports_update', '_controller' => 'App\\Controller\\RapportController::edit'], ['id'], ['PUT' => 0], null, false, true, null]],
        103 => [[['_route' => 'find_user_rapport', '_controller' => 'App\\Controller\\RapportController::findRapport'], ['id'], ['GET' => 0], null, false, true, null]],
        138 => [[['_route' => 'rapports_delete', '_controller' => 'App\\Controller\\RapportController::deleteRapport'], ['id'], ['DELETE' => 0, 'GET' => 1], null, false, true, null]],
        160 => [[['_route' => 'rapports_delete_admin', '_controller' => 'App\\Controller\\RapportController::deleteRapportAdmin'], ['id'], ['DELETE' => 0, 'GET' => 1], null, false, true, null]],
        190 => [[['_route' => 'app_utilisateur_delete', '_controller' => 'App\\Controller\\UtilisateurController::deleteUser'], ['id'], ['DELETE' => 0, 'POST' => 1, 'GET' => 2], null, false, true, null]],
        226 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
