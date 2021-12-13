<?php

namespace ContainerEJyMJ39;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_C4UrWDService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.C4Ur_wD' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.C4Ur_wD'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'victim' => ['privates', '.errored..service_locator.C4Ur_wD.App\\Entity\\Victim', NULL, 'Cannot autowire service ".service_locator.C4Ur_wD": it references class "App\\Entity\\Victim" but no such service exists.'],
        ], [
            'victim' => 'App\\Entity\\Victim',
        ]);
    }
}
