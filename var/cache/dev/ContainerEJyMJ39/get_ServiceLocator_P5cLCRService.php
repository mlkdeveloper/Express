<?php

namespace ContainerEJyMJ39;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_P5cLCRService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.P5cL_CR' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.P5cL_CR'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'place' => ['privates', '.errored..service_locator.P5cL_CR.App\\Entity\\Place', NULL, 'Cannot autowire service ".service_locator.P5cL_CR": it references class "App\\Entity\\Place" but no such service exists.'],
        ], [
            'place' => 'App\\Entity\\Place',
        ]);
    }
}
