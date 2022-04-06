<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitb0c72a63918bb5623855573f03c8b4cf
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitb0c72a63918bb5623855573f03c8b4cf', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitb0c72a63918bb5623855573f03c8b4cf', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        \Composer\Autoload\ComposerStaticInitb0c72a63918bb5623855573f03c8b4cf::getInitializer($loader)();

        $loader->register(true);

        return $loader;
    }
}