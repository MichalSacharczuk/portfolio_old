<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit37eabbafe0a3212ef71893a761c67000
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Html2Text\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Html2Text\\' => 
        array (
            0 => __DIR__ . '/..' . '/html2text/html2text/src',
            1 => __DIR__ . '/..' . '/html2text/html2text/test',
        ),
    );

    public static $classMap = array (
        'EasyPeasyICS' => __DIR__ . '/..' . '/phpmailer/phpmailer/extras/EasyPeasyICS.php',
        'PHPMailer' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmailer.php',
        'PHPMailerOAuth' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmaileroauth.php',
        'PHPMailerOAuthGoogle' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmaileroauthgoogle.php',
        'POP3' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.pop3.php',
        'SMTP' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.smtp.php',
        'ntlm_sasl_client_class' => __DIR__ . '/..' . '/phpmailer/phpmailer/extras/ntlm_sasl_client.php',
        'phpmailerException' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmailer.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit37eabbafe0a3212ef71893a761c67000::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit37eabbafe0a3212ef71893a761c67000::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit37eabbafe0a3212ef71893a761c67000::$classMap;

        }, null, ClassLoader::class);
    }
}
