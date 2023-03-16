<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'dashboard_user_rapport' => [[], ['_controller' => 'App\\Controller\\RapportController::dashboard_user'], [], [['text', '/all_rapport']], [], [], []],
    'create_rapport' => [[], ['_controller' => 'App\\Controller\\RapportController::insertUser'], [], [['text', '/api/rapport/add']], [], [], []],
    'rapports_delete' => [['id'], ['_controller' => 'App\\Controller\\RapportController::deleteRapport'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/rapport/delete']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_project' => [[], ['_controller' => 'App\\Controller\\UtilisateurController::index'], [], [['text', '/admin']], [], [], []],
    'dashboard_user' => [[], ['_controller' => 'App\\Controller\\UtilisateurController::dashboard_user'], [], [['text', '/dashboard_users']], [], [], []],
    'app_utilisateur' => [[], ['_controller' => 'App\\Controller\\UtilisateurController::insertUser'], [], [['text', '/user/add']], [], [], []],
    'app_utilisateur_delete' => [['id'], ['_controller' => 'App\\Controller\\UtilisateurController::deleteUser'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user/delete']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'api_login_check' => [[], [], [], [['text', '/api/login_check']], [], [], []],
];
