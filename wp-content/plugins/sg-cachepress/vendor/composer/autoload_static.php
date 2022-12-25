<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite5a5909d13acb78dadbeeac3e22ac679
{
    public static $files = array (
        '7135897415a2b76322abd22e8fdd66f8' => __DIR__ . '/../..' . '/helpers/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SiteGround_i18n\\' => 16,
            'SiteGround_Optimizer\\' => 21,
            'SiteGround_Helper\\' => 18,
            'SiteGround_Emails\\' => 18,
            'SiteGround_Data\\' => 16,
        ),
        'M' => 
        array (
            'MatthiasMullie\\PathConverter\\' => 29,
            'MatthiasMullie\\Minify\\' => 22,
        ),
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
            'CharlesRumley\\Tests\\' => 20,
            'CharlesRumley\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SiteGround_i18n\\' => 
        array (
            0 => __DIR__ . '/..' . '/siteground/siteground-i18n/src',
        ),
        'SiteGround_Optimizer\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'SiteGround_Helper\\' => 
        array (
            0 => __DIR__ . '/..' . '/siteground/siteground-helper/src',
        ),
        'SiteGround_Emails\\' => 
        array (
            0 => __DIR__ . '/..' . '/siteground/siteground-emails/src',
        ),
        'SiteGround_Data\\' => 
        array (
            0 => __DIR__ . '/..' . '/siteground/siteground-data/src',
        ),
        'MatthiasMullie\\PathConverter\\' => 
        array (
            0 => __DIR__ . '/..' . '/matthiasmullie/path-converter/src',
        ),
        'MatthiasMullie\\Minify\\' => 
        array (
            0 => __DIR__ . '/..' . '/matthiasmullie/minify/src',
        ),
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
        'CharlesRumley\\Tests\\' => 
        array (
            0 => __DIR__ . '/..' . '/charles-rumley/php-po-to-json/tests',
        ),
        'CharlesRumley\\' => 
        array (
            0 => __DIR__ . '/..' . '/charles-rumley/php-po-to-json/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Sepia' => 
            array (
                0 => __DIR__ . '/..' . '/sepia/po-parser/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'WP_Async_Request' => __DIR__ . '/..' . '/a5hleyrich/wp-background-processing/classes/wp-async-request.php',
        'WP_Background_Process' => __DIR__ . '/..' . '/a5hleyrich/wp-background-processing/classes/wp-background-process.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite5a5909d13acb78dadbeeac3e22ac679::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite5a5909d13acb78dadbeeac3e22ac679::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInite5a5909d13acb78dadbeeac3e22ac679::$prefixesPsr0;
            $loader->classMap = ComposerStaticInite5a5909d13acb78dadbeeac3e22ac679::$classMap;

        }, null, ClassLoader::class);
    }
}
