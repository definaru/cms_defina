<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit31a234b1e8a59498a58511117c49aa33
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\defina\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\defina\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/defina',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit31a234b1e8a59498a58511117c49aa33::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit31a234b1e8a59498a58511117c49aa33::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit31a234b1e8a59498a58511117c49aa33::$classMap;

        }, null, ClassLoader::class);
    }
}
