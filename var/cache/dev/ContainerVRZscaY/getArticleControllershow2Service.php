<?php

namespace ContainerVRZscaY;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getArticleControllershow2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.mBZG5U8.App\Controller\Admin\ArticleController::show()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.mBZG5U8.App\\Controller\\Admin\\ArticleController::show()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'article' => ['privates', '.errored..service_locator.mBZG5U8.App\\Entity\\Article', NULL, 'Cannot autowire service ".service_locator.mBZG5U8": it needs an instance of "App\\Entity\\Article" but this type has been excluded in "config/services.yaml".'],
        ], [
            'article' => 'App\\Entity\\Article',
        ]))->withContext('App\\Controller\\Admin\\ArticleController::show()', $container);
    }
}
