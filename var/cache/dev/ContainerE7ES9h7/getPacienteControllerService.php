<?php

namespace ContainerE7ES9h7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPacienteControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\PacienteController' shared autowired service.
     *
     * @return \App\Controller\PacienteController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/PacienteController.php';

        $container->services['App\\Controller\\PacienteController'] = $instance = new \App\Controller\PacienteController();

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\PacienteController', $container));

        return $instance;
    }
}
