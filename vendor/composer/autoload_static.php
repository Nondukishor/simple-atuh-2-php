<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8770c91d403e119d52a00c7257b1cbc6
{
    public static $prefixLengthsPsr4 = array (
        'n' => 
        array (
            'nk\\' => 3,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'nk\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8770c91d403e119d52a00c7257b1cbc6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8770c91d403e119d52a00c7257b1cbc6::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
