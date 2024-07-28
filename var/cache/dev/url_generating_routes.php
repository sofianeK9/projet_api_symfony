<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_font' => [['fontName'], ['_controller' => 'web_profiler.controller.profiler::fontAction'], [], [['text', '.woff2'], ['variable', '/', '[^/\\.]++', 'fontName', true], ['text', '/_profiler/font']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'app_admin_article_index' => [[], ['_controller' => 'App\\Controller\\Admin\\ArticleController::index'], [], [['text', '/admin/article/']], [], [], []],
    'app_admin_article_new' => [[], ['_controller' => 'App\\Controller\\Admin\\ArticleController::new'], [], [['text', '/admin/article/new']], [], [], []],
    'app_admin_article_show' => [['id'], ['_controller' => 'App\\Controller\\Admin\\ArticleController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/article']], [], [], []],
    'app_admin_article_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\ArticleController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/article']], [], [], []],
    'app_admin_article_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\ArticleController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/article']], [], [], []],
    'app_api' => [[], ['_controller' => 'App\\Controller\\ApiController::index'], [], [['text', '/api']], [], [], []],
    'article_detail' => [['slug', 'id'], ['_controller' => 'App\\Controller\\ArticleController::show'], ['id' => '\\d+', 'slug' => '[a-z0-9-]+'], [['variable', '-', '\\d+', 'id', true], ['variable', '/', '[a-z0-9-]+', 'slug', true], ['text', '/article']], [], [], []],
    'app_contact' => [[], ['_controller' => 'App\\Controller\\ContactController::index'], [], [['text', '/contact']], [], [], []],
    'app_home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], [], []],
    'app_mentions_legales' => [[], ['_controller' => 'App\\Controller\\MentionsLegalesController::index'], [], [['text', '/mentions/legales']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_verify_email' => [[], ['_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], [], [['text', '/verify/email']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'App\Controller\Admin\ArticleController::index' => [[], ['_controller' => 'App\\Controller\\Admin\\ArticleController::index'], [], [['text', '/admin/article/']], [], [], []],
    'App\Controller\Admin\ArticleController::new' => [[], ['_controller' => 'App\\Controller\\Admin\\ArticleController::new'], [], [['text', '/admin/article/new']], [], [], []],
    'App\Controller\Admin\ArticleController::show' => [['id'], ['_controller' => 'App\\Controller\\Admin\\ArticleController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/article']], [], [], []],
    'App\Controller\Admin\ArticleController::edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\ArticleController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/article']], [], [], []],
    'App\Controller\Admin\ArticleController::delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\ArticleController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/article']], [], [], []],
    'App\Controller\ApiController::index' => [[], ['_controller' => 'App\\Controller\\ApiController::index'], [], [['text', '/api']], [], [], []],
    'App\Controller\ArticleController::show' => [['slug', 'id'], ['_controller' => 'App\\Controller\\ArticleController::show'], ['id' => '\\d+', 'slug' => '[a-z0-9-]+'], [['variable', '-', '\\d+', 'id', true], ['variable', '/', '[a-z0-9-]+', 'slug', true], ['text', '/article']], [], [], []],
    'App\Controller\ContactController::index' => [[], ['_controller' => 'App\\Controller\\ContactController::index'], [], [['text', '/contact']], [], [], []],
    'App\Controller\HomeController::index' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], [], []],
    'App\Controller\MentionsLegalesController::index' => [[], ['_controller' => 'App\\Controller\\MentionsLegalesController::index'], [], [['text', '/mentions/legales']], [], [], []],
    'App\Controller\RegistrationController::register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'App\Controller\RegistrationController::verifyUserEmail' => [[], ['_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], [], [['text', '/verify/email']], [], [], []],
    'App\Controller\SecurityController::login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'App\Controller\SecurityController::logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
];