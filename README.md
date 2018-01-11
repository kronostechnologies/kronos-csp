kronos-csp
==========

A PHP [Content-Security-Policy](https://developer.mozilla.org/docs/HTTP/Headers/Content-Security-Policy) header generator library.

Usage
-----

###Using the `Builder`:

```php

$factory = new \Kronos\ContentSecurityPolicy\Factory();
$builder = $factory->createContentSecurityPolicyBuilder(); 

$builder->setDefaultSrc(\Kronos\ContentSecurityPolicy\Policy::FETCH_NONE);

$policy = $builder->getContentSecurityPolicy();

header($policy->getHeader());
```


###Using the `PolicyDirectorInterface`:

Director class:

```php

use Kronos\ContentSecurityPolicy\Factory;
use Kronos\ContentSecurityPolicy\Policy;
use Kronos\ContentSecurityPolicy\PolicyDirectorInterface;

class Director implements PolicyDirectorInterface
{

    /** @var Factory */
    protected $factory;
    
    ...

    /**
     * @param Factory $factory
     * ...
     */
    public function __construct(Factory $factory, ...)
    {
        $this->factory = $factory;
        ...
    }

    public function buildContentSecurityPolicy()
    {
        $builder = $this->factory->createContentSecurityPolicyBuilder();

        $builder->setDefaultSrc([Policy::FETCH_NONE]);
        $builder->setObjectSrc([Policy::FETCH_NONE]);
        $builder->setStyleSrc([
            'mysite.example/css',
            'fonts.googleapis.com',
            'fonts.gstatic.com',
            Policy::FETCH_UNSAFE_INLINE
        ]);
        $builder->setFontSrc([
            'mysite.example/fonts',
            'fonts.googleapis.com',
            Policy::FETCH_UNSAFE_INLINE
        ]);
        $builder->setFrameAncestors([Policy::FETCH_NONE]);

        $builder->setReportUri('mysite.example/api/csp-report/');
        $builder->setReportOnly();

        return $builder->getContentSecurityPolicy();
    }

}

```

Code:
```php
$factory = new \Kronos\ContentSecurityPolicy\Factory();
$director = new Director($factory);

$policy = $director->buildContentSecurityPolicy();

header($policy->getHeader());
```
