<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit35a969e30b5ec50a78459c6847020aaf
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MyTest\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MyTest\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit35a969e30b5ec50a78459c6847020aaf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit35a969e30b5ec50a78459c6847020aaf::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
