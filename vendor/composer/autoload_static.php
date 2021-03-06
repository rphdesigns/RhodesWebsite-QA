<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbb4e9f54244ed4fefea03bb187ffc990
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitbb4e9f54244ed4fefea03bb187ffc990::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbb4e9f54244ed4fefea03bb187ffc990::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbb4e9f54244ed4fefea03bb187ffc990::$classMap;

        }, null, ClassLoader::class);
    }
}
