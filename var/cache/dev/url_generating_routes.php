<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'page_blog' => [[], ['_controller' => 'App\\Controller\\BlogController::index'], [], [['text', '/']], [], [], []],
    'blog_articles' => [[], ['_controller' => 'App\\Controller\\BlogController::posts'], [], [['text', '/posts']], [], [], []],
    'frontend_index' => [[], ['_controller' => 'App\\Controller\\FrontendController::index'], [], [['text', '/']], [], [], []],
    'frontend_carte' => [[], ['_controller' => 'App\\Controller\\FrontendController::carte'], [], [['text', '/carte']], [], [], []],
    'frontend_reservation' => [[], ['_controller' => 'App\\Controller\\FrontendController::reservation'], [], [['text', '/reservation']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'a-propos' => [[], ['_controller' => 'App\\Controller\\AproposController::index'], [], [['text', '/a-propos']], [], [], []],
    'blog' => [[], ['_controller' => 'App\\Controller\\AuteurController::index'], [], [['text', '/auteur-du-blog']], [], [], []],
    'articles' => [[], ['_controller' => 'App\\Controller\\ArticlesController::index'], [], [['text', '/articles']], [], [], []],
    'post_item' => [[], ['_controller' => 'App\\Controller\\PostController::item'], [], [['text', '/article/fonctionnement-des-applications-symfony']], [], [], []],
    'contact' => [[], ['_controller' => 'App\\Controller\\ContactController::index'], [], [['text', '/contact']], [], [], []],
];
