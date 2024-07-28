<?php

namespace ContainerVRZscaY;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEmailServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Services\EmailService' shared autowired service.
     *
     * @return \App\Services\EmailService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Services/EmailService.php';

        $a = ($container->privates['mailer.mailer'] ?? $container->load('getMailer_MailerService'));

        if (isset($container->privates['App\\Services\\EmailService'])) {
            return $container->privates['App\\Services\\EmailService'];
        }

        return $container->privates['App\\Services\\EmailService'] = new \App\Services\EmailService($a);
    }
}
