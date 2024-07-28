<?php

namespace ContainerVRZscaY;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContactControllerindexService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.3eP0DaX.App\Controller\ContactController::index()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.3eP0DaX.App\\Controller\\ContactController::index()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'emailService' => ['privates', 'App\\Services\\EmailService', 'getEmailServiceService', true],
        ], [
            'emailService' => 'App\\Services\\EmailService',
        ]))->withContext('App\\Controller\\ContactController::index()', $container);
    }
}