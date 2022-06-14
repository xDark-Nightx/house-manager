<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9d2f9b9461859bab539705d532536024
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'System\\Controller\\Database' => __DIR__ . '/../..' . '/System/Controller/Database.php',
        'System\\Controller\\Session' => __DIR__ . '/../..' . '/System/Controller/Session.php',
        'System\\Core\\DefaultController' => __DIR__ . '/../..' . '/System/Core/DefaultController.php',
        'System\\Materials\\Display\\MainController' => __DIR__ . '/../..' . '/System/Materials/Display/Main.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit9d2f9b9461859bab539705d532536024::$classMap;

        }, null, ClassLoader::class);
    }
}
