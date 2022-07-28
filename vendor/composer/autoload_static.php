<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9c72182847fa07253653dc4a5f60ba24
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9c72182847fa07253653dc4a5f60ba24::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9c72182847fa07253653dc4a5f60ba24::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9c72182847fa07253653dc4a5f60ba24::$classMap;

        }, null, ClassLoader::class);
    }
}