<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc14b5149d864b14177b80da03325a209
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Services\\' => 9,
        ),
        'M' => 
        array (
            'Model\\' => 6,
            'Mid\\' => 4,
        ),
        'C' => 
        array (
            'Controller\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Services\\' => 
        array (
            0 => __DIR__ . '/../..' . '/services',
        ),
        'Model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/model',
        ),
        'Mid\\' => 
        array (
            0 => __DIR__ . '/../..' . '/mid',
        ),
        'Controller\\' => 
        array (
            0 => __DIR__ . '/../..' . '/controller',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc14b5149d864b14177b80da03325a209::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc14b5149d864b14177b80da03325a209::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc14b5149d864b14177b80da03325a209::$classMap;

        }, null, ClassLoader::class);
    }
}
