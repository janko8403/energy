<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit81c0dcb13f54a2c1ae6178e33c5b4b42
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit81c0dcb13f54a2c1ae6178e33c5b4b42', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit81c0dcb13f54a2c1ae6178e33c5b4b42', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit81c0dcb13f54a2c1ae6178e33c5b4b42::getInitializer($loader));

        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInit81c0dcb13f54a2c1ae6178e33c5b4b42::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequire81c0dcb13f54a2c1ae6178e33c5b4b42($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequire81c0dcb13f54a2c1ae6178e33c5b4b42($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}
