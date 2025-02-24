<?php

namespace ContainerM9s1qO5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCompletionSaleAutoPartsCommandHandlerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Sales\ApplicationSales\CommandsSales\CompletionSaleAutoPartsCommand\CompletionSaleAutoPartsCommandHandler' shared autowired service.
     *
     * @return \App\Sales\ApplicationSales\CommandsSales\CompletionSaleAutoPartsCommand\CompletionSaleAutoPartsCommandHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sales/ApplicationSales/CommandsSales/CompletionSaleAutoPartsCommand/CompletionSaleAutoPartsCommandHandler.php';

        return $container->privates['App\\Sales\\ApplicationSales\\CommandsSales\\CompletionSaleAutoPartsCommand\\CompletionSaleAutoPartsCommandHandler'] = new \App\Sales\ApplicationSales\CommandsSales\CompletionSaleAutoPartsCommand\CompletionSaleAutoPartsCommandHandler(($container->privates['App\\Sales\\InfrastructureSales\\RepositorySales\\AutoPartsSoldRepository'] ?? $container->load('getAutoPartsSoldRepositoryService')));
    }
}
