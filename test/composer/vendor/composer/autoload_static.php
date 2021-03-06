<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf8ba955a032b86f3f2df002061994ff8
{
    public static $files = array (
        '1d96f9795ff1ad46dcb68a6493aab784' => __DIR__ . '/../..' . '/src/function.php',
    );

    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'src\\' => 4,
        ),
        'a' => 
        array (
            'app\\src\\' => 8,
        ),
        'S' => 
        array (
            'Symfony\\Component\\Finder\\' => 25,
        ),
        'R' => 
        array (
            'ReCaptcha\\' => 10,
        ),
        'G' => 
        array (
            'Gregwar\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'src\\' => 
        array (
            0 => __DIR__ . '/..' . '/he7009/duanyude/src',
        ),
        'app\\src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Symfony\\Component\\Finder\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/finder',
        ),
        'ReCaptcha\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/recaptcha/src/ReCaptcha',
        ),
        'Gregwar\\' => 
        array (
            0 => __DIR__ . '/..' . '/gregwar/captcha/src/Gregwar',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf8ba955a032b86f3f2df002061994ff8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf8ba955a032b86f3f2df002061994ff8::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
