<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit52da43c52c71f0086f428bf17e21d0d1
{
    public static $prefixLengthsPsr4 = array (
        'k' => 
        array (
            'kimsien\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'kimsien\\' => 
        array (
            0 => __DIR__ . '/../..' . '/../src',
        ),
    );

    public static $classMap = array (
        'kimsien\\InsertData' => __DIR__ . '/../..' . '/../src/InsertData.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit52da43c52c71f0086f428bf17e21d0d1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit52da43c52c71f0086f428bf17e21d0d1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit52da43c52c71f0086f428bf17e21d0d1::$classMap;

        }, null, ClassLoader::class);
    }
}