<?php

namespace ContainerMdMITyJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Ys_Wb_AService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ys.wb.a' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ys.wb.a'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'developer' => ['privates', '.errored..service_locator.ys.wb.a.App\\Entity\\Developer', NULL, 'Cannot autowire service ".service_locator.ys.wb.a": it references class "App\\Entity\\Developer" but no such service exists.'],
        ], [
            'developer' => 'App\\Entity\\Developer',
        ]);
    }
}