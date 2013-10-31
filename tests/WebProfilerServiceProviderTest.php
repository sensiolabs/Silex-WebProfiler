<?php

namespace Silex\Tests\Provider;

use Silex\Application;
use Silex\Provider\ServiceControllerServiceProvider;
use Silex\Provider\TwigServiceProvider;
use Silex\Provider\WebProfilerServiceProvider;

class WebProfilerServiceProviderTest extends \PHPUnit_Framework_TestCase
{
    public function testLoad()
    {
        $app = new Application();
        $app->register(new TwigServiceProvider());
        $app->register(new ServiceControllerServiceProvider());
        $app->register(new WebProfilerServiceProvider(), array(
            'profiler.cache_dir' => __DIR__.'/cache',
        ));
        $app->boot();

        $this->assertInstanceOf('Symfony\Component\EventDispatcher\EventDispatcherInterface', $app['dispatcher']);
    }
}
