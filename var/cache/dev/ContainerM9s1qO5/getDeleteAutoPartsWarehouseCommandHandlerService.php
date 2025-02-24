<?php

namespace ContainerM9s1qO5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDeleteAutoPartsWarehouseCommandHandlerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\AutoPartsWarehouse\ApplicationAutoPartsWarehouse\CommandsAutoPartsWarehouse\DeleteAutoPartsWarehouseCommand\DeleteAutoPartsWarehouseCommandHandler' shared autowired service.
     *
     * @return \App\AutoPartsWarehouse\ApplicationAutoPartsWarehouse\CommandsAutoPartsWarehouse\DeleteAutoPartsWarehouseCommand\DeleteAutoPartsWarehouseCommandHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/AutoPartsWarehouse/ApplicationAutoPartsWarehouse/CommandsAutoPartsWarehouse/DeleteAutoPartsWarehouseCommand/DeleteAutoPartsWarehouseCommandHandler.php';
        include_once \dirname(__DIR__, 4).'/src/AutoPartsWarehouse/ApplicationAutoPartsWarehouse/ErrorsAutoPartsWarehouse/InputErrorsAutoPartsWarehouse.php';

        return $container->privates['App\\AutoPartsWarehouse\\ApplicationAutoPartsWarehouse\\CommandsAutoPartsWarehouse\\DeleteAutoPartsWarehouseCommand\\DeleteAutoPartsWarehouseCommandHandler'] = new \App\AutoPartsWarehouse\ApplicationAutoPartsWarehouse\CommandsAutoPartsWarehouse\DeleteAutoPartsWarehouseCommand\DeleteAutoPartsWarehouseCommandHandler(($container->privates['App\\AutoPartsWarehouse\\ApplicationAutoPartsWarehouse\\ErrorsAutoPartsWarehouse\\InputErrorsAutoPartsWarehouse'] ??= new \App\AutoPartsWarehouse\ApplicationAutoPartsWarehouse\ErrorsAutoPartsWarehouse\InputErrorsAutoPartsWarehouse()), ($container->privates['App\\AutoPartsWarehouse\\InfrastructureAutoPartsWarehouse\\RepositoryAutoPartsWarehouse\\AutoPartsWarehouseRepository'] ?? $container->load('getAutoPartsWarehouseRepositoryService')));
    }
}
