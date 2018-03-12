<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitaaca3a0011fa29cfcc5dbc243a0082ee
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Fruitware\\VictoriaBankGateway\\' => 30,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Fruitware\\VictoriaBankGateway\\' => 
        array (
            0 => __DIR__ . '/..' . '/fruitware/victoria-bank-gateway/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitaaca3a0011fa29cfcc5dbc243a0082ee::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitaaca3a0011fa29cfcc5dbc243a0082ee::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
