<?php

namespace ContainerLeXhbvI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LfeInSkService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.lfeInSk' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.lfeInSk'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'callApiService' => ['privates', '.errored.KeXosqE', NULL, 'Cannot determine controller argument for "App\\Controller\\HomeController::index()": the $callApiService argument is type-hinted with the non-existent class or interface: "App\\Controller\\CallApiService". Did you forget to add a use statement?'],
        ], [
            'callApiService' => '?',
        ]);
    }
}
