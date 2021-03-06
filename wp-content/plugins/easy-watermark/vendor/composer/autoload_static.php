<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4e0225b5b457014fb3441c37d638391d
{
    public static $prefixLengthsPsr4 = array (
        'u' => 
        array (
            'underDEV\\Utils\\' => 15,
        ),
        'E' => 
        array (
            'EasyWatermark\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'underDEV\\Utils\\' => 
        array (
            0 => __DIR__ . '/..' . '/underdev/singleton/src',
        ),
        'EasyWatermark\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/classes',
        ),
    );

    public static $prefixesPsr0 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 
            array (
                0 => __DIR__ . '/..' . '/composer/installers/src',
            ),
        ),
    );

    public static $classMap = array (
        'underDEV_Requirements' => __DIR__ . '/..' . '/underdev/requirements/underDEV_Requirements.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4e0225b5b457014fb3441c37d638391d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4e0225b5b457014fb3441c37d638391d::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit4e0225b5b457014fb3441c37d638391d::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit4e0225b5b457014fb3441c37d638391d::$classMap;

        }, null, ClassLoader::class);
    }
}
