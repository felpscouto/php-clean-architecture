<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit02497e7a42c6e9d50f2d22fe1f631491
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'alura\\php-clean-architecture\\' => 29,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'alura\\php-clean-architecture\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit02497e7a42c6e9d50f2d22fe1f631491::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit02497e7a42c6e9d50f2d22fe1f631491::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit02497e7a42c6e9d50f2d22fe1f631491::$classMap;

        }, null, ClassLoader::class);
    }
}
