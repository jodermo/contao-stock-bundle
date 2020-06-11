<?php

/*
 * This file is part of [petzka/contao-stock-bundle].
 *
 * (c) Moritz Petzka <info@petzka.com>
 *
 * @license LGPL-3.0-or-later
 */

namespace Petzka\ContaoStockBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

class ContaoExampleExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container): void
    {
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        $loader->load('services.yml');
    }
}
