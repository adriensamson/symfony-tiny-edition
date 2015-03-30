<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
        );

        if ($this->isDebug()) {
            $bundles[] = new Symfony\Bundle\DebugBundle\DebugBundle();
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load($this->getRootDir() . '/config/config.yml');
        if ($this->isDebug()) {
            $loader->load($this->getRootDir() . '/config/config_dbg.yml');
        }
    }

    public function getRootDir()
    {
        if (null === $this->rootDir) {
            $this->rootDir = __DIR__ . '/../app';
        }

        return $this->rootDir;
    }

    public function getCacheDir()
    {
        return parent::getRootDir() . '/../var/cache/' . $this->getEnvironment();
    }

    public function getLogDir()
    {
        return parent::getRootDir() . '/../var/logs';
    }
}

