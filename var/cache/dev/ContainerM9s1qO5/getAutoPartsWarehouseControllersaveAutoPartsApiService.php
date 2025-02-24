<?php

namespace ContainerM9s1qO5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAutoPartsWarehouseControllersaveAutoPartsApiService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.RK42F...App\AutoPartsWarehouse\InfrastructureAutoPartsWarehouse\ApiAutoPartsWarehouse\ControllerAutoPartsWarehouse\AutoPartsWarehouseController::saveAutoPartsApi()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.RK42F...App\\AutoPartsWarehouse\\InfrastructureAutoPartsWarehouse\\ApiAutoPartsWarehouse\\ControllerAutoPartsWarehouse\\AutoPartsWarehouseController::saveAutoPartsApi()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'client' => ['privates', '.debug.http_client', 'get_Debug_HttpClientService', false],
            'factoryReadingApi' => ['privates', 'App\\AutoPartsWarehouse\\DomainAutoPartsWarehouse\\Factory\\FactoryReadingApi', 'getFactoryReadingApiService', true],
            'saveAutoPartsWarehouseFileCommandHandler' => ['privates', 'App\\AutoPartsWarehouse\\ApplicationAutoPartsWarehouse\\CommandsAutoPartsWarehouse\\SaveAutoPartsWarehouseCommand\\SaveAutoPartsWarehouseFileCommandHandler', 'getSaveAutoPartsWarehouseFileCommandHandlerService', true],
            'adapterAutoPartsWarehousePartNumbersInterface' => ['privates', 'App\\PartNumbers\\InfrastructurePartNumbers\\ApiPartNumbers\\AdapterAutoPartsWarehouse\\AdapterAutoPartsWarehousePartNumbers', 'getAdapterAutoPartsWarehousePartNumbersService', true],
            'adapterAutoPartsWarehouseCounterpartyInterface' => ['privates', 'App\\Counterparty\\InfrastructureCounterparty\\ApiCounterparty\\AdapterAutoPartsWarehouse\\AdapterAutoPartsWarehouseCounterparty', 'getAdapterAutoPartsWarehouseCounterpartyService', true],
            'findOneByPaymentMethodQueryHandler' => ['privates', 'App\\AutoPartsWarehouse\\ApplicationAutoPartsWarehouse\\QueryAutoPartsWarehouse\\SearchAutoPartsWarehouseQuery\\FindOneByPaymentMethodQueryHandler', 'getFindOneByPaymentMethodQueryHandlerService', true],
        ], [
            'client' => '?',
            'factoryReadingApi' => 'App\\AutoPartsWarehouse\\DomainAutoPartsWarehouse\\Factory\\FactoryReadingApi',
            'saveAutoPartsWarehouseFileCommandHandler' => 'App\\AutoPartsWarehouse\\ApplicationAutoPartsWarehouse\\CommandsAutoPartsWarehouse\\SaveAutoPartsWarehouseCommand\\SaveAutoPartsWarehouseFileCommandHandler',
            'adapterAutoPartsWarehousePartNumbersInterface' => '?',
            'adapterAutoPartsWarehouseCounterpartyInterface' => '?',
            'findOneByPaymentMethodQueryHandler' => 'App\\AutoPartsWarehouse\\ApplicationAutoPartsWarehouse\\QueryAutoPartsWarehouse\\SearchAutoPartsWarehouseQuery\\FindOneByPaymentMethodQueryHandler',
        ]))->withContext('App\\AutoPartsWarehouse\\InfrastructureAutoPartsWarehouse\\ApiAutoPartsWarehouse\\ControllerAutoPartsWarehouse\\AutoPartsWarehouseController::saveAutoPartsApi()', $container);
    }
}
