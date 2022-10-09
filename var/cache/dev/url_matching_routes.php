<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api' => [[['_route' => 'app_api', '_controller' => 'App\\Controller\\ApiController::index'], null, null, null, false, false, null]],
        '/add-product' => [[['_route' => 'add_product', '_controller' => 'App\\Controller\\ProductController::addProduct'], null, null, null, false, false, null]],
        '/products' => [[['_route' => 'products', '_controller' => 'App\\Controller\\ProductController::products'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/déconnexion' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'accueil', '_controller' => 'App\\Controller\\AccueilController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/product/([^/]++)(*:24)'
                .'|/modify\\-product/([^/]++)(*:56)'
                .'|/delete\\-product/([^/]++)(*:88)'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:123)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => 'product', '_controller' => 'App\\Controller\\ProductController::product'], ['id'], null, null, false, true, null]],
        56 => [[['_route' => 'modify_product', '_controller' => 'App\\Controller\\ProductController::modifyProduct'], ['id'], null, null, false, true, null]],
        88 => [[['_route' => 'delete_product', '_controller' => 'App\\Controller\\ProductController::deleteProduct'], ['id'], null, null, false, true, null]],
        123 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
