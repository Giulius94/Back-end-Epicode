<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite053d8e2a626c3f7d043748dd332a81c
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'G' => 
        array (
            'Giulius94\\S1L4\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Giulius94\\S1L4\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite053d8e2a626c3f7d043748dd332a81c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite053d8e2a626c3f7d043748dd332a81c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite053d8e2a626c3f7d043748dd332a81c::$classMap;

        }, null, ClassLoader::class);
    }
}
