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
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/saveAutoPartsManually' => [[['_route' => 'save_auto_parts_manually', '_controller' => 'App\\AutoPartsWarehouse\\InfrastructureAutoPartsWarehouse\\ApiAutoPartsWarehouse\\ControllerAutoPartsWarehouse\\AutoPartsWarehouseController::saveAutoPartsManually'], null, null, null, false, false, null]],
        '/saveAutoPartsFile' => [[['_route' => 'save_auto_parts_file', '_controller' => 'App\\AutoPartsWarehouse\\InfrastructureAutoPartsWarehouse\\ApiAutoPartsWarehouse\\ControllerAutoPartsWarehouse\\AutoPartsWarehouseController::saveAutoPartsFile'], null, null, null, false, false, null]],
        '/saveAutoPartsImap' => [[['_route' => 'save_auto_parts_imap', '_controller' => 'App\\AutoPartsWarehouse\\InfrastructureAutoPartsWarehouse\\ApiAutoPartsWarehouse\\ControllerAutoPartsWarehouse\\AutoPartsWarehouseController::saveAutoPartsImap'], null, null, null, false, false, null]],
        '/saveAutoPartsApi' => [[['_route' => 'save_auto_parts_api', '_controller' => 'App\\AutoPartsWarehouse\\InfrastructureAutoPartsWarehouse\\ApiAutoPartsWarehouse\\ControllerAutoPartsWarehouse\\AutoPartsWarehouseController::saveAutoPartsApi'], null, null, null, false, false, null]],
        '/searchAutoPartsWarehouse' => [[['_route' => 'search_auto_parts_warehouse', '_controller' => 'App\\AutoPartsWarehouse\\InfrastructureAutoPartsWarehouse\\ApiAutoPartsWarehouse\\ControllerAutoPartsWarehouse\\AutoPartsWarehouseController::searchAutoPartsWarehouse'], null, null, null, false, false, null]],
        '/editAutoPartsWarehouse' => [[['_route' => 'edit_auto_parts_warehouse', '_controller' => 'App\\AutoPartsWarehouse\\InfrastructureAutoPartsWarehouse\\ApiAutoPartsWarehouse\\ControllerAutoPartsWarehouse\\AutoPartsWarehouseController::editAutoPartsWarehouse'], null, null, null, false, false, null]],
        '/deleteAutoPartsWarehouse' => [[['_route' => 'delete_auto_parts_warehouse', '_controller' => 'App\\AutoPartsWarehouse\\InfrastructureAutoPartsWarehouse\\ApiAutoPartsWarehouse\\ControllerAutoPartsWarehouse\\AutoPartsWarehouseController::deleteAutoPartsWarehouse'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'main_page', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/saveCounterparty' => [[['_route' => 'save_counterparty', '_controller' => 'App\\Counterparty\\InfrastructureCounterparty\\ApiCounterparty\\ControllerCounterparty\\CounterpartyController::saveCounterparty'], null, null, null, false, false, null]],
        '/searchCounterparty' => [[['_route' => 'search_counterparty', '_controller' => 'App\\Counterparty\\InfrastructureCounterparty\\ApiCounterparty\\ControllerCounterparty\\CounterpartyController::searchCounterparty'], null, null, null, false, false, null]],
        '/editCounterparty' => [[['_route' => 'edit_counterparty', '_controller' => 'App\\Counterparty\\InfrastructureCounterparty\\ApiCounterparty\\ControllerCounterparty\\CounterpartyController::editCounterparty'], null, null, null, false, false, null]],
        '/deleteCounterparty' => [[['_route' => 'delete_counterparty', '_controller' => 'App\\Counterparty\\InfrastructureCounterparty\\ApiCounterparty\\ControllerCounterparty\\CounterpartyController::deleteCounterparty'], null, null, null, false, false, null]],
        '/savePartNumbers' => [[['_route' => 'save_part_numbers', '_controller' => 'App\\PartNumbers\\InfrastructurePartNumbers\\ApiPartNumbers\\ControllerPartNumbers\\PartNumbersController::savePartNumbers'], null, null, null, false, false, null]],
        '/searchPartNumbers' => [[['_route' => 'search_part_numbers', '_controller' => 'App\\PartNumbers\\InfrastructurePartNumbers\\ApiPartNumbers\\ControllerPartNumbers\\PartNumbersController::searchPartNumbers'], null, null, null, false, false, null]],
        '/editPartNumbers' => [[['_route' => 'edit_part_numbers', '_controller' => 'App\\PartNumbers\\InfrastructurePartNumbers\\ApiPartNumbers\\ControllerPartNumbers\\PartNumbersController::editPartNumbers'], null, null, null, false, false, null]],
        '/deletePartNumbers' => [[['_route' => 'delete_part_numbers', '_controller' => 'App\\PartNumbers\\InfrastructurePartNumbers\\ApiPartNumbers\\ControllerPartNumbers\\PartNumbersController::deletePartNumbers'], null, null, null, false, false, null]],
        '/cartAutoPartsWarehouseSold' => [[['_route' => 'cart_auto_parts_warehouse_sold', '_controller' => 'App\\Sales\\InfrastructureSales\\ApiSales\\ControllerSales\\SalesController::cartAutoPartsWarehouseSold'], null, null, null, false, false, null]],
        '/cartWarehouse' => [[['_route' => 'cart_warehouse', '_controller' => 'App\\Sales\\InfrastructureSales\\ApiSales\\ControllerSales\\SalesController::cartWarehouse'], null, null, null, false, false, null]],
        '/editСartAutoPartsWarehouseSold' => [[['_route' => 'edit_cart_auto_parts_warehouse_sold', '_controller' => 'App\\Sales\\InfrastructureSales\\ApiSales\\ControllerSales\\SalesController::editСartAutoPartsWarehouseSold'], null, null, null, false, false, null]],
        '/deleteСartAutoPartsWarehouseSold' => [[['_route' => 'delete_cart_auto_parts_warehouse_sold', '_controller' => 'App\\Sales\\InfrastructureSales\\ApiSales\\ControllerSales\\SalesController::deleteСartAutoPartsWarehouseSold'], null, null, null, false, false, null]],
        '/completionSale' => [[['_route' => 'completion_sale', '_controller' => 'App\\Sales\\InfrastructureSales\\ApiSales\\ControllerSales\\SalesController::completionSale'], null, null, null, false, false, null]],
        '/searchSales' => [[['_route' => 'search_sales', '_controller' => 'App\\Sales\\InfrastructureSales\\ApiSales\\ControllerSales\\SalesController::searchSales'], null, null, null, false, false, null]],
        '/editSalesAutoParts' => [[['_route' => 'edit_sales_auto_parts', '_controller' => 'App\\Sales\\InfrastructureSales\\ApiSales\\ControllerSales\\SalesController::editSalesAutoParts'], null, null, null, false, false, null]],
        '/deleteSalesAutoParts' => [[['_route' => 'delete_sales_auto_parts', '_controller' => 'App\\Sales\\InfrastructureSales\\ApiSales\\ControllerSales\\SalesController::deleteSalesAutoParts'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
