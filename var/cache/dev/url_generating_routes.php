<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'consulta_index' => [[], ['_controller' => 'App\\Controller\\ConsultaController::index'], [], [['text', '/consulta/']], [], []],
    'consulta_new' => [[], ['_controller' => 'App\\Controller\\ConsultaController::new'], [], [['text', '/consulta/new']], [], []],
    'consulta_show' => [['id'], ['_controller' => 'App\\Controller\\ConsultaController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/consulta']], [], []],
    'consulta_edit' => [['id'], ['_controller' => 'App\\Controller\\ConsultaController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/consulta']], [], []],
    'consulta_delete' => [['id'], ['_controller' => 'App\\Controller\\ConsultaController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/consulta']], [], []],
    'paciente_index' => [[], ['_controller' => 'App\\Controller\\PacienteController::index'], [], [['text', '/paciente/']], [], []],
    'paciente_new' => [[], ['_controller' => 'App\\Controller\\PacienteController::new'], [], [['text', '/paciente/new']], [], []],
    'paciente_show' => [['id'], ['_controller' => 'App\\Controller\\PacienteController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/paciente']], [], []],
    'paciente_edit' => [['id'], ['_controller' => 'App\\Controller\\PacienteController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/paciente']], [], []],
    'paciente_delete' => [['id'], ['_controller' => 'App\\Controller\\PacienteController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/paciente']], [], []],
    'receta_index' => [[], ['_controller' => 'App\\Controller\\RecetaController::index'], [], [['text', '/receta/']], [], []],
    'receta_new' => [[], ['_controller' => 'App\\Controller\\RecetaController::new'], [], [['text', '/receta/new']], [], []],
    'receta_show' => [['id'], ['_controller' => 'App\\Controller\\RecetaController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/receta']], [], []],
    'receta_edit' => [['id'], ['_controller' => 'App\\Controller\\RecetaController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/receta']], [], []],
    'receta_delete' => [['id'], ['_controller' => 'App\\Controller\\RecetaController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/receta']], [], []],
];
