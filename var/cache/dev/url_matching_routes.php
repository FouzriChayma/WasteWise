<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_guest', '_controller' => 'App\\Controller\\HomeController::indexGuest'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/banned' => [[['_route' => 'app_ban', '_controller' => 'App\\Controller\\SecurityController::banned'], null, null, null, false, false, null]],
        '/terms_and_conditions' => [[['_route' => 'terms_and_conditions', '_controller' => 'App\\Controller\\TermsAndConditionsController::index'], null, null, null, false, false, null]],
        '/user/search-users' => [[['_route' => 'search_users', '_controller' => 'App\\Controller\\UserController::searchUsers'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user/search-users-driver' => [[['_route' => 'search_users_driver', '_controller' => 'App\\Controller\\UserController::searchUsersD'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user/search-users-supp' => [[['_route' => 'search_users_supp', '_controller' => 'App\\Controller\\UserController::searchUsersS'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user/search-users-client' => [[['_route' => 'search_users_client', '_controller' => 'App\\Controller\\UserController::searchUsersC'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user/ExportPdf' => [[['_route' => 'app_user_pdf', '_controller' => 'App\\Controller\\UserController::ExportPdf'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::indexAdmin'], null, ['GET' => 0], null, true, false, null]],
        '/user/users' => [[['_route' => 'app_user_index_users', '_controller' => 'App\\Controller\\UserController::indexUsers'], null, ['GET' => 0], null, false, false, null]],
        '/user/Suppliers' => [[['_route' => 'app_user_index_supp', '_controller' => 'App\\Controller\\UserController::indexSupplier'], null, ['GET' => 0], null, false, false, null]],
        '/user/Drivers' => [[['_route' => 'app_user_index_driver', '_controller' => 'App\\Controller\\UserController::indexDriver'], null, ['GET' => 0], null, false, false, null]],
        '/user/Clients' => [[['_route' => 'app_user_index_client', '_controller' => 'App\\Controller\\UserController::indexClient'], null, ['GET' => 0], null, false, false, null]],
        '/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:43)'
                .'|/user/(?'
                    .'|([^/]++)(?'
                        .'|/(?'
                            .'|ban(?'
                                .'|S(*:81)'
                                .'|D(*:89)'
                                .'|C(*:97)'
                            .')'
                            .'|unban(?'
                                .'|S(*:114)'
                                .'|D(*:123)'
                                .'|C(*:132)'
                            .')'
                        .')'
                        .'|(*:142)'
                    .')'
                    .'|profile/([^/]++)(*:167)'
                    .'|([^/]++)(?'
                        .'|/(?'
                            .'|edit(?'
                                .'|(*:197)'
                                .'|P(?'
                                    .'|ass(?'
                                        .'|word(?'
                                            .'|(*:222)'
                                            .'|/(?'
                                                .'|DB(*:236)'
                                                .'|Front(*:249)'
                                            .')'
                                        .')'
                                        .'|User(*:263)'
                                    .')'
                                    .'|rofile(*:278)'
                                .')'
                            .')'
                            .'|confirmRole(*:299)'
                            .'|AssignRole/DB(*:320)'
                        .')'
                        .'|(*:329)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:370)'
                    .'|wdt/([^/]++)(*:390)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:436)'
                            .'|router(*:450)'
                            .'|exception(?'
                                .'|(*:470)'
                                .'|\\.css(*:483)'
                            .')'
                        .')'
                        .'|(*:493)'
                    .')'
                .')'
                .'|/thanks/([^/]++)(*:519)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        43 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        81 => [[['_route' => 'app_user_ban_S', '_controller' => 'App\\Controller\\UserController::Ban'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        89 => [[['_route' => 'app_user_ban_D', '_controller' => 'App\\Controller\\UserController::BanD'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        97 => [[['_route' => 'app_user_ban_C', '_controller' => 'App\\Controller\\UserController::BanC'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        114 => [[['_route' => 'app_user_unban_S', '_controller' => 'App\\Controller\\UserController::unBan'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        123 => [[['_route' => 'app_user_unban_D', '_controller' => 'App\\Controller\\UserController::unBanD'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        132 => [[['_route' => 'app_user_unban_C', '_controller' => 'App\\Controller\\UserController::unBanC'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        142 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        167 => [[['_route' => 'app_profile', '_controller' => 'App\\Controller\\UserController::showFront'], ['id'], ['GET' => 0], null, false, true, null]],
        197 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        222 => [[['_route' => 'edit_password', '_controller' => 'App\\Controller\\UserController::editPass'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        236 => [[['_route' => 'edit_password_db', '_controller' => 'App\\Controller\\UserController::editPassDB'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        249 => [[['_route' => 'edit_password_db_front', '_controller' => 'App\\Controller\\UserController::editPassDBFront'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        263 => [[['_route' => 'app_pass_front', '_controller' => 'App\\Controller\\UserController::editPassFront'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        278 => [[['_route' => 'app_front_edit', '_controller' => 'App\\Controller\\UserController::editProfile'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        299 => [[['_route' => 'confirm_role', '_controller' => 'App\\Controller\\UserController::ConfirmRole'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        320 => [[['_route' => 'assign_role', '_controller' => 'App\\Controller\\UserController::AssignRole'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        329 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        370 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        390 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        436 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        450 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        470 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        483 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        493 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        519 => [
            [['_route' => 'thanks', '_controller' => 'App\\Controller\\UserController::thanks'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
