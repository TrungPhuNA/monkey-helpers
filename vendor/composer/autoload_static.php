<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita4868dfbd4acec5d3c84759ba4b69ac6
{
    public static $files = array (
        '4111c6e9988d4f9e7f1e0825ae825243' => __DIR__ . '/../..' . '/src/function.php',
    );

    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Monkey\\Helpers\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Monkey\\Helpers\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInita4868dfbd4acec5d3c84759ba4b69ac6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita4868dfbd4acec5d3c84759ba4b69ac6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita4868dfbd4acec5d3c84759ba4b69ac6::$classMap;

        }, null, ClassLoader::class);
    }
}
