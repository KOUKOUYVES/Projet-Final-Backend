<?php

namespace ContainerPRxx1UU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRapportControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\RapportController' shared autowired service.
     *
     * @return \App\Controller\RapportController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/RapportController.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/AuthorizationCheckerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Security.php';

        $container->services['App\\Controller\\RapportController'] = $instance = new \App\Controller\RapportController(new \Symfony\Component\Security\Core\Security(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'security.authorization_checker' => ['services', '.container.private.security.authorization_checker', 'get_Container_Private_Security_AuthorizationCheckerService', true],
            'security.token_storage' => ['services', '.container.private.security.token_storage', 'get_Container_Private_Security_TokenStorageService', false],
        ], [
            'security.authorization_checker' => '?',
            'security.token_storage' => '?',
        ])), ($container->privates['App\\Repository\\UtilisateurRepository'] ?? $container->load('getUtilisateurRepositoryService')), ($container->privates['App\\Repository\\RapportRepository'] ?? $container->load('getRapportRepositoryService')), ($container->services['.container.private.serializer'] ?? $container->load('get_Container_Private_SerializerService')));

        $instance->setContainer(($container->privates['.service_locator.mx0UMmY'] ?? $container->load('get_ServiceLocator_Mx0UMmYService'))->withContext('App\\Controller\\RapportController', $container));

        return $instance;
    }
}
