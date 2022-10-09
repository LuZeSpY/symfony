<?php

namespace Container6pVdaPV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTwig_Form_RendererService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'twig.form.renderer' shared service.
     *
     * @return \Symfony\Component\Form\FormRenderer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormRendererInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormRenderer.php';

        return $container->privates['twig.form.renderer'] = new \Symfony\Component\Form\FormRenderer(($container->privates['twig.form.engine'] ?? $container->load('getTwig_Form_EngineService')), ($container->services['.container.private.security.csrf.token_manager'] ?? $container->load('get_Container_Private_Security_Csrf_TokenManagerService')));
    }
}
