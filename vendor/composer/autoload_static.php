<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5ba7a765d5cfb2524cdd463ef01333bd
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit5ba7a765d5cfb2524cdd463ef01333bd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5ba7a765d5cfb2524cdd463ef01333bd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5ba7a765d5cfb2524cdd463ef01333bd::$classMap;

        }, null, ClassLoader::class);
    }
}
