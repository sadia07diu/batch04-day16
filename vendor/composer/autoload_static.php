<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd958b91e99fddd4a9196a8c8fce844e6
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd958b91e99fddd4a9196a8c8fce844e6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd958b91e99fddd4a9196a8c8fce844e6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd958b91e99fddd4a9196a8c8fce844e6::$classMap;

        }, null, ClassLoader::class);
    }
}
