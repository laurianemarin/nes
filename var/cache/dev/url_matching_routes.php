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
        '/category' => [[['_route' => 'category_index', '_controller' => 'App\\Controller\\CategoryController::index'], null, ['GET' => 0], null, true, false, null]],
        '/category/new' => [[['_route' => 'category_new', '_controller' => 'App\\Controller\\CategoryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/developer' => [[['_route' => 'developer_index', '_controller' => 'App\\Controller\\DeveloperController::index'], null, ['GET' => 0], null, true, false, null]],
        '/developer/new' => [[['_route' => 'developer_new', '_controller' => 'App\\Controller\\DeveloperController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/editor' => [[['_route' => 'editor_index', '_controller' => 'App\\Controller\\EditorController::index'], null, ['GET' => 0], null, true, false, null]],
        '/editor/new' => [[['_route' => 'editor_new', '_controller' => 'App\\Controller\\EditorController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/game' => [[['_route' => 'game_index', '_controller' => 'App\\Controller\\GameController::index'], null, ['GET' => 0], null, true, false, null]],
        '/game/new' => [[['_route' => 'game_new', '_controller' => 'App\\Controller\\GameController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginFormController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\LoginFormController::logout'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\StaticPages::home'], null, null, null, false, false, null]],
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
                .'|/category/([^/]++)(?'
                    .'|(*:190)'
                    .'|/edit(*:203)'
                    .'|(*:211)'
                .')'
                .'|/developer/([^/]++)(?'
                    .'|(*:242)'
                    .'|/edit(*:255)'
                    .'|(*:263)'
                .')'
                .'|/editor/([^/]++)(?'
                    .'|(*:291)'
                    .'|/edit(*:304)'
                    .'|(*:312)'
                .')'
                .'|/game(?'
                    .'|/([^/]++)(?'
                        .'|(*:341)'
                        .'|/edit(*:354)'
                        .'|(*:362)'
                    .')'
                    .'|sBy(?'
                        .'|Category/([^/]++)(*:394)'
                        .'|Editor/([^/]++)(*:417)'
                        .'|Developer/([^/]++)(*:443)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        190 => [[['_route' => 'category_show', '_controller' => 'App\\Controller\\CategoryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        203 => [[['_route' => 'category_edit', '_controller' => 'App\\Controller\\CategoryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        211 => [[['_route' => 'category_delete', '_controller' => 'App\\Controller\\CategoryController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        242 => [[['_route' => 'developer_show', '_controller' => 'App\\Controller\\DeveloperController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        255 => [[['_route' => 'developer_edit', '_controller' => 'App\\Controller\\DeveloperController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        263 => [[['_route' => 'developer_delete', '_controller' => 'App\\Controller\\DeveloperController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        291 => [[['_route' => 'editor_show', '_controller' => 'App\\Controller\\EditorController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        304 => [[['_route' => 'editor_edit', '_controller' => 'App\\Controller\\EditorController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        312 => [[['_route' => 'editor_delete', '_controller' => 'App\\Controller\\EditorController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        341 => [[['_route' => 'game_show', '_controller' => 'App\\Controller\\GameController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        354 => [[['_route' => 'game_edit', '_controller' => 'App\\Controller\\GameController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        362 => [[['_route' => 'game_delete', '_controller' => 'App\\Controller\\GameController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        394 => [[['_route' => 'gamesByCategory', '_controller' => 'App\\Controller\\Games::gamesByCategory'], ['category'], null, null, false, true, null]],
        417 => [[['_route' => 'gamesByEditor', '_controller' => 'App\\Controller\\Games::gamesByEditor'], ['editor'], null, null, false, true, null]],
        443 => [
            [['_route' => 'gamesByDeveloper', '_controller' => 'App\\Controller\\Games::gamesByDeveloper'], ['developer'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
