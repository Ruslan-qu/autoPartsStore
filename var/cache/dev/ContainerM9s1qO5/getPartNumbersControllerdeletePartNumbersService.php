<?php

namespace ContainerM9s1qO5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPartNumbersControllerdeletePartNumbersService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Sk8eWgb.App\PartNumbers\InfrastructurePartNumbers\ApiPartNumbers\ControllerPartNumbers\PartNumbersController::deletePartNumbers()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Sk8eWgb.App\\PartNumbers\\InfrastructurePartNumbers\\ApiPartNumbers\\ControllerPartNumbers\\PartNumbersController::deletePartNumbers()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'findIdPartNumbersQueryHandler' => ['privates', 'App\\PartNumbers\\ApplicationPartNumbers\\QueryPartNumbers\\EditPartNumbersQuery\\FindIdPartNumbersQueryHandler', 'getFindIdPartNumbersQueryHandlerService', true],
            'adapterPartNumbersInterface' => ['privates', 'App\\AutoPartsWarehouse\\InfrastructureAutoPartsWarehouse\\ApiAutoPartsWarehouse\\Adapters\\AdapterPartNumbers\\AdapterPartNumbers', 'getAdapterPartNumbersService', true],
            'deletePartNumbersCommandHandler' => ['privates', 'App\\PartNumbers\\ApplicationPartNumbers\\CommandsPartNumbers\\DeletePartNumbersCommand\\DeletePartNumbersCommandHandler', 'getDeletePartNumbersCommandHandlerService', true],
            'errorMessageViaSession' => ['services', 'App\\PartNumbers\\InfrastructurePartNumbers\\ErrorMessageViaSession\\ErrorMessageViaSession', 'getErrorMessageViaSessionService', true],
        ], [
            'findIdPartNumbersQueryHandler' => 'App\\PartNumbers\\ApplicationPartNumbers\\QueryPartNumbers\\EditPartNumbersQuery\\FindIdPartNumbersQueryHandler',
            'adapterPartNumbersInterface' => '?',
            'deletePartNumbersCommandHandler' => 'App\\PartNumbers\\ApplicationPartNumbers\\CommandsPartNumbers\\DeletePartNumbersCommand\\DeletePartNumbersCommandHandler',
            'errorMessageViaSession' => 'App\\PartNumbers\\InfrastructurePartNumbers\\ErrorMessageViaSession\\ErrorMessageViaSession',
        ]))->withContext('App\\PartNumbers\\InfrastructurePartNumbers\\ApiPartNumbers\\ControllerPartNumbers\\PartNumbersController::deletePartNumbers()', $container);
    }
}
