<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit60b032e105a1681b91fe1678a91dfb6a
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit60b032e105a1681b91fe1678a91dfb6a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit60b032e105a1681b91fe1678a91dfb6a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit60b032e105a1681b91fe1678a91dfb6a::$classMap;

        }, null, ClassLoader::class);
    }
}
