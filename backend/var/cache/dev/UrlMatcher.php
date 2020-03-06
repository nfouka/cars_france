<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/(en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/post(?'
                    .'|(*:92)'
                .')'
                .'|/(en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/post/new(*:186)'
                .'|/(en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/post/(\\d+)(*:282)'
                .'|/(en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/post/(\\d+)/edit(*:383)'
                .'|/(en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/post/([^/]++)/delete(*:489)'
                .'|/(en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/blog(*:573)'
                .'|/(en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/blog/rss\\.xml(*:666)'
                .'|/(en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/blog/page/([1-9]\\d*)(*:766)'
                .'|/(en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/blog/posts/([^/]++)(*:865)'
                .'|/(en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/blog/comment/([^/]++)/new(*:970)'
                .'|/(en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/blog/search(*:1061)'
                .'|/(en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/cars(*:1146)'
                .'|/(en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/login(*:1232)'
                .'|/(en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/logout(*:1319)'
                .'|/(en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/profile/edit(*:1412)'
                .'|/(en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/profile/change\\-password(*:1517)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:1557)'
                    .'|wdt/([^/]++)(*:1578)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:1625)'
                            .'|router(*:1640)'
                            .'|exception(?'
                                .'|(*:1661)'
                                .'|\\.css(*:1675)'
                            .')'
                        .')'
                        .'|(*:1686)'
                    .')'
                .')'
                .'|/(en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)?(*:1769)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        92 => [
            [['_route' => 'admin_index', '_controller' => 'App\\Controller\\Admin\\BlogController::index', '_locale' => 'en'], ['_locale'], ['GET' => 0], null, true, false, null],
            [['_route' => 'admin_post_index', '_controller' => 'App\\Controller\\Admin\\BlogController::index', '_locale' => 'en'], ['_locale'], ['GET' => 0], null, true, false, null],
        ],
        186 => [[['_route' => 'admin_post_new', '_controller' => 'App\\Controller\\Admin\\BlogController::new', '_locale' => 'en'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        282 => [[['_route' => 'admin_post_show', '_controller' => 'App\\Controller\\Admin\\BlogController::show', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0], null, false, true, null]],
        383 => [[['_route' => 'admin_post_edit', '_controller' => 'App\\Controller\\Admin\\BlogController::edit', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        489 => [[['_route' => 'admin_post_delete', '_controller' => 'App\\Controller\\Admin\\BlogController::delete', '_locale' => 'en'], ['_locale', 'id'], ['POST' => 0], null, false, false, null]],
        573 => [[['_route' => 'blog_index', 'page' => '1', '_format' => 'html', '_controller' => 'App\\Controller\\BlogController::index', '_locale' => 'en'], ['_locale'], ['GET' => 0], null, true, false, null]],
        666 => [[['_route' => 'blog_rss', 'page' => '1', '_format' => 'xml', '_controller' => 'App\\Controller\\BlogController::index', '_locale' => 'en'], ['_locale'], ['GET' => 0], null, false, false, null]],
        766 => [[['_route' => 'blog_index_paginated', '_format' => 'html', '_controller' => 'App\\Controller\\BlogController::index', '_locale' => 'en'], ['_locale', 'page'], ['GET' => 0], null, false, true, null]],
        865 => [[['_route' => 'blog_post', '_controller' => 'App\\Controller\\BlogController::postShow', '_locale' => 'en'], ['_locale', 'slug'], ['GET' => 0], null, false, true, null]],
        970 => [[['_route' => 'comment_new', '_controller' => 'App\\Controller\\BlogController::commentNew', '_locale' => 'en'], ['_locale', 'postSlug'], ['POST' => 0], null, false, false, null]],
        1061 => [[['_route' => 'blog_search', '_controller' => 'App\\Controller\\BlogController::search', '_locale' => 'en'], ['_locale'], ['GET' => 0], null, false, false, null]],
        1146 => [[['_route' => 'cars', '_controller' => 'App\\Controller\\CarsController::index', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1232 => [[['_route' => 'security_login', '_controller' => 'App\\Controller\\SecurityController::login', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1319 => [[['_route' => 'security_logout', '_controller' => 'App\\Controller\\SecurityController::logout', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1412 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit', '_locale' => 'en'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1517 => [[['_route' => 'user_change_password', '_controller' => 'App\\Controller\\UserController::changePassword', '_locale' => 'en'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1557 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        1578 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        1625 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        1640 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        1661 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
        1675 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
        1686 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        1769 => [
            [['_route' => 'homepage', 'template' => 'default/homepage.html.twig', '_locale' => 'en', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction'], ['_locale'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
