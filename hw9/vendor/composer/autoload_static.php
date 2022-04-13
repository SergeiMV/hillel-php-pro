<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0fd2b5b4cc116c681bf13470aced25b0
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Shaurmichna\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Shaurmichna\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit0fd2b5b4cc116c681bf13470aced25b0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0fd2b5b4cc116c681bf13470aced25b0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0fd2b5b4cc116c681bf13470aced25b0::$classMap;

        }, null, ClassLoader::class);
    }
}
