<?php

namespace ContainerCTB5oKW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QLZw2eNService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.qLZw2eN' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.qLZw2eN'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'paciente' => ['privates', '.errored..service_locator.qLZw2eN.App\\Entity\\Paciente', NULL, 'Cannot autowire service ".service_locator.qLZw2eN": it references class "App\\Entity\\Paciente" but no such service exists.'],
        ], [
            'paciente' => 'App\\Entity\\Paciente',
        ]);
    }
}
