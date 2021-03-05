<?php

namespace ContainerE7ES9h7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_AccessListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.access_listener' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\AccessListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AbstractListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AccessListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/AccessMapInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/AccessMap.php';

        return $container->privates['security.access_listener'] = new \Symfony\Component\Security\Http\Firewall\AccessListener(($container->services['security.token_storage'] ?? $container->getSecurity_TokenStorageService()), ($container->privates['debug.security.access.decision_manager'] ?? $container->getDebug_Security_Access_DecisionManagerService()), ($container->privates['security.access_map'] ?? ($container->privates['security.access_map'] = new \Symfony\Component\Security\Http\AccessMap())), ($container->privates['security.authentication.manager'] ?? $container->getSecurity_Authentication_ManagerService()));
    }
}
