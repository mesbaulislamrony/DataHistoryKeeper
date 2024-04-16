<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6a63d3fe661f84e8f7abe2866fce4b75
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Codestepsbd\\Historykeeper\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Codestepsbd\\Historykeeper\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit6a63d3fe661f84e8f7abe2866fce4b75::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6a63d3fe661f84e8f7abe2866fce4b75::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6a63d3fe661f84e8f7abe2866fce4b75::$classMap;

        }, null, ClassLoader::class);
    }
}
