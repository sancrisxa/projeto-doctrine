<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita52dc361a6327ccd305ba69fae77097e
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'Zend\\EventManager\\' => 18,
            'Zend\\Code\\' => 10,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Contracts\\' => 18,
            'Symfony\\Component\\Stopwatch\\' => 28,
            'Symfony\\Component\\Console\\' => 26,
        ),
        'P' => 
        array (
            'PackageVersions\\' => 16,
        ),
        'D' => 
        array (
            'Doctrine\\ORM\\' => 13,
            'Doctrine\\Migrations\\' => 20,
            'Doctrine\\Instantiator\\' => 22,
            'Doctrine\\DBAL\\' => 14,
            'Doctrine\\Common\\Inflector\\' => 26,
            'Doctrine\\Common\\Collections\\' => 28,
            'Doctrine\\Common\\Cache\\' => 22,
            'Doctrine\\Common\\Annotations\\' => 28,
            'Doctrine\\Common\\' => 16,
        ),
        'A' => 
        array (
            'Alura\\Doctrine\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Zend\\EventManager\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-eventmanager/src',
        ),
        'Zend\\Code\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-code/src',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Contracts\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/contracts',
        ),
        'Symfony\\Component\\Stopwatch\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/stopwatch',
        ),
        'Symfony\\Component\\Console\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/console',
        ),
        'PackageVersions\\' => 
        array (
            0 => __DIR__ . '/..' . '/ocramius/package-versions/src/PackageVersions',
        ),
        'Doctrine\\ORM\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/orm/lib/Doctrine/ORM',
        ),
        'Doctrine\\Migrations\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/migrations/lib/Doctrine/Migrations',
        ),
        'Doctrine\\Instantiator\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/instantiator/src/Doctrine/Instantiator',
        ),
        'Doctrine\\DBAL\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/dbal/lib/Doctrine/DBAL',
        ),
        'Doctrine\\Common\\Inflector\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/inflector/lib/Doctrine/Common/Inflector',
        ),
        'Doctrine\\Common\\Collections\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/collections/lib/Doctrine/Common/Collections',
        ),
        'Doctrine\\Common\\Cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/cache/lib/Doctrine/Common/Cache',
        ),
        'Doctrine\\Common\\Annotations\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/annotations/lib/Doctrine/Common/Annotations',
        ),
        'Doctrine\\Common\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/common/lib/Doctrine/Common',
            1 => __DIR__ . '/..' . '/doctrine/event-manager/lib/Doctrine/Common',
            2 => __DIR__ . '/..' . '/doctrine/persistence/lib/Doctrine/Common',
            3 => __DIR__ . '/..' . '/doctrine/reflection/lib/Doctrine/Common',
        ),
        'Alura\\Doctrine\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'ProxyManager\\' => 
            array (
                0 => __DIR__ . '/..' . '/ocramius/proxy-manager/src',
            ),
        ),
        'D' => 
        array (
            'Doctrine\\Common\\Lexer\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/lexer/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita52dc361a6327ccd305ba69fae77097e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita52dc361a6327ccd305ba69fae77097e::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInita52dc361a6327ccd305ba69fae77097e::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
