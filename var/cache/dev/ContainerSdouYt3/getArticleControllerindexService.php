<?php

namespace ContainerSdouYt3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getArticleControllerindexService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.t5BKQwu.App\Controller\Admin\ArticleController::index()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['.service_locator.t5BKQwu'] ?? $container->load('get_ServiceLocator_T5BKQwuService'));

        if (isset($container->privates['.service_locator.t5BKQwu.App\\Controller\\Admin\\ArticleController::index()'])) {
            return $container->privates['.service_locator.t5BKQwu.App\\Controller\\Admin\\ArticleController::index()'];
        }

        return $container->privates['.service_locator.t5BKQwu.App\\Controller\\Admin\\ArticleController::index()'] = $a->withContext('App\\Controller\\Admin\\ArticleController::index()', $container);
    }
}
