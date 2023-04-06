<?php

namespace ContainerTCENoFD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_A1XAfjService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.a1X_Afj' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.a1X_Afj'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'albumRepository' => ['privates', 'App\\Repository\\AlbumRepository', 'getAlbumRepositoryService', true],
        ], [
            'albumRepository' => 'App\\Repository\\AlbumRepository',
        ]);
    }
}