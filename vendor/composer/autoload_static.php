<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7889eb5f4d28e9f7e0176b1a85d99756
{
    public static $files = array (
        '231e5ccad8887caed1f7fe98ab911458' => __DIR__ . '/../..' . '/../../../UIComponent/UserInterfaceHook/HelpMe/vendor/autoload.php',
    );

    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'srag\\Plugins\\HelpMeCron\\' => 24,
            'srag\\LibrariesNamespaceChanger\\' => 31,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'srag\\Plugins\\HelpMeCron\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'srag\\LibrariesNamespaceChanger\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/librariesnamespacechanger/src',
        ),
    );

    public static $classMap = array (
        'ilHelpMeCronPlugin' => __DIR__ . '/../..' . '/classes/class.ilHelpMeCronPlugin.php',
        'srag\\LibrariesNamespaceChanger\\LibrariesNamespaceChanger' => __DIR__ . '/..' . '/srag/librariesnamespacechanger/src/LibrariesNamespaceChanger.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7889eb5f4d28e9f7e0176b1a85d99756::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7889eb5f4d28e9f7e0176b1a85d99756::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7889eb5f4d28e9f7e0176b1a85d99756::$classMap;

        }, null, ClassLoader::class);
    }
}
