<?php

namespace ContainerM9s1qO5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPartNumbersFromManufacturersRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\PartNumbers\InfrastructurePartNumbers\RepositoryPartNumbers\PartNumbersFromManufacturersRepository' shared autowired service.
     *
     * @return \App\PartNumbers\InfrastructurePartNumbers\RepositoryPartNumbers\PartNumbersFromManufacturersRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/src/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/src/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/src/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/src/Repository/ServiceEntityRepositoryProxy.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/src/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/PartNumbers/DomainPartNumbers/RepositoryInterfacePartNumbers/PartNumbersRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/src/PartNumbers/InfrastructurePartNumbers/RepositoryPartNumbers/PartNumbersFromManufacturersRepository.php';

        return $container->privates['App\\PartNumbers\\InfrastructurePartNumbers\\RepositoryPartNumbers\\PartNumbersFromManufacturersRepository'] = new \App\PartNumbers\InfrastructurePartNumbers\RepositoryPartNumbers\PartNumbersFromManufacturersRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}
