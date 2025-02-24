<?php

namespace ContainerM9s1qO5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAutoPartsWarehouseControllereditAutoPartsWarehouseService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Tyz0zQH.App\AutoPartsWarehouse\InfrastructureAutoPartsWarehouse\ApiAutoPartsWarehouse\ControllerAutoPartsWarehouse\AutoPartsWarehouseController::editAutoPartsWarehouse()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Tyz0zQH.App\\AutoPartsWarehouse\\InfrastructureAutoPartsWarehouse\\ApiAutoPartsWarehouse\\ControllerAutoPartsWarehouse\\AutoPartsWarehouseController::editAutoPartsWarehouse()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'findIdAutoPartsWarehouseQueryHandler' => ['privates', 'App\\AutoPartsWarehouse\\ApplicationAutoPartsWarehouse\\QueryAutoPartsWarehouse\\SearchAutoPartsWarehouseQuery\\FindIdAutoPartsWarehouseQueryHandler', 'getFindIdAutoPartsWarehouseQueryHandlerService', true],
            'adapterAutoPartsWarehouseSalesInterface' => ['privates', 'App\\Sales\\InfrastructureSales\\ApiSales\\AdapterAutoPartsWarehouse\\AdapterAutoPartsWarehouseSales', 'getAdapterAutoPartsWarehouseSalesService', true],
            'findAutoPartsWarehouseQueryHandler' => ['privates', 'App\\AutoPartsWarehouse\\ApplicationAutoPartsWarehouse\\QueryAutoPartsWarehouse\\EditAutoPartsWarehouseQuery\\FindAutoPartsWarehouseQueryHandler', 'getFindAutoPartsWarehouseQueryHandlerService', true],
            'adapterAutoPartsWarehousePartNumbersInterface' => ['privates', 'App\\PartNumbers\\InfrastructurePartNumbers\\ApiPartNumbers\\AdapterAutoPartsWarehouse\\AdapterAutoPartsWarehousePartNumbers', 'getAdapterAutoPartsWarehousePartNumbersService', true],
            'editAutoPartsWarehouseCommandHandler' => ['privates', 'App\\AutoPartsWarehouse\\ApplicationAutoPartsWarehouse\\CommandsAutoPartsWarehouse\\EditAutoPartsWarehouseCommand\\EditAutoPartsWarehouseCommandHandler', 'getEditAutoPartsWarehouseCommandHandlerService', true],
        ], [
            'findIdAutoPartsWarehouseQueryHandler' => 'App\\AutoPartsWarehouse\\ApplicationAutoPartsWarehouse\\QueryAutoPartsWarehouse\\SearchAutoPartsWarehouseQuery\\FindIdAutoPartsWarehouseQueryHandler',
            'adapterAutoPartsWarehouseSalesInterface' => '?',
            'findAutoPartsWarehouseQueryHandler' => 'App\\AutoPartsWarehouse\\ApplicationAutoPartsWarehouse\\QueryAutoPartsWarehouse\\EditAutoPartsWarehouseQuery\\FindAutoPartsWarehouseQueryHandler',
            'adapterAutoPartsWarehousePartNumbersInterface' => '?',
            'editAutoPartsWarehouseCommandHandler' => 'App\\AutoPartsWarehouse\\ApplicationAutoPartsWarehouse\\CommandsAutoPartsWarehouse\\EditAutoPartsWarehouseCommand\\EditAutoPartsWarehouseCommandHandler',
        ]))->withContext('App\\AutoPartsWarehouse\\InfrastructureAutoPartsWarehouse\\ApiAutoPartsWarehouse\\ControllerAutoPartsWarehouse\\AutoPartsWarehouseController::editAutoPartsWarehouse()', $container);
    }
}
