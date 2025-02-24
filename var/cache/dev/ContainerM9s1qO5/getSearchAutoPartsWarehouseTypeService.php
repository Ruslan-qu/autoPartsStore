<?php

namespace ContainerM9s1qO5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSearchAutoPartsWarehouseTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\AutoPartsWarehouse\InfrastructureAutoPartsWarehouse\ApiAutoPartsWarehouse\FormAutoPartsWarehouse\SearchAutoPartsWarehouseType' shared autowired service.
     *
     * @return \App\AutoPartsWarehouse\InfrastructureAutoPartsWarehouse\ApiAutoPartsWarehouse\FormAutoPartsWarehouse\SearchAutoPartsWarehouseType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/AutoPartsWarehouse/InfrastructureAutoPartsWarehouse/ApiAutoPartsWarehouse/FormAutoPartsWarehouse/SearchAutoPartsWarehouseType.php';

        return $container->privates['App\\AutoPartsWarehouse\\InfrastructureAutoPartsWarehouse\\ApiAutoPartsWarehouse\\FormAutoPartsWarehouse\\SearchAutoPartsWarehouseType'] = new \App\AutoPartsWarehouse\InfrastructureAutoPartsWarehouse\ApiAutoPartsWarehouse\FormAutoPartsWarehouse\SearchAutoPartsWarehouseType();
    }
}
