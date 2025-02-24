<?php

namespace ContainerM9s1qO5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSaveCounterpartyCommandHandlerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Counterparty\ApplicationCounterparty\CommandsCounterparty\SaveCounterpartyCommand\SaveCounterpartyCommandHandler' shared autowired service.
     *
     * @return \App\Counterparty\ApplicationCounterparty\CommandsCounterparty\SaveCounterpartyCommand\SaveCounterpartyCommandHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Counterparty/ApplicationCounterparty/CommandsCounterparty/SaveCounterpartyCommand/SaveCounterpartyCommandHandler.php';
        include_once \dirname(__DIR__, 4).'/src/Counterparty/DomainCounterparty/DomainModelCounterparty/EntityCounterparty/Counterparty.php';
        include_once \dirname(__DIR__, 4).'/src/Counterparty/ApplicationCounterparty/Errors/InputErrors.php';

        return $container->privates['App\\Counterparty\\ApplicationCounterparty\\CommandsCounterparty\\SaveCounterpartyCommand\\SaveCounterpartyCommandHandler'] = new \App\Counterparty\ApplicationCounterparty\CommandsCounterparty\SaveCounterpartyCommand\SaveCounterpartyCommandHandler(($container->privates['App\\Counterparty\\ApplicationCounterparty\\Errors\\InputErrors'] ??= new \App\Counterparty\ApplicationCounterparty\Errors\InputErrors()), ($container->privates['App\\Counterparty\\InfrastructureCounterparty\\RepositoryCounterparty\\CounterpartyRepository'] ?? $container->load('getCounterpartyRepositoryService')), new \App\Counterparty\DomainCounterparty\DomainModelCounterparty\EntityCounterparty\Counterparty());
    }
}
