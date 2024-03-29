<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb1691f004d9fc1a23632c05e466e4bc1
{
    public static $prefixLengthsPsr4 = array (
        'i' => 
        array (
            'itrax\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'itrax\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitb1691f004d9fc1a23632c05e466e4bc1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb1691f004d9fc1a23632c05e466e4bc1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb1691f004d9fc1a23632c05e466e4bc1::$classMap;

        }, null, ClassLoader::class);
    }
}
