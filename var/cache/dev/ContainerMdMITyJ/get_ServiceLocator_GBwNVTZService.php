<?php

namespace ContainerMdMITyJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GBwNVTZService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.gBwNVTZ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.gBwNVTZ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'game' => ['privates', '.errored..service_locator.gBwNVTZ.App\\Entity\\Game', NULL, 'Cannot autowire service ".service_locator.gBwNVTZ": it references class "App\\Entity\\Game" but no such service exists.'],
        ], [
            'game' => 'App\\Entity\\Game',
        ]);
    }
}
