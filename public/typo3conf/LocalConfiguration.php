<?php
return [
    'BE' => [
        'debug' => true,
        'explicitADmode' => 'explicitAllow',
        'installToolPassword' => '$argon2i$v=19$m=16384,t=16,p=2$ZnNZUG9ucy5FVFEvVXdUaQ$5OD8qIJXiYsIFOh5NUbttmhkUwzGY/i912zEUi7lnIk',
        'loginSecurityLevel' => 'normal',
        'passwordHashing' => [
            'className' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\Argon2iPasswordHash',
            'options' => [],
        ],
    ],
    'DB' => [
        'Connections' => [
            'Default' => [
                'charset' => 'utf8mb4',
                'driver' => 'mysqli',
                'host' => 'db',
                'password' => '1234',
                'port' => 3306,
                'tableoptions' => [
                    'charset' => 'utf8mb4',
                    'collate' => 'utf8mb4_unicode_ci',
                ],
                'user' => 'user',
            ],
        ],
    ],
    'EXT' => [
        'extConf' => [
            'backend' => 'a:6:{s:14:"backendFavicon";s:0:"";s:11:"backendLogo";s:0:"";s:20:"loginBackgroundImage";s:0:"";s:13:"loginFootnote";s:0:"";s:19:"loginHighlightColor";s:0:"";s:9:"loginLogo";s:0:"";}',
            'extensionmanager' => 'a:2:{s:21:"automaticInstallation";s:1:"1";s:11:"offlineMode";s:1:"0";}',
            'gridelements' => 'a:6:{s:20:"additionalStylesheet";s:0:"";s:38:"disableAutomaticUnusedColumnCorrection";s:1:"0";s:25:"disableCopyFromPageButton";s:1:"0";s:19:"disableDragInWizard";s:1:"0";s:19:"nestingInListModule";s:1:"0";s:26:"overlayShortcutTranslation";s:1:"0";}',
            'mask' => 'a:9:{s:4:"json";s:77:"EXT:fx_templates_jungerkammerchor/Resources/Private/Extensions/Mask/mask.json";s:18:"backendlayout_pids";s:3:"0,1";s:7:"content";s:86:"EXT:fx_templates_jungerkammerchor/Resources/Private/Extensions/Mask/Frontend/Templates";s:7:"layouts";s:84:"EXT:fx_templates_jungerkammerchor/Resources/Private/Extensions/Mask/Frontend/Layouts";s:8:"partials";s:85:"EXT:fx_templates_jungerkammerchor/Resources/Private/Extensions/Mask/Frontend/Partials";s:7:"backend";s:85:"EXT:fx_templates_jungerkammerchor/Resources/Private/Extensions/Mask/Backend/Templates";s:15:"layouts_backend";s:83:"EXT:fx_templates_jungerkammerchor/Resources/Private/Extensions/Mask/Backend/Layouts";s:16:"partials_backend";s:84:"EXT:fx_templates_jungerkammerchor/Resources/Private/Extensions/Mask/Backend/Partials";s:7:"preview";s:84:"EXT:fx_templates_jungerkammerchor/Resources/Private/Extensions/Mask/Backend/Previews";}',
            'scheduler' => 'a:2:{s:11:"maxLifetime";s:4:"1440";s:15:"showSampleTasks";s:1:"1";}',
            't3monitoring_client' => 'a:3:{s:10:"allowedIps";s:1:"*";s:20:"enableDebugForErrors";s:1:"0";s:6:"secret";s:0:"";}',
        ],
    ],
    'EXTENSIONS' => [
        'backend' => [
            'backendFavicon' => '',
            'backendLogo' => '',
            'loginBackgroundImage' => '',
            'loginFootnote' => '',
            'loginHighlightColor' => '',
            'loginLogo' => '',
        ],
        'extensionmanager' => [
            'automaticInstallation' => '1',
            'offlineMode' => '0',
        ],
        'gridelements' => [
            'additionalStylesheet' => '',
            'disableAutomaticUnusedColumnCorrection' => '0',
            'disableCopyFromPageButton' => '0',
            'disableDragInWizard' => '0',
            'nestingInListModule' => '0',
            'overlayShortcutTranslation' => '0',
        ],
        'mask' => [
            'backend' => 'EXT:fx_templates_jungerkammerchor/Resources/Private/Extensions/Mask/Backend/Templates',
            'backendlayout_pids' => '0,1',
            'content' => 'EXT:fx_templates_jungerkammerchor/Resources/Private/Extensions/Mask/Frontend/Templates',
            'json' => 'EXT:fx_templates_jungerkammerchor/Resources/Private/Extensions/Mask/mask.json',
            'layouts' => 'EXT:fx_templates_jungerkammerchor/Resources/Private/Extensions/Mask/Frontend/Layouts',
            'layouts_backend' => 'EXT:fx_templates_jungerkammerchor/Resources/Private/Extensions/Mask/Backend/Layouts',
            'partials' => 'EXT:fx_templates_jungerkammerchor/Resources/Private/Extensions/Mask/Frontend/Partials',
            'partials_backend' => 'EXT:fx_templates_jungerkammerchor/Resources/Private/Extensions/Mask/Backend/Partials',
            'preview' => 'EXT:fx_templates_jungerkammerchor/Resources/Private/Extensions/Mask/Backend/Previews',
        ],
        'scheduler' => [
            'maxLifetime' => '1440',
            'showSampleTasks' => '1',
        ],
        't3monitoring_client' => [
            'allowedIps' => '*',
            'enableDebugForErrors' => '0',
            'secret' => '',
        ],
    ],
    'FE' => [
        'debug' => true,
        'loginSecurityLevel' => 'normal',
        'passwordHashing' => [
            'className' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\Argon2iPasswordHash',
            'options' => [],
        ],
    ],
    'GFX' => [
        'processor' => 'GraphicsMagick',
        'processor_allowTemporaryMasksAsPng' => false,
        'processor_colorspace' => 'RGB',
        'processor_effects' => false,
        'processor_enabled' => true,
        'processor_path' => '/usr/bin/',
        'processor_path_lzw' => '/usr/bin/',
    ],
    'MAIL' => [
        'transport' => 'sendmail',
        'transport_sendmail_command' => ' -t -i ',
        'transport_smtp_encrypt' => '',
        'transport_smtp_password' => '',
        'transport_smtp_server' => '',
        'transport_smtp_username' => '',
    ],
    'SYS' => [
        'devIPmask' => '*',
        'displayErrors' => 1,
        'encryptionKey' => '0TiB05xaguqbFsim2TVkizy939PYEBhU4mOTvQY6yarQSiwXFmVbv9jHjCVQ07revhjPnqq0KEVH7JUxVsAEYTMXl2Hz13U4',
        'exceptionalErrors' => 12290,
        'features' => [
            'unifiedPageTranslationHandling' => true,
        ],
        'sitename' => 'Junger Kammerchor Siegen-Süd',
        'systemLogLevel' => 3,
        'systemMaintainers' => [
            2,
        ],
    ],
];
