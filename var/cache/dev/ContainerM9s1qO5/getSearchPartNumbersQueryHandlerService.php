<?php

namespace ContainerM9s1qO5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSearchPartNumbersQueryHandlerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\PartNumbers\ApplicationPartNumbers\QueryPartNumbers\SearchPartNumbersQuery\SearchPartNumbersQueryHandler' shared autowired service.
     *
     * @return \App\PartNumbers\ApplicationPartNumbers\QueryPartNumbers\SearchPartNumbersQuery\SearchPartNumbersQueryHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/PartNumbers/ApplicationPartNumbers/QueryPartNumbers/SearchPartNumbersQuery/SearchPartNumbersQueryHandler.php';
        include_once \dirname(__DIR__, 4).'/src/PartNumbers/ApplicationPartNumbers/ErrorsPartNumbers/InputErrorsPartNumbers.php';

        return $container->privates['App\\PartNumbers\\ApplicationPartNumbers\\QueryPartNumbers\\SearchPartNumbersQuery\\SearchPartNumbersQueryHandler'] = new \App\PartNumbers\ApplicationPartNumbers\QueryPartNumbers\SearchPartNumbersQuery\SearchPartNumbersQueryHandler(($container->privates['App\\PartNumbers\\ApplicationPartNumbers\\ErrorsPartNumbers\\InputErrorsPartNumbers'] ??= new \App\PartNumbers\ApplicationPartNumbers\ErrorsPartNumbers\InputErrorsPartNumbers()), ($container->privates['App\\PartNumbers\\InfrastructurePartNumbers\\RepositoryPartNumbers\\PartNumbersFromManufacturersRepository'] ?? $container->load('getPartNumbersFromManufacturersRepositoryService')));
    }
}
