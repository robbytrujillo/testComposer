<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcf876a9ad6ab7c2fa1eafe3d2f21dfb7
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Faker\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Faker\\' => 
        array (
            0 => __DIR__ . '/..' . '/fzaninotto/faker/src/Faker',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcf876a9ad6ab7c2fa1eafe3d2f21dfb7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcf876a9ad6ab7c2fa1eafe3d2f21dfb7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcf876a9ad6ab7c2fa1eafe3d2f21dfb7::$classMap;

        }, null, ClassLoader::class);
    }
}