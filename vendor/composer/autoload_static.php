<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitab8baec96cd3d13a4810794b7cb8c55b
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
        ),
        'D' => 
        array (
            'DevBlog\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'DevBlog\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitab8baec96cd3d13a4810794b7cb8c55b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitab8baec96cd3d13a4810794b7cb8c55b::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitab8baec96cd3d13a4810794b7cb8c55b::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
