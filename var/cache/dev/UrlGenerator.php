<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '\\d+', 'code'], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    'admin_home' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminHomeController::index'], [], [['text', '/admin']], [], []],
    'admin_user' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminUserController::index'], [], [['text', '/admin/user']], [], []],
    'admin_user_create' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminUserController::create'], [], [['text', '/admin/user/create']], [], []],
    'admin_user_books' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminUserController::createBooks'], [], [['text', '/admin/user/books']], [], []],
    'admin_user_category' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminUserController::createCategory'], [], [['text', '/admin/user/category']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\Main\\HomeController::index'], [], [['text', '/']], [], []],
    'manager_books' => [[], ['_controller' => 'App\\Controller\\Manager\\ManagerActionsController::createBooks'], [], [['text', '/manager/books']], [], []],
    'manager_category' => [[], ['_controller' => 'App\\Controller\\Manager\\ManagerActionsController::createCategory'], [], [['text', '/manager/category']], [], []],
    'manager_home' => [[], ['_controller' => 'App\\Controller\\Manager\\ManagerHomeController::index'], [], [['text', '/manager']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
];
