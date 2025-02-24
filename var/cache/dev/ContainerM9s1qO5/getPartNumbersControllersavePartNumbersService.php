<?php

namespace ContainerM9s1qO5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPartNumbersControllersavePartNumbersService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.h0W_gyB.App\PartNumbers\InfrastructurePartNumbers\ApiPartNumbers\ControllerPartNumbers\PartNumbersController::savePartNumbers()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.h0W_gyB.App\\PartNumbers\\InfrastructurePartNumbers\\ApiPartNumbers\\ControllerPartNumbers\\PartNumbersController::savePartNumbers()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'savePartNumbersCommandHandler' => ['privates', 'App\\PartNumbers\\ApplicationPartNumbers\\CommandsPartNumbers\\SavePartNumbersCommand\\SavePartNumbersCommandHandler', 'getSavePartNumbersCommandHandlerService', true],
            'saveOriginalRoomsCommandHandler' => ['privates', 'App\\PartNumbers\\ApplicationPartNumbers\\CommandsPartNumbers\\SavePartNumbersCommand\\SaveOriginalRoomsCommandHandler', 'getSaveOriginalRoomsCommandHandlerService', true],
            'findOneByOriginalRoomsQueryHandler' => ['privates', 'App\\PartNumbers\\ApplicationPartNumbers\\QueryPartNumbers\\SearchPartNumbersQuery\\FindOneByOriginalRoomsQueryHandler', 'getFindOneByOriginalRoomsQueryHandlerService', true],
            'errorMessageViaSession' => ['services', 'App\\PartNumbers\\InfrastructurePartNumbers\\ErrorMessageViaSession\\ErrorMessageViaSession', 'getErrorMessageViaSessionService', true],
        ], [
            'savePartNumbersCommandHandler' => 'App\\PartNumbers\\ApplicationPartNumbers\\CommandsPartNumbers\\SavePartNumbersCommand\\SavePartNumbersCommandHandler',
            'saveOriginalRoomsCommandHandler' => 'App\\PartNumbers\\ApplicationPartNumbers\\CommandsPartNumbers\\SavePartNumbersCommand\\SaveOriginalRoomsCommandHandler',
            'findOneByOriginalRoomsQueryHandler' => 'App\\PartNumbers\\ApplicationPartNumbers\\QueryPartNumbers\\SearchPartNumbersQuery\\FindOneByOriginalRoomsQueryHandler',
            'errorMessageViaSession' => 'App\\PartNumbers\\InfrastructurePartNumbers\\ErrorMessageViaSession\\ErrorMessageViaSession',
        ]))->withContext('App\\PartNumbers\\InfrastructurePartNumbers\\ApiPartNumbers\\ControllerPartNumbers\\PartNumbersController::savePartNumbers()', $container);
    }
}
