<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5fe7018514da75b7184c8d3d069dea9e
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PropertyFinder\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PropertyFinder\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5fe7018514da75b7184c8d3d069dea9e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5fe7018514da75b7184c8d3d069dea9e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
