<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitab78f33e7b35a88d58a67c18ef1bcf83
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitab78f33e7b35a88d58a67c18ef1bcf83::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitab78f33e7b35a88d58a67c18ef1bcf83::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitab78f33e7b35a88d58a67c18ef1bcf83::$classMap;

        }, null, ClassLoader::class);
    }
}
