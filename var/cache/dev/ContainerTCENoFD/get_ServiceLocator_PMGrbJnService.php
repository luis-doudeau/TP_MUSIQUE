<?php

namespace ContainerTCENoFD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PMGrbJnService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.pMGrbJn' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.pMGrbJn'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\AlbumController::delete' => ['privates', '.service_locator.O0qDrEY', 'get_ServiceLocator_O0qDrEYService', true],
            'App\\Controller\\AlbumController::edit' => ['privates', '.service_locator.O0qDrEY', 'get_ServiceLocator_O0qDrEYService', true],
            'App\\Controller\\AlbumController::index' => ['privates', '.service_locator.a1X_Afj', 'get_ServiceLocator_A1XAfjService', true],
            'App\\Controller\\AlbumController::new' => ['privates', '.service_locator.a1X_Afj', 'get_ServiceLocator_A1XAfjService', true],
            'App\\Controller\\AlbumController::show' => ['privates', '.service_locator.KpmPeGn', 'get_ServiceLocator_KpmPeGnService', true],
            'App\\Controller\\MusiqueController::delete' => ['privates', '.service_locator.gT6g1WV', 'get_ServiceLocator_GT6g1WVService', true],
            'App\\Controller\\MusiqueController::edit' => ['privates', '.service_locator.gT6g1WV', 'get_ServiceLocator_GT6g1WVService', true],
            'App\\Controller\\MusiqueController::index' => ['privates', '.service_locator.EsknOpg', 'get_ServiceLocator_EsknOpgService', true],
            'App\\Controller\\MusiqueController::new' => ['privates', '.service_locator.EsknOpg', 'get_ServiceLocator_EsknOpgService', true],
            'App\\Controller\\MusiqueController::show' => ['privates', '.service_locator.SCdSo7h', 'get_ServiceLocator_SCdSo7hService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Controller\\AlbumController:delete' => ['privates', '.service_locator.O0qDrEY', 'get_ServiceLocator_O0qDrEYService', true],
            'App\\Controller\\AlbumController:edit' => ['privates', '.service_locator.O0qDrEY', 'get_ServiceLocator_O0qDrEYService', true],
            'App\\Controller\\AlbumController:index' => ['privates', '.service_locator.a1X_Afj', 'get_ServiceLocator_A1XAfjService', true],
            'App\\Controller\\AlbumController:new' => ['privates', '.service_locator.a1X_Afj', 'get_ServiceLocator_A1XAfjService', true],
            'App\\Controller\\AlbumController:show' => ['privates', '.service_locator.KpmPeGn', 'get_ServiceLocator_KpmPeGnService', true],
            'App\\Controller\\MusiqueController:delete' => ['privates', '.service_locator.gT6g1WV', 'get_ServiceLocator_GT6g1WVService', true],
            'App\\Controller\\MusiqueController:edit' => ['privates', '.service_locator.gT6g1WV', 'get_ServiceLocator_GT6g1WVService', true],
            'App\\Controller\\MusiqueController:index' => ['privates', '.service_locator.EsknOpg', 'get_ServiceLocator_EsknOpgService', true],
            'App\\Controller\\MusiqueController:new' => ['privates', '.service_locator.EsknOpg', 'get_ServiceLocator_EsknOpgService', true],
            'App\\Controller\\MusiqueController:show' => ['privates', '.service_locator.SCdSo7h', 'get_ServiceLocator_SCdSo7hService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
        ], [
            'App\\Controller\\AlbumController::delete' => '?',
            'App\\Controller\\AlbumController::edit' => '?',
            'App\\Controller\\AlbumController::index' => '?',
            'App\\Controller\\AlbumController::new' => '?',
            'App\\Controller\\AlbumController::show' => '?',
            'App\\Controller\\MusiqueController::delete' => '?',
            'App\\Controller\\MusiqueController::edit' => '?',
            'App\\Controller\\MusiqueController::index' => '?',
            'App\\Controller\\MusiqueController::new' => '?',
            'App\\Controller\\MusiqueController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\AlbumController:delete' => '?',
            'App\\Controller\\AlbumController:edit' => '?',
            'App\\Controller\\AlbumController:index' => '?',
            'App\\Controller\\AlbumController:new' => '?',
            'App\\Controller\\AlbumController:show' => '?',
            'App\\Controller\\MusiqueController:delete' => '?',
            'App\\Controller\\MusiqueController:edit' => '?',
            'App\\Controller\\MusiqueController:index' => '?',
            'App\\Controller\\MusiqueController:new' => '?',
            'App\\Controller\\MusiqueController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
