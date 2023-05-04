<?php

namespace Test\ApiBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\PrependExtensionInterface;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

class TestApiExtension extends Extension implements PrependExtensionInterface
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yaml');
        $this->addAnnotatedClassesToCompile([
            'Test\\ApiBundle\\Controller'
        ]);
    }

    public function prepend(ContainerBuilder $container)
    {
        // TODO: Implement prepend() method.
    }

    public function getAlias()
    {
        return 'test_api';
    }
}
