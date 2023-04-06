<?php

namespace ContainerPxJNgmF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_O0qDrEYService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.O0qDrEY' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.O0qDrEY'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'album' => ['privates', '.errored..service_locator.O0qDrEY.App\\Entity\\Album', NULL, 'Cannot autowire service ".service_locator.O0qDrEY": it references class "App\\Entity\\Album" but no such service exists.'],
            'albumRepository' => ['privates', 'App\\Repository\\AlbumRepository', 'getAlbumRepositoryService', true],
        ], [
            'album' => 'App\\Entity\\Album',
            'albumRepository' => 'App\\Repository\\AlbumRepository',
        ]);
    }
}