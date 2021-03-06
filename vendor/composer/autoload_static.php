<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit04733feb1c0ae4215a84f565b8fdacca
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'League\\HTMLToMarkdown\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'League\\HTMLToMarkdown\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/html-to-markdown/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit04733feb1c0ae4215a84f565b8fdacca::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit04733feb1c0ae4215a84f565b8fdacca::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
