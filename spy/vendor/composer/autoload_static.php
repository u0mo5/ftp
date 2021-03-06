<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf915a61da65520300ef26125265c1740
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '667aeda72477189d0494fecd327c3641' => __DIR__ . '/..' . '/symfony/var-dumper/Resources/functions/dump.php',
    );

    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'U0mo5\\Tools\\' => 12,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\VarDumper\\' => 28,
        ),
        'Q' => 
        array (
            'QL\\Ext\\Lib\\' => 11,
            'QL\\Ext\\' => 7,
            'QL\\' => 3,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'D' => 
        array (
            'DebugBar\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'U0mo5\\Tools\\' => 
        array (
            0 => __DIR__ . '/..' . '/u0mo5/tools/src',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\VarDumper\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/var-dumper',
        ),
        'QL\\Ext\\Lib\\' => 
        array (
            0 => __DIR__ . '/..' . '/jaeger/curlmulti',
            1 => __DIR__ . '/..' . '/jaeger/http',
        ),
        'QL\\Ext\\' => 
        array (
            0 => __DIR__ . '/..' . '/jaeger/querylist-ext-aquery',
            1 => __DIR__ . '/..' . '/jaeger/querylist-ext-multi',
            2 => __DIR__ . '/..' . '/jaeger/querylist-ext-request',
            3 => __DIR__ . '/..' . '/jaeger/querylist-ext-login',
            4 => __DIR__ . '/..' . '/jaeger/querylist-ext-dimage',
        ),
        'QL\\' => 
        array (
            0 => __DIR__ . '/..' . '/jaeger/querylist',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'DebugBar\\' => 
        array (
            0 => __DIR__ . '/..' . '/maximebf/debugbar/src/DebugBar',
        ),
    );

    public static $classMap = array (
        'Callback' => __DIR__ . '/..' . '/jaeger/phpquery-single/phpQuery.php',
        'CallbackBody' => __DIR__ . '/..' . '/jaeger/phpquery-single/phpQuery.php',
        'CallbackParam' => __DIR__ . '/..' . '/jaeger/phpquery-single/phpQuery.php',
        'CallbackParameterToReference' => __DIR__ . '/..' . '/jaeger/phpquery-single/phpQuery.php',
        'CallbackReturnReference' => __DIR__ . '/..' . '/jaeger/phpquery-single/phpQuery.php',
        'CallbackReturnValue' => __DIR__ . '/..' . '/jaeger/phpquery-single/phpQuery.php',
        'DOMDocumentWrapper' => __DIR__ . '/..' . '/jaeger/phpquery-single/phpQuery.php',
        'DOMEvent' => __DIR__ . '/..' . '/jaeger/phpquery-single/phpQuery.php',
        'ICallbackNamed' => __DIR__ . '/..' . '/jaeger/phpquery-single/phpQuery.php',
        'phpQuery' => __DIR__ . '/..' . '/jaeger/phpquery-single/phpQuery.php',
        'phpQueryEvents' => __DIR__ . '/..' . '/jaeger/phpquery-single/phpQuery.php',
        'phpQueryObject' => __DIR__ . '/..' . '/jaeger/phpquery-single/phpQuery.php',
        'phpQueryPlugins' => __DIR__ . '/..' . '/jaeger/phpquery-single/phpQuery.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf915a61da65520300ef26125265c1740::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf915a61da65520300ef26125265c1740::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf915a61da65520300ef26125265c1740::$classMap;

        }, null, ClassLoader::class);
    }
}
