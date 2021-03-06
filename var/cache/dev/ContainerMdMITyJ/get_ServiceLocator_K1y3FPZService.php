<?php

namespace ContainerMdMITyJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_K1y3FPZService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.K1y3FPZ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.K1y3FPZ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\CategoryController::delete' => ['privates', '.service_locator.478xwl1', 'get_ServiceLocator_478xwl1Service', true],
            'App\\Controller\\CategoryController::edit' => ['privates', '.service_locator.478xwl1', 'get_ServiceLocator_478xwl1Service', true],
            'App\\Controller\\CategoryController::index' => ['privates', '.service_locator.uCSWYWR', 'get_ServiceLocator_UCSWYWRService', true],
            'App\\Controller\\CategoryController::show' => ['privates', '.service_locator.478xwl1', 'get_ServiceLocator_478xwl1Service', true],
            'App\\Controller\\DeveloperController::delete' => ['privates', '.service_locator.ys.wb.a', 'get_ServiceLocator_Ys_Wb_AService', true],
            'App\\Controller\\DeveloperController::edit' => ['privates', '.service_locator.ys.wb.a', 'get_ServiceLocator_Ys_Wb_AService', true],
            'App\\Controller\\DeveloperController::index' => ['privates', '.service_locator.fTBXF3w', 'get_ServiceLocator_FTBXF3wService', true],
            'App\\Controller\\DeveloperController::show' => ['privates', '.service_locator.ys.wb.a', 'get_ServiceLocator_Ys_Wb_AService', true],
            'App\\Controller\\EditorController::delete' => ['privates', '.service_locator.OZpD0b8', 'get_ServiceLocator_OZpD0b8Service', true],
            'App\\Controller\\EditorController::edit' => ['privates', '.service_locator.OZpD0b8', 'get_ServiceLocator_OZpD0b8Service', true],
            'App\\Controller\\EditorController::index' => ['privates', '.service_locator.pJncMuE', 'get_ServiceLocator_PJncMuEService', true],
            'App\\Controller\\EditorController::show' => ['privates', '.service_locator.OZpD0b8', 'get_ServiceLocator_OZpD0b8Service', true],
            'App\\Controller\\GameController::delete' => ['privates', '.service_locator.gBwNVTZ', 'get_ServiceLocator_GBwNVTZService', true],
            'App\\Controller\\GameController::edit' => ['privates', '.service_locator.gBwNVTZ', 'get_ServiceLocator_GBwNVTZService', true],
            'App\\Controller\\GameController::index' => ['privates', '.service_locator.hA3ZfRw', 'get_ServiceLocator_HA3ZfRwService', true],
            'App\\Controller\\GameController::show' => ['privates', '.service_locator.gBwNVTZ', 'get_ServiceLocator_GBwNVTZService', true],
            'App\\Controller\\LoginFormController::login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\CategoryController:delete' => ['privates', '.service_locator.478xwl1', 'get_ServiceLocator_478xwl1Service', true],
            'App\\Controller\\CategoryController:edit' => ['privates', '.service_locator.478xwl1', 'get_ServiceLocator_478xwl1Service', true],
            'App\\Controller\\CategoryController:index' => ['privates', '.service_locator.uCSWYWR', 'get_ServiceLocator_UCSWYWRService', true],
            'App\\Controller\\CategoryController:show' => ['privates', '.service_locator.478xwl1', 'get_ServiceLocator_478xwl1Service', true],
            'App\\Controller\\DeveloperController:delete' => ['privates', '.service_locator.ys.wb.a', 'get_ServiceLocator_Ys_Wb_AService', true],
            'App\\Controller\\DeveloperController:edit' => ['privates', '.service_locator.ys.wb.a', 'get_ServiceLocator_Ys_Wb_AService', true],
            'App\\Controller\\DeveloperController:index' => ['privates', '.service_locator.fTBXF3w', 'get_ServiceLocator_FTBXF3wService', true],
            'App\\Controller\\DeveloperController:show' => ['privates', '.service_locator.ys.wb.a', 'get_ServiceLocator_Ys_Wb_AService', true],
            'App\\Controller\\EditorController:delete' => ['privates', '.service_locator.OZpD0b8', 'get_ServiceLocator_OZpD0b8Service', true],
            'App\\Controller\\EditorController:edit' => ['privates', '.service_locator.OZpD0b8', 'get_ServiceLocator_OZpD0b8Service', true],
            'App\\Controller\\EditorController:index' => ['privates', '.service_locator.pJncMuE', 'get_ServiceLocator_PJncMuEService', true],
            'App\\Controller\\EditorController:show' => ['privates', '.service_locator.OZpD0b8', 'get_ServiceLocator_OZpD0b8Service', true],
            'App\\Controller\\GameController:delete' => ['privates', '.service_locator.gBwNVTZ', 'get_ServiceLocator_GBwNVTZService', true],
            'App\\Controller\\GameController:edit' => ['privates', '.service_locator.gBwNVTZ', 'get_ServiceLocator_GBwNVTZService', true],
            'App\\Controller\\GameController:index' => ['privates', '.service_locator.hA3ZfRw', 'get_ServiceLocator_HA3ZfRwService', true],
            'App\\Controller\\GameController:show' => ['privates', '.service_locator.gBwNVTZ', 'get_ServiceLocator_GBwNVTZService', true],
            'App\\Controller\\LoginFormController:login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\CategoryController::delete' => '?',
            'App\\Controller\\CategoryController::edit' => '?',
            'App\\Controller\\CategoryController::index' => '?',
            'App\\Controller\\CategoryController::show' => '?',
            'App\\Controller\\DeveloperController::delete' => '?',
            'App\\Controller\\DeveloperController::edit' => '?',
            'App\\Controller\\DeveloperController::index' => '?',
            'App\\Controller\\DeveloperController::show' => '?',
            'App\\Controller\\EditorController::delete' => '?',
            'App\\Controller\\EditorController::edit' => '?',
            'App\\Controller\\EditorController::index' => '?',
            'App\\Controller\\EditorController::show' => '?',
            'App\\Controller\\GameController::delete' => '?',
            'App\\Controller\\GameController::edit' => '?',
            'App\\Controller\\GameController::index' => '?',
            'App\\Controller\\GameController::show' => '?',
            'App\\Controller\\LoginFormController::login' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\CategoryController:delete' => '?',
            'App\\Controller\\CategoryController:edit' => '?',
            'App\\Controller\\CategoryController:index' => '?',
            'App\\Controller\\CategoryController:show' => '?',
            'App\\Controller\\DeveloperController:delete' => '?',
            'App\\Controller\\DeveloperController:edit' => '?',
            'App\\Controller\\DeveloperController:index' => '?',
            'App\\Controller\\DeveloperController:show' => '?',
            'App\\Controller\\EditorController:delete' => '?',
            'App\\Controller\\EditorController:edit' => '?',
            'App\\Controller\\EditorController:index' => '?',
            'App\\Controller\\EditorController:show' => '?',
            'App\\Controller\\GameController:delete' => '?',
            'App\\Controller\\GameController:edit' => '?',
            'App\\Controller\\GameController:index' => '?',
            'App\\Controller\\GameController:show' => '?',
            'App\\Controller\\LoginFormController:login' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
