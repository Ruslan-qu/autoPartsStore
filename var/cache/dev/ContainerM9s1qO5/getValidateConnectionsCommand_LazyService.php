<?php

namespace ContainerM9s1qO5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getValidateConnectionsCommand_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.SecIT\ImapBundle\Command\ValidateConnectionsCommand.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.SecIT\\ImapBundle\\Command\\ValidateConnectionsCommand.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('secit:imap:validate-connections', [], 'Validate if all Mailboxes can connect correct. If not, return 1.', false, #[\Closure(name: 'SecIT\\ImapBundle\\Command\\ValidateConnectionsCommand')] fn (): \SecIT\ImapBundle\Command\ValidateConnectionsCommand => ($container->privates['SecIT\\ImapBundle\\Command\\ValidateConnectionsCommand'] ?? $container->load('getValidateConnectionsCommandService')));
    }
}
