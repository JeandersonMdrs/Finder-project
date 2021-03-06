<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit64483fea78e62245e1e6c3ee50503ce1
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Component\\Finder\\' => 25,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Component\\Finder\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/finder',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit64483fea78e62245e1e6c3ee50503ce1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit64483fea78e62245e1e6c3ee50503ce1::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
