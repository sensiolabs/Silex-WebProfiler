Silex Web Profiler
==================

The Silex Web Profiler service provider allows you to use the wonderful
Symfony web debug toolbar and the Symfony profiler in your Silex application.

To enable it, add this dependency to your `composer.json` file:

    "silex/web-profiler": "~1.0"

And enable it in your application:

```php
    use Silex\Provider;

    $app->register(new Provider\WebProfilerServiceProvider(), array(
        'profiler.options' => array(
            'cache' => __DIR__.'/../cache/profiler',
            'mount_prefix' => '/_prof' // not necessary, default: /_profiler
        )
    ));
```

The provider depends on `ServiceControllerServiceProvider`,
`TwigServiceProvider` and `UrlGeneratorServiceProvider`, so you also need to
enable those if that's not already the case:

    $app->register(new Provider\ServiceControllerServiceProvider());
    $app->register(new Provider\TwigServiceProvider());
    $app->register(new Provider\UrlGeneratorServiceProvider());
