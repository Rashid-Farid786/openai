<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6405029f70e23aeae5a145cd3210c21e
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'Orhanerday\\OpenAi\\' => 18,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Orhanerday\\OpenAi\\' => 
        array (
            0 => __DIR__ . '/..' . '/orhanerday/open-ai/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6405029f70e23aeae5a145cd3210c21e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6405029f70e23aeae5a145cd3210c21e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6405029f70e23aeae5a145cd3210c21e::$classMap;

        }, null, ClassLoader::class);
    }
}
