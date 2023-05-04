<?php
namespace Test\ApiBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Test\ApiBundle\DependencyInjection\TestApiExtension;

class TestApiBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
        $ext = new TestApiExtension([],$container);

    }
}