<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit148db72f7219acee683b218c437cb47a
{
    public static $prefixesPsr0 = array (
        'E' => 
        array (
            'EasyRdf_' => 
            array (
                0 => __DIR__ . '/..' . '/easyrdf/easyrdf/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit148db72f7219acee683b218c437cb47a::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
