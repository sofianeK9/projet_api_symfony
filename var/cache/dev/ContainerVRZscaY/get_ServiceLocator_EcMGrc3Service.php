<?php

namespace ContainerVRZscaY;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_EcMGrc3Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ecMGrc3' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ecMGrc3'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.4wc4Ag1.kernel::registerContainerConfiguration()', 'get_ServiceLocator_4wc4Ag1_KernelregisterContainerConfigurationService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.4wc4Ag1.kernel::registerContainerConfiguration()', 'get_ServiceLocator_4wc4Ag1_KernelregisterContainerConfigurationService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.4wc4Ag1.kernel::loadRoutes()', 'get_ServiceLocator_4wc4Ag1_KernelloadRoutesService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.4wc4Ag1.kernel::loadRoutes()', 'get_ServiceLocator_4wc4Ag1_KernelloadRoutesService', true],
            'App\\Controller\\Admin\\ArticleController::index' => ['privates', '.service_locator.IqSceiR.App\\Controller\\Admin\\ArticleController::index()', 'getArticleControllerindexService', true],
            'App\\Controller\\Admin\\ArticleController::new' => ['privates', '.service_locator.P.blNFL.App\\Controller\\Admin\\ArticleController::new()', 'getArticleControllernewService', true],
            'App\\Controller\\Admin\\ArticleController::show' => ['privates', '.service_locator.mBZG5U8.App\\Controller\\Admin\\ArticleController::show()', 'getArticleControllershow2Service', true],
            'App\\Controller\\Admin\\ArticleController::edit' => ['privates', '.service_locator.AazXZCq.App\\Controller\\Admin\\ArticleController::edit()', 'getArticleControllereditService', true],
            'App\\Controller\\Admin\\ArticleController::delete' => ['privates', '.service_locator.AazXZCq.App\\Controller\\Admin\\ArticleController::delete()', 'getArticleControllerdeleteService', true],
            'App\\Controller\\ApiController::index' => ['privates', '.service_locator.IqSceiR.App\\Controller\\ApiController::index()', 'getApiControllerindexService', true],
            'App\\Controller\\ArticleController::show' => ['privates', '.service_locator.SGVkOsB.App\\Controller\\ArticleController::show()', 'getArticleControllershowService', true],
            'App\\Controller\\ContactController::index' => ['privates', '.service_locator.3eP0DaX.App\\Controller\\ContactController::index()', 'getContactControllerindexService', true],
            'App\\Controller\\HomeController::index' => ['privates', '.service_locator.t5BKQwu.App\\Controller\\HomeController::index()', 'getHomeControllerindexService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.QVAk1vM.App\\Controller\\RegistrationController::register()', 'getRegistrationControllerregisterService', true],
            'App\\Controller\\RegistrationController::verifyUserEmail' => ['privates', '.service_locator.fdTWzgN.App\\Controller\\RegistrationController::verifyUserEmail()', 'getRegistrationControllerverifyUserEmailService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.mXDaS5b.App\\Controller\\SecurityController::login()', 'getSecurityControllerloginService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.4wc4Ag1.kernel::registerContainerConfiguration()', 'get_ServiceLocator_4wc4Ag1_KernelregisterContainerConfigurationService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.4wc4Ag1.kernel::loadRoutes()', 'get_ServiceLocator_4wc4Ag1_KernelloadRoutesService', true],
            'App\\Controller\\Admin\\ArticleController:index' => ['privates', '.service_locator.IqSceiR.App\\Controller\\Admin\\ArticleController::index()', 'getArticleControllerindexService', true],
            'App\\Controller\\Admin\\ArticleController:new' => ['privates', '.service_locator.P.blNFL.App\\Controller\\Admin\\ArticleController::new()', 'getArticleControllernewService', true],
            'App\\Controller\\Admin\\ArticleController:show' => ['privates', '.service_locator.mBZG5U8.App\\Controller\\Admin\\ArticleController::show()', 'getArticleControllershow2Service', true],
            'App\\Controller\\Admin\\ArticleController:edit' => ['privates', '.service_locator.AazXZCq.App\\Controller\\Admin\\ArticleController::edit()', 'getArticleControllereditService', true],
            'App\\Controller\\Admin\\ArticleController:delete' => ['privates', '.service_locator.AazXZCq.App\\Controller\\Admin\\ArticleController::delete()', 'getArticleControllerdeleteService', true],
            'App\\Controller\\ApiController:index' => ['privates', '.service_locator.IqSceiR.App\\Controller\\ApiController::index()', 'getApiControllerindexService', true],
            'App\\Controller\\ArticleController:show' => ['privates', '.service_locator.SGVkOsB.App\\Controller\\ArticleController::show()', 'getArticleControllershowService', true],
            'App\\Controller\\ContactController:index' => ['privates', '.service_locator.3eP0DaX.App\\Controller\\ContactController::index()', 'getContactControllerindexService', true],
            'App\\Controller\\HomeController:index' => ['privates', '.service_locator.t5BKQwu.App\\Controller\\HomeController::index()', 'getHomeControllerindexService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.QVAk1vM.App\\Controller\\RegistrationController::register()', 'getRegistrationControllerregisterService', true],
            'App\\Controller\\RegistrationController:verifyUserEmail' => ['privates', '.service_locator.fdTWzgN.App\\Controller\\RegistrationController::verifyUserEmail()', 'getRegistrationControllerverifyUserEmailService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.mXDaS5b.App\\Controller\\SecurityController::login()', 'getSecurityControllerloginService', true],
        ], [
            'kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Controller\\Admin\\ArticleController::index' => '?',
            'App\\Controller\\Admin\\ArticleController::new' => '?',
            'App\\Controller\\Admin\\ArticleController::show' => '?',
            'App\\Controller\\Admin\\ArticleController::edit' => '?',
            'App\\Controller\\Admin\\ArticleController::delete' => '?',
            'App\\Controller\\ApiController::index' => '?',
            'App\\Controller\\ArticleController::show' => '?',
            'App\\Controller\\ContactController::index' => '?',
            'App\\Controller\\HomeController::index' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\RegistrationController::verifyUserEmail' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:loadRoutes' => '?',
            'App\\Controller\\Admin\\ArticleController:index' => '?',
            'App\\Controller\\Admin\\ArticleController:new' => '?',
            'App\\Controller\\Admin\\ArticleController:show' => '?',
            'App\\Controller\\Admin\\ArticleController:edit' => '?',
            'App\\Controller\\Admin\\ArticleController:delete' => '?',
            'App\\Controller\\ApiController:index' => '?',
            'App\\Controller\\ArticleController:show' => '?',
            'App\\Controller\\ContactController:index' => '?',
            'App\\Controller\\HomeController:index' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\RegistrationController:verifyUserEmail' => '?',
            'App\\Controller\\SecurityController:login' => '?',
        ]);
    }
}