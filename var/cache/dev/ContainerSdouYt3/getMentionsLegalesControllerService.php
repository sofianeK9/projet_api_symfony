<?php

namespace ContainerSdouYt3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMentionsLegalesControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\MentionsLegalesController' shared autowired service.
     *
     * @return \App\Controller\MentionsLegalesController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/MentionsLegalesController.php';

        $container->services['App\\Controller\\MentionsLegalesController'] = $instance = new \App\Controller\MentionsLegalesController();

        $instance->setContainer(($container->privates['.service_locator.QaaoWjx'] ?? $container->load('get_ServiceLocator_QaaoWjxService'))->withContext('App\\Controller\\MentionsLegalesController', $container));

        return $instance;
    }
}