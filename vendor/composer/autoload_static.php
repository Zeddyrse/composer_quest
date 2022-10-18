<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit38e3d0b5f3480e577fe7b472fb7eb3f2
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Wild\\App\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Wild\\App\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit38e3d0b5f3480e577fe7b472fb7eb3f2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit38e3d0b5f3480e577fe7b472fb7eb3f2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit38e3d0b5f3480e577fe7b472fb7eb3f2::$classMap;

        }, null, ClassLoader::class);
    }
}
