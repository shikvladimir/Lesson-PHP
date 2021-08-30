<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9d25471c4cb5a66543eaf18158e21dcd
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'Vagrant\\Project1\\' => 17,
        ),
        'L' => 
        array (
            'Log\\' => 4,
        ),
        'J' => 
        array (
            'Journal\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Vagrant\\Project1\\' => 
        array (
            0 => __DIR__ . '/../..' . '/log/db',
        ),
        'Log\\' => 
        array (
            0 => __DIR__ . '/../..' . '/log',
        ),
        'Journal\\' => 
        array (
            0 => __DIR__ . '/../..' . '/journal',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9d25471c4cb5a66543eaf18158e21dcd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9d25471c4cb5a66543eaf18158e21dcd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9d25471c4cb5a66543eaf18158e21dcd::$classMap;

        }, null, ClassLoader::class);
    }
}