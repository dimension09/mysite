<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInited70a8b70faf82b2de98bd3763825f07
{
    public static $prefixLengthsPsr4 = array (
        'm' => 
        array (
            'mysite\\' => 7,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
        'R' => 
        array (
            'RedBeanPHP\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'mysite\\' => 
        array (
            0 => __DIR__ . '/..' . '/mysite/core',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'RedBeanPHP\\' => 
        array (
            0 => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInited70a8b70faf82b2de98bd3763825f07::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInited70a8b70faf82b2de98bd3763825f07::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
