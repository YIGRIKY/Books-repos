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
        '/admin' => [[['_route' => 'admin_home', '_controller' => 'App\\Controller\\Admin\\AdminHomeController::index'], null, null, null, false, false, null]],
        '/admin/user' => [[['_route' => 'admin_user', '_controller' => 'App\\Controller\\Admin\\AdminUserController::index'], null, null, null, false, false, null]],
        '/admin/user/create' => [[['_route' => 'admin_user_create', '_controller' => 'App\\Controller\\Admin\\AdminUserController::create'], null, null, null, false, false, null]],
        '/admin/user/books' => [[['_route' => 'admin_user_books', '_controller' => 'App\\Controller\\Admin\\AdminUserController::createBooks'], null, null, null, false, false, null]],
        '/admin/user/category' => [[['_route' => 'admin_user_category', '_controller' => 'App\\Controller\\Admin\\AdminUserController::createCategory'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\Main\\HomeController::index'], null, null, null, false, false, null]],
        '/manager/books' => [[['_route' => 'manager_books', '_controller' => 'App\\Controller\\Manager\\ManagerActionsController::createBooks'], null, null, null, false, false, null]],
        '/manager/category' => [[['_route' => 'manager_category', '_controller' => 'App\\Controller\\Manager\\ManagerActionsController::createCategory'], null, null, null, false, false, null]],
        '/manager' => [[['_route' => 'manager_home', '_controller' => 'App\\Controller\\Manager\\ManagerHomeController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/admin/user/books/update/([^/]++)(*:202)'
                .'|/book/([^/]++)(*:224)'
                .'|/manager/books/update/([^/]++)(*:262)'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        202 => [[['_route' => 'admin_user_update', '_controller' => 'App\\Controller\\Admin\\AdminUserController::updateBooks'], ['id'], null, null, false, true, null]],
        224 => [[['_route' => 'book_detail', '_controller' => 'App\\Controller\\Main\\HomeController::booksDetail'], ['id'], null, null, false, true, null]],
        262 => [
            [['_route' => 'manager_user_update', '_controller' => 'App\\Controller\\Manager\\ManagerActionsController::updateBooks'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
