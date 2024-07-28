<?php

namespace ContainerSdouYt3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiControllerindexService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.IqSceiR.App\Controller\ApiController::index()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.IqSceiR.App\\Controller\\ApiController::index()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'articleRepository' => ['privates', 'App\\Repository\\ArticleRepository', 'getArticleRepositoryService', true],
        ], [
            'articleRepository' => 'App\\Repository\\ArticleRepository',
        ]))->withContext('App\\Controller\\ApiController::index()', $container);
    }
}