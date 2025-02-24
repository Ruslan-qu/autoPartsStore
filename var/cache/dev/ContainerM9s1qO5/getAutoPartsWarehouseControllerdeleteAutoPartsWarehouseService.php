<?php

namespace ContainerM9s1qO5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAutoPartsWarehouseControllerdeleteAutoPartsWarehouseService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.4iau3mw.App\AutoPartsWarehouse\InfrastructureAutoPartsWarehouse\ApiAutoPartsWarehouse\ControllerAutoPartsWarehouse\AutoPartsWarehouseController::deleteAutoPartsWarehouse()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.4iau3mw.App\\AutoPartsWarehouse\\InfrastructureAutoPartsWarehouse\\ApiAutoPartsWarehouse\\ControllerAutoPartsWarehouse\\AutoPartsWarehouseController::deleteAutoPartsWarehouse()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'findIdAutoPartsWarehouseQueryHandler' => ['privates', 'App\\AutoPartsWarehouse\\ApplicationAutoPartsWarehouse\\QueryAutoPartsWarehouse\\SearchAutoPartsWarehouseQuery\\FindIdAutoPartsWarehouseQueryHandler', 'getFindIdAutoPartsWarehouseQueryHandlerService', true],
            'adapterAutoPartsWarehouseSalesInterface' => ['privates', 'App\\Sales\\InfrastructureSales\\ApiSales\\AdapterAutoPartsWarehouse\\AdapterAutoPartsWarehouseSales', 'getAdapterAutoPartsWarehouseSalesService', true],
            'deleteAutoPartsWarehouseCommandHandler' => ['privates', 'App\\AutoPartsWarehouse\\ApplicationAutoPartsWarehouse\\CommandsAutoPartsWarehouse\\DeleteAutoPartsWarehouseCommand\\DeleteAutoPartsWarehouseCommandHandler', 'getDeleteAutoPartsWarehouseCommandHandlerService', true],
        ], [
            'findIdAutoPartsWarehouseQueryHandler' => 'App\\AutoPartsWarehouse\\ApplicationAutoPartsWarehouse\\QueryAutoPartsWarehouse\\SearchAutoPartsWarehouseQuery\\FindIdAutoPartsWarehouseQueryHandler',
            'adapterAutoPartsWarehouseSalesInterface' => '?',
            'deleteAutoPartsWarehouseCommandHandler' => 'App\\AutoPartsWarehouse\\ApplicationAutoPartsWarehouse\\CommandsAutoPartsWarehouse\\DeleteAutoPartsWarehouseCommand\\DeleteAutoPartsWarehouseCommandHandler',
        ]))->withContext('App\\AutoPartsWarehouse\\InfrastructureAutoPartsWarehouse\\ApiAutoPartsWarehouse\\ControllerAutoPartsWarehouse\\AutoPartsWarehouseController::deleteAutoPartsWarehouse()', $container);
    }
}
