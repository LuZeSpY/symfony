<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [
            [['_route' => 'page_blog', '_controller' => 'App\\Controller\\BlogController::index'], null, null, null, false, false, null],
            [['_route' => 'frontend_index', '_controller' => 'App\\Controller\\FrontendController::index'], null, null, null, false, false, null],
        ],
        '/posts' => [[['_route' => 'blog_articles', '_controller' => 'App\\Controller\\BlogController::posts'], null, null, null, false, false, null]],
        '/carte' => [[['_route' => 'frontend_carte', '_controller' => 'App\\Controller\\FrontendController::carte'], null, null, null, false, false, null]],
        '/reservation' => [[['_route' => 'frontend_reservation', '_controller' => 'App\\Controller\\FrontendController::reservation'], null, null, null, false, false, null]],
        '/a-propos' => [[['_route' => 'a-propos', '_controller' => 'App\\Controller\\AproposController::index'], null, null, null, false, false, null]],
        '/auteur-du-blog' => [[['_route' => 'blog', '_controller' => 'App\\Controller\\AuteurController::index'], null, null, null, false, false, null]],
        '/articles' => [[['_route' => 'articles', '_controller' => 'App\\Controller\\ArticlesController::index'], null, null, null, false, false, null]],
        '/article/fonctionnement-des-applications-symfony' => [[['_route' => 'post_item', '_controller' => 'App\\Controller\\PostController::item'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
