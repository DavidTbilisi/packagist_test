<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7c3463495cad0ee0b605e21d3de0b1ab
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Dapp\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Dapp\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Dapp\\Control\\Main' => __DIR__ . '/../..' . '/app/controller/Main.php',
        'Dapp\\Model\\People' => __DIR__ . '/../..' . '/app/model/People.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7c3463495cad0ee0b605e21d3de0b1ab::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7c3463495cad0ee0b605e21d3de0b1ab::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7c3463495cad0ee0b605e21d3de0b1ab::$classMap;

        }, null, ClassLoader::class);
    }
}
