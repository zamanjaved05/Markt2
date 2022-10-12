<?php return array (
  'app' => 
  array (
    'name' => 'Laravel',
    'env' => 'local',
    'debug' => true,
    'url' => 'http://localhost',
    'asset_url' => NULL,
    'timezone' => 'UTC',
    'locale' => 'en',
    'fallback_locale' => 'en',
    'faker_locale' => 'en_US',
    'key' => 'base64:dfwgcark/pdp967pqaH7uP/V1DdmC8CX1L7AB1NuSuo=',
    'cipher' => 'AES-256-CBC',
    'providers' => 
    array (
      0 => 'Illuminate\\Auth\\AuthServiceProvider',
      1 => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
      2 => 'Illuminate\\Bus\\BusServiceProvider',
      3 => 'Illuminate\\Cache\\CacheServiceProvider',
      4 => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
      5 => 'Illuminate\\Cookie\\CookieServiceProvider',
      6 => 'Illuminate\\Database\\DatabaseServiceProvider',
      7 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
      8 => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
      9 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
      10 => 'Illuminate\\Hashing\\HashServiceProvider',
      11 => 'Illuminate\\Mail\\MailServiceProvider',
      12 => 'Illuminate\\Notifications\\NotificationServiceProvider',
      13 => 'Illuminate\\Pagination\\PaginationServiceProvider',
      14 => 'Illuminate\\Pipeline\\PipelineServiceProvider',
      15 => 'Illuminate\\Queue\\QueueServiceProvider',
      16 => 'Illuminate\\Redis\\RedisServiceProvider',
      17 => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
      18 => 'Illuminate\\Session\\SessionServiceProvider',
      19 => 'Illuminate\\Translation\\TranslationServiceProvider',
      20 => 'Illuminate\\Validation\\ValidationServiceProvider',
      21 => 'Illuminate\\View\\ViewServiceProvider',
      22 => 'UniSharp\\LaravelFilemanager\\LaravelFilemanagerServiceProvider',
      23 => 'Intervention\\Image\\ImageServiceProvider',
      24 => 'Barryvdh\\DomPDF\\ServiceProvider',
      25 => 'Srmklive\\PayPal\\Providers\\PayPalServiceProvider',
      26 => 'Laravel\\Socialite\\SocialiteServiceProvider',
      27 => 'App\\Providers\\AppServiceProvider',
      28 => 'App\\Providers\\AuthServiceProvider',
      29 => 'App\\Providers\\BroadcastServiceProvider',
      30 => 'App\\Providers\\EventServiceProvider',
      31 => 'App\\Providers\\RouteServiceProvider',
    ),
    'aliases' => 
    array (
      'App' => 'Illuminate\\Support\\Facades\\App',
      'Arr' => 'Illuminate\\Support\\Arr',
      'Artisan' => 'Illuminate\\Support\\Facades\\Artisan',
      'Auth' => 'Illuminate\\Support\\Facades\\Auth',
      'Blade' => 'Illuminate\\Support\\Facades\\Blade',
      'Broadcast' => 'Illuminate\\Support\\Facades\\Broadcast',
      'Bus' => 'Illuminate\\Support\\Facades\\Bus',
      'Cache' => 'Illuminate\\Support\\Facades\\Cache',
      'Config' => 'Illuminate\\Support\\Facades\\Config',
      'Cookie' => 'Illuminate\\Support\\Facades\\Cookie',
      'Crypt' => 'Illuminate\\Support\\Facades\\Crypt',
      'DB' => 'Illuminate\\Support\\Facades\\DB',
      'Eloquent' => 'Illuminate\\Database\\Eloquent\\Model',
      'Event' => 'Illuminate\\Support\\Facades\\Event',
      'File' => 'Illuminate\\Support\\Facades\\File',
      'Gate' => 'Illuminate\\Support\\Facades\\Gate',
      'Hash' => 'Illuminate\\Support\\Facades\\Hash',
      'Http' => 'Illuminate\\Support\\Facades\\Http',
      'Lang' => 'Illuminate\\Support\\Facades\\Lang',
      'Log' => 'Illuminate\\Support\\Facades\\Log',
      'Mail' => 'Illuminate\\Support\\Facades\\Mail',
      'Notification' => 'Illuminate\\Support\\Facades\\Notification',
      'Password' => 'Illuminate\\Support\\Facades\\Password',
      'Queue' => 'Illuminate\\Support\\Facades\\Queue',
      'Redirect' => 'Illuminate\\Support\\Facades\\Redirect',
      'Redis' => 'Illuminate\\Support\\Facades\\Redis',
      'Request' => 'Illuminate\\Support\\Facades\\Request',
      'Response' => 'Illuminate\\Support\\Facades\\Response',
      'Route' => 'Illuminate\\Support\\Facades\\Route',
      'Schema' => 'Illuminate\\Support\\Facades\\Schema',
      'Session' => 'Illuminate\\Support\\Facades\\Session',
      'Storage' => 'Illuminate\\Support\\Facades\\Storage',
      'Str' => 'Illuminate\\Support\\Str',
      'URL' => 'Illuminate\\Support\\Facades\\URL',
      'Validator' => 'Illuminate\\Support\\Facades\\Validator',
      'View' => 'Illuminate\\Support\\Facades\\View',
      'Image' => 'Intervention\\Image\\Facades\\Image',
      'PDF' => 'Barryvdh\\DomPDF\\Facade',
      'PayPal' => 'Srmklive\\PayPal\\Facades\\PayPal',
      'Socialite' => 'Laravel\\Socialite\\Facades\\Socialite',
    ),
    'debug_blacklist' => 
    array (
      'COOKIE' => 
      array (
      ),
      '_SERVER' => 
      array (
        0 => 'PATHEXT',
        1 => 'PSModulePath',
        2 => 'ProgramFiles(x86)',
        3 => 'TERM_SESSION_ID',
        4 => 'CommonProgramW6432',
        5 => 'ProgramW6432',
        6 => 'USERNAME',
        7 => 'ALLUSERSPROFILE',
        8 => 'USERPROFILE',
        9 => 'OS',
        10 => 'PROCESSOR_REVISION',
        11 => 'PROCESSOR_ARCHITECTURE',
        12 => 'IDEA_INITIAL_DIRECTORY',
        13 => 'NUMBER_OF_PROCESSORS',
        14 => 'ComSpec',
        15 => 'FPS_BROWSER_APP_PROFILE_STRING',
        16 => 'PROCESSOR_LEVEL',
        17 => 'Path',
        18 => 'PUBLIC',
        19 => 'USERDOMAIN_ROAMINGPROFILE',
        20 => 'windir',
        21 => 'DriverData',
        22 => 'HOMEDRIVE',
        23 => 'ProgramFiles',
        24 => 'SESSIONNAME',
        25 => 'LOGONSERVER',
        26 => 'TERMINAL_EMULATOR',
        27 => 'TEMP',
        28 => 'HOMEPATH',
        29 => 'SystemRoot',
        30 => 'TMP',
        31 => 'OneDrive',
        32 => 'CommonProgramFiles(x86)',
        33 => 'USERDOMAIN',
        34 => 'SystemDrive',
        35 => 'COMPUTERNAME',
        36 => 'ProgramData',
        37 => 'LOCALAPPDATA',
        38 => 'FPS_BROWSER_USER_PROFILE_STRING',
        39 => 'APPDATA',
        40 => 'CommonProgramFiles',
        41 => 'PROCESSOR_IDENTIFIER',
        42 => '__INTELLIJ_COMMAND_HISTFILE__',
        43 => 'PHP_SELF',
        44 => 'SCRIPT_NAME',
        45 => 'SCRIPT_FILENAME',
        46 => 'PATH_TRANSLATED',
        47 => 'DOCUMENT_ROOT',
        48 => 'REQUEST_TIME_FLOAT',
        49 => 'REQUEST_TIME',
        50 => 'argv',
        51 => 'argc',
        52 => 'SHELL_VERBOSITY',
        53 => 'APP_NAME',
        54 => 'APP_ENV',
        55 => 'APP_KEY',
        56 => 'APP_DEBUG',
        57 => 'MAILCHIMP_APIKEY',
        58 => 'MAILCHIMP_LIST_ID',
        59 => 'LOG_CHANNEL',
        60 => 'DB_CONNECTION',
        61 => 'DB_HOST',
        62 => 'DB_PORT',
        63 => 'DB_DATABASE',
        64 => 'DB_USERNAME',
        65 => 'DB_PASSWORD',
        66 => 'BROADCAST_DRIVER',
        67 => 'CACHE_DRIVER',
        68 => 'QUEUE_CONNECTION',
        69 => 'SESSION_DRIVER',
        70 => 'SESSION_LIFETIME',
        71 => 'REDIS_HOST',
        72 => 'REDIS_PASSWORD',
        73 => 'REDIS_PORT',
        74 => 'MAIL_DRIVER',
        75 => 'MAIL_HOST',
        76 => 'MAIL_PORT',
        77 => 'MAIL_USERNAME',
        78 => 'MAIL_PASSWORD',
        79 => 'MAIL_ENCRYPTION',
        80 => 'MAIL_FROM_NAME',
        81 => 'AWS_ACCESS_KEY_ID',
        82 => 'AWS_SECRET_ACCESS_KEY',
        83 => 'AWS_DEFAULT_REGION',
        84 => 'AWS_BUCKET',
        85 => 'PUSHER_APP_ID',
        86 => 'PUSHER_APP_KEY',
        87 => 'PUSHER_APP_SECRET',
        88 => 'PUSHER_APP_CLUSTER',
        89 => 'MIX_PUSHER_APP_KEY',
        90 => 'MIX_PUSHER_APP_CLUSTER',
      ),
      '_ENV' => 
      array (
        0 => 'SHELL_VERBOSITY',
        1 => 'APP_NAME',
        2 => 'APP_ENV',
        3 => 'APP_KEY',
        4 => 'APP_DEBUG',
        5 => 'MAILCHIMP_APIKEY',
        6 => 'MAILCHIMP_LIST_ID',
        7 => 'LOG_CHANNEL',
        8 => 'DB_CONNECTION',
        9 => 'DB_HOST',
        10 => 'DB_PORT',
        11 => 'DB_DATABASE',
        12 => 'DB_USERNAME',
        13 => 'DB_PASSWORD',
        14 => 'BROADCAST_DRIVER',
        15 => 'CACHE_DRIVER',
        16 => 'QUEUE_CONNECTION',
        17 => 'SESSION_DRIVER',
        18 => 'SESSION_LIFETIME',
        19 => 'REDIS_HOST',
        20 => 'REDIS_PASSWORD',
        21 => 'REDIS_PORT',
        22 => 'MAIL_DRIVER',
        23 => 'MAIL_HOST',
        24 => 'MAIL_PORT',
        25 => 'MAIL_USERNAME',
        26 => 'MAIL_PASSWORD',
        27 => 'MAIL_ENCRYPTION',
        28 => 'MAIL_FROM_NAME',
        29 => 'AWS_ACCESS_KEY_ID',
        30 => 'AWS_SECRET_ACCESS_KEY',
        31 => 'AWS_DEFAULT_REGION',
        32 => 'AWS_BUCKET',
        33 => 'PUSHER_APP_ID',
        34 => 'PUSHER_APP_KEY',
        35 => 'PUSHER_APP_SECRET',
        36 => 'PUSHER_APP_CLUSTER',
        37 => 'MIX_PUSHER_APP_KEY',
        38 => 'MIX_PUSHER_APP_CLUSTER',
      ),
    ),
  ),
  'auth' => 
  array (
    'defaults' => 
    array (
      'guard' => 'web',
      'passwords' => 'users',
    ),
    'guards' => 
    array (
      'web' => 
      array (
        'driver' => 'session',
        'provider' => 'users',
      ),
      'api' => 
      array (
        'driver' => 'token',
        'provider' => 'users',
        'hash' => false,
      ),
    ),
    'providers' => 
    array (
      'users' => 
      array (
        'driver' => 'eloquent',
        'model' => 'App\\User',
      ),
    ),
    'passwords' => 
    array (
      'users' => 
      array (
        'provider' => 'users',
        'table' => 'password_resets',
        'expire' => 60,
        'throttle' => 60,
      ),
    ),
    'password_timeout' => 10800,
  ),
  'broadcasting' => 
  array (
    'default' => 'log',
    'connections' => 
    array (
      'pusher' => 
      array (
        'driver' => 'pusher',
        'key' => '',
        'secret' => '',
        'app_id' => '',
        'options' => 
        array (
          'cluster' => 'mt1',
          'useTLS' => true,
          'curl_options' => 
          array (
            81 => 0,
            64 => 0,
          ),
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
      ),
      'log' => 
      array (
        'driver' => 'log',
      ),
      'null' => 
      array (
        'driver' => 'null',
      ),
    ),
  ),
  'cache' => 
  array (
    'default' => 'file',
    'stores' => 
    array (
      'apc' => 
      array (
        'driver' => 'apc',
      ),
      'array' => 
      array (
        'driver' => 'array',
        'serialize' => false,
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'cache',
        'connection' => NULL,
      ),
      'file' => 
      array (
        'driver' => 'file',
        'path' => 'C:\\laragon\\www\\Markt2\\storage\\framework/cache/data',
      ),
      'memcached' => 
      array (
        'driver' => 'memcached',
        'persistent_id' => NULL,
        'sasl' => 
        array (
          0 => NULL,
          1 => NULL,
        ),
        'options' => 
        array (
        ),
        'servers' => 
        array (
          0 => 
          array (
            'host' => '127.0.0.1',
            'port' => 11211,
            'weight' => 100,
          ),
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'cache',
      ),
      'dynamodb' => 
      array (
        'driver' => 'dynamodb',
        'key' => '',
        'secret' => '',
        'region' => 'us-east-1',
        'table' => 'cache',
        'endpoint' => NULL,
      ),
    ),
    'prefix' => 'laravel_cache',
  ),
  'cors' => 
  array (
    'paths' => 
    array (
      0 => 'api/*',
    ),
    'allowed_methods' => 
    array (
      0 => '*',
    ),
    'allowed_origins' => 
    array (
      0 => '*',
    ),
    'allowed_origins_patterns' => 
    array (
    ),
    'allowed_headers' => 
    array (
      0 => '*',
    ),
    'exposed_headers' => 
    array (
    ),
    'max_age' => 0,
    'supports_credentials' => false,
  ),
  'database' => 
  array (
    'default' => 'mysql',
    'connections' => 
    array (
      'sqlite' => 
      array (
        'driver' => 'sqlite',
        'url' => NULL,
        'database' => 'asma',
        'prefix' => '',
        'foreign_key_constraints' => true,
      ),
      'mysql' => 
      array (
        'driver' => 'mysql',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'asma',
        'username' => 'root',
        'password' => '',
        'unix_socket' => '',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'prefix_indexes' => true,
        'strict' => true,
        'engine' => NULL,
        'options' => 
        array (
        ),
      ),
      'pgsql' => 
      array (
        'driver' => 'pgsql',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'asma',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
        'schema' => 'public',
        'sslmode' => 'prefer',
      ),
      'sqlsrv' => 
      array (
        'driver' => 'sqlsrv',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'asma',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
      ),
    ),
    'migrations' => 'migrations',
    'redis' => 
    array (
      'client' => 'phpredis',
      'options' => 
      array (
        'cluster' => 'redis',
        'prefix' => 'laravel_database_',
      ),
      'default' => 
      array (
        'url' => NULL,
        'host' => '127.0.0.1',
        'password' => NULL,
        'port' => '6379',
        'database' => '0',
      ),
      'cache' => 
      array (
        'url' => NULL,
        'host' => '127.0.0.1',
        'password' => NULL,
        'port' => '6379',
        'database' => '1',
      ),
    ),
  ),
  'filesystems' => 
  array (
    'default' => 'local',
    'cloud' => 's3',
    'disks' => 
    array (
      'local' => 
      array (
        'driver' => 'local',
        'root' => 'C:\\laragon\\www\\Markt2\\storage\\app',
      ),
      'public' => 
      array (
        'driver' => 'local',
        'root' => 'C:\\laragon\\www\\Markt2\\storage\\app/public',
        'url' => '/storage',
        'visibility' => 'public',
      ),
      's3' => 
      array (
        'driver' => 's3',
        'key' => '',
        'secret' => '',
        'region' => 'us-east-1',
        'bucket' => '',
        'url' => NULL,
        'endpoint' => NULL,
      ),
    ),
    'links' => 
    array (
      'C:\\laragon\\www\\Markt2\\public\\storage' => 'C:\\laragon\\www\\Markt2\\storage\\app/public',
    ),
  ),
  'hashing' => 
  array (
    'driver' => 'bcrypt',
    'bcrypt' => 
    array (
      'rounds' => 10,
    ),
    'argon' => 
    array (
      'memory' => 1024,
      'threads' => 2,
      'time' => 2,
    ),
  ),
  'lfm' => 
  array (
    'use_package_routes' => true,
    'allow_private_folder' => true,
    'private_folder_name' => 'UniSharp\\LaravelFilemanager\\Handlers\\ConfigHandler',
    'allow_shared_folder' => false,
    'shared_folder_name' => 'shares',
    'folder_categories' => 
    array (
      'file' => 
      array (
        'folder_name' => 'files',
        'startup_view' => 'grid',
        'max_size' => 50000,
        'valid_mime' => 
        array (
          0 => 'image/jpeg',
          1 => 'image/pjpeg',
          2 => 'image/png',
          3 => 'image/gif',
          4 => 'image/svg+xml',
        ),
      ),
      'image' => 
      array (
        'folder_name' => 'photos',
        'startup_view' => 'list',
        'max_size' => 50000,
        'valid_mime' => 
        array (
          0 => 'image/jpeg',
          1 => 'image/pjpeg',
          2 => 'image/png',
          3 => 'image/gif',
          4 => 'image/svg+xml',
          5 => 'application/pdf',
          6 => 'text/plain',
        ),
      ),
    ),
    'paginator' => 
    array (
      'perPage' => 30,
    ),
    'disk' => 'public',
    'rename_file' => false,
    'alphanumeric_filename' => false,
    'alphanumeric_directory' => false,
    'should_validate_size' => false,
    'should_validate_mime' => false,
    'over_write_on_duplicate' => false,
    'should_create_thumbnails' => true,
    'thumb_folder_name' => 'thumbs',
    'raster_mimetypes' => 
    array (
      0 => 'image/jpeg',
      1 => 'image/pjpeg',
      2 => 'image/png',
    ),
    'thumb_img_width' => 200,
    'thumb_img_height' => 200,
    'file_type_array' => 
    array (
      'pdf' => 'Adobe Acrobat',
      'doc' => 'Microsoft Word',
      'docx' => 'Microsoft Word',
      'xls' => 'Microsoft Excel',
      'xlsx' => 'Microsoft Excel',
      'zip' => 'Archive',
      'gif' => 'GIF Image',
      'jpg' => 'JPEG Image',
      'jpeg' => 'JPEG Image',
      'png' => 'PNG Image',
      'ppt' => 'Microsoft PowerPoint',
      'pptx' => 'Microsoft PowerPoint',
    ),
    'php_ini_overrides' => 
    array (
      'memory_limit' => '256M',
    ),
  ),
  'logging' => 
  array (
    'default' => 'stack',
    'channels' => 
    array (
      'stack' => 
      array (
        'driver' => 'stack',
        'channels' => 
        array (
          0 => 'single',
        ),
        'ignore_exceptions' => false,
      ),
      'single' => 
      array (
        'driver' => 'single',
        'path' => 'C:\\laragon\\www\\Markt2\\storage\\logs/laravel.log',
        'level' => 'debug',
      ),
      'daily' => 
      array (
        'driver' => 'daily',
        'path' => 'C:\\laragon\\www\\Markt2\\storage\\logs/laravel.log',
        'level' => 'debug',
        'days' => 14,
      ),
      'slack' => 
      array (
        'driver' => 'slack',
        'url' => NULL,
        'username' => 'Laravel Log',
        'emoji' => ':boom:',
        'level' => 'critical',
      ),
      'papertrail' => 
      array (
        'driver' => 'monolog',
        'level' => 'debug',
        'handler' => 'Monolog\\Handler\\SyslogUdpHandler',
        'handler_with' => 
        array (
          'host' => NULL,
          'port' => NULL,
        ),
      ),
      'stderr' => 
      array (
        'driver' => 'monolog',
        'handler' => 'Monolog\\Handler\\StreamHandler',
        'formatter' => NULL,
        'with' => 
        array (
          'stream' => 'php://stderr',
        ),
      ),
      'syslog' => 
      array (
        'driver' => 'syslog',
        'level' => 'debug',
      ),
      'errorlog' => 
      array (
        'driver' => 'errorlog',
        'level' => 'debug',
      ),
      'null' => 
      array (
        'driver' => 'monolog',
        'handler' => 'Monolog\\Handler\\NullHandler',
      ),
      'emergency' => 
      array (
        'path' => 'C:\\laragon\\www\\Markt2\\storage\\logs/laravel.log',
      ),
    ),
  ),
  'mail' => 
  array (
    'default' => 'smtp',
    'mailers' => 
    array (
      'smtp' => 
      array (
        'transport' => 'smtp',
        'host' => 'smtp.gmail.com',
        'port' => '587',
        'encryption' => 'tls',
        'username' => 'zamanjaved527@gmail.com',
        'password' => 'jjujehciqzftgjtb',
        'timeout' => NULL,
        'auth_mode' => NULL,
      ),
      'ses' => 
      array (
        'transport' => 'ses',
      ),
      'mailgun' => 
      array (
        'transport' => 'mailgun',
      ),
      'postmark' => 
      array (
        'transport' => 'postmark',
      ),
      'sendmail' => 
      array (
        'transport' => 'sendmail',
        'path' => '/usr/sbin/sendmail -bs',
      ),
      'log' => 
      array (
        'transport' => 'log',
        'channel' => NULL,
      ),
      'array' => 
      array (
        'transport' => 'array',
      ),
    ),
    'from' => 
    array (
      'address' => 'hello@example.com',
      'name' => 'AsmaMarkt',
    ),
    'markdown' => 
    array (
      'theme' => 'default',
      'paths' => 
      array (
        0 => 'C:\\laragon\\www\\Markt2\\resources\\views/vendor/mail',
      ),
    ),
  ),
  'newsletter' => 
  array (
    'driver' => 'api',
    'apiKey' => '171c586c381a694976c78aabfe80d9ec-us12',
    'defaultListName' => 'subscribers',
    'lists' => 
    array (
      'subscribers' => 
      array (
        'id' => '',
      ),
    ),
    'ssl' => true,
  ),
  'paypal' => 
  array (
    'mode' => 'sandbox',
    'sandbox' => 
    array (
      'username' => '',
      'password' => '',
      'secret' => '',
      'certificate' => '',
      'app_id' => 'APP-80W284485P519543T',
    ),
    'live' => 
    array (
      'username' => '',
      'password' => '',
      'secret' => '',
      'certificate' => '',
      'app_id' => '',
    ),
    'payment_action' => 'Sale',
    'currency' => 'USD',
    'billing_type' => 'MerchantInitiatedBilling',
    'notify_url' => '',
    'locale' => '',
    'validate_ssl' => true,
  ),
  'queue' => 
  array (
    'default' => 'sync',
    'connections' => 
    array (
      'sync' => 
      array (
        'driver' => 'sync',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'jobs',
        'queue' => 'default',
        'retry_after' => 90,
      ),
      'beanstalkd' => 
      array (
        'driver' => 'beanstalkd',
        'host' => 'localhost',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => 0,
      ),
      'sqs' => 
      array (
        'driver' => 'sqs',
        'key' => '',
        'secret' => '',
        'prefix' => 'https://sqs.us-east-1.amazonaws.com/your-account-id',
        'queue' => 'your-queue-name',
        'suffix' => NULL,
        'region' => 'us-east-1',
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => NULL,
      ),
    ),
    'failed' => 
    array (
      'driver' => 'database',
      'database' => 'mysql',
      'table' => 'failed_jobs',
    ),
  ),
  'services' => 
  array (
    'mailgun' => 
    array (
      'domain' => NULL,
      'secret' => NULL,
      'endpoint' => 'api.mailgun.net',
    ),
    'postmark' => 
    array (
      'token' => NULL,
    ),
    'ses' => 
    array (
      'key' => '',
      'secret' => '',
      'region' => 'us-east-1',
    ),
    'github' => 
    array (
      'client_id' => '24fbd0edd46019058da7',
      'client_secret' => '4500e6ab7a9bb70608600fbdee37969276bb0685',
      'redirect' => 'http://localhost:8000/login/github/callback',
    ),
    'google' => 
    array (
      'client_id' => '122886334250-fsfd8ugugkr0hjrkakukbgnnruomjn95.apps.googleusercontent.com',
      'client_secret' => 'eyuwbzXGBgbebzPXNiqSOods',
      'redirect' => 'http://localhost:8000/login/google/callback',
    ),
    'facebook' => 
    array (
      'client_id' => '1494792524037846',
      'client_secret' => '1bf13c2faf680f4ae2b97bdafa92c7d2',
      'redirect' => 'http://localhost:8000/login/facebook/callback',
    ),
  ),
  'session' => 
  array (
    'driver' => 'file',
    'lifetime' => '120',
    'expire_on_close' => false,
    'encrypt' => false,
    'files' => 'C:\\laragon\\www\\Markt2\\storage\\framework/sessions',
    'connection' => NULL,
    'table' => 'sessions',
    'store' => NULL,
    'lottery' => 
    array (
      0 => 2,
      1 => 100,
    ),
    'cookie' => 'laravel_session',
    'path' => '/',
    'domain' => NULL,
    'secure' => NULL,
    'http_only' => true,
    'same_site' => 'lax',
  ),
  'view' => 
  array (
    'paths' => 
    array (
      0 => 'C:\\laragon\\www\\Markt2\\resources\\views',
    ),
    'compiled' => 'C:\\laragon\\www\\Markt2\\storage\\framework\\views',
  ),
  'dompdf' => 
  array (
    'show_warnings' => false,
    'orientation' => 'portrait',
    'defines' => 
    array (
      'font_dir' => 'C:\\laragon\\www\\Markt2\\storage\\fonts/',
      'font_cache' => 'C:\\laragon\\www\\Markt2\\storage\\fonts/',
      'temp_dir' => 'C:\\Users\\ZAMANJ~1\\AppData\\Local\\Temp',
      'chroot' => 'C:\\laragon\\www\\Markt2',
      'enable_font_subsetting' => false,
      'pdf_backend' => 'CPDF',
      'default_media_type' => 'screen',
      'default_paper_size' => 'a4',
      'default_font' => 'serif',
      'dpi' => 96,
      'enable_php' => false,
      'enable_javascript' => true,
      'enable_remote' => true,
      'font_height_ratio' => 1.1,
      'enable_html5_parser' => false,
    ),
  ),
  'flare' => 
  array (
    'key' => NULL,
    'reporting' => 
    array (
      'anonymize_ips' => true,
      'collect_git_information' => false,
      'report_queries' => true,
      'maximum_number_of_collected_queries' => 200,
      'report_query_bindings' => true,
      'report_view_data' => true,
      'grouping_type' => NULL,
      'report_logs' => true,
      'maximum_number_of_collected_logs' => 200,
      'censor_request_body_fields' => 
      array (
        0 => 'password',
      ),
    ),
    'send_logs_as_events' => true,
    'censor_request_body_fields' => 
    array (
      0 => 'password',
    ),
  ),
  'ignition' => 
  array (
    'editor' => 'phpstorm',
    'theme' => 'light',
    'enable_share_button' => true,
    'register_commands' => false,
    'ignored_solution_providers' => 
    array (
      0 => 'Facade\\Ignition\\SolutionProviders\\MissingPackageSolutionProvider',
    ),
    'enable_runnable_solutions' => NULL,
    'remote_sites_path' => '',
    'local_sites_path' => '',
    'housekeeping_endpoint_prefix' => '_ignition',
  ),
  'image' => 
  array (
    'driver' => 'gd',
  ),
  'lfm-config' => 
  array (
    'use_package_routes' => true,
    'allow_private_folder' => true,
    'private_folder_name' => 'UniSharp\\LaravelFilemanager\\Handlers\\ConfigHandler',
    'allow_shared_folder' => true,
    'shared_folder_name' => 'shares',
    'folder_categories' => 
    array (
      'file' => 
      array (
        'folder_name' => 'files',
        'startup_view' => 'list',
        'max_size' => 50000,
        'thumb' => true,
        'thumb_width' => 80,
        'thumb_height' => 80,
        'valid_mime' => 
        array (
          0 => 'image/jpeg',
          1 => 'image/pjpeg',
          2 => 'image/png',
          3 => 'image/gif',
          4 => 'application/pdf',
          5 => 'text/plain',
        ),
      ),
      'image' => 
      array (
        'folder_name' => 'photos',
        'startup_view' => 'grid',
        'max_size' => 50000,
        'thumb' => true,
        'thumb_width' => 80,
        'thumb_height' => 80,
        'valid_mime' => 
        array (
          0 => 'image/jpeg',
          1 => 'image/pjpeg',
          2 => 'image/png',
          3 => 'image/gif',
        ),
      ),
    ),
    'paginator' => 
    array (
      'perPage' => 30,
    ),
    'disk' => 'public',
    'rename_file' => false,
    'rename_duplicates' => false,
    'alphanumeric_filename' => false,
    'alphanumeric_directory' => false,
    'should_validate_size' => false,
    'should_validate_mime' => true,
    'over_write_on_duplicate' => false,
    'disallowed_mimetypes' => 
    array (
      0 => 'text/x-php',
      1 => 'text/html',
      2 => 'text/plain',
    ),
    'item_columns' => 
    array (
      0 => 'name',
      1 => 'url',
      2 => 'time',
      3 => 'icon',
      4 => 'is_file',
      5 => 'is_image',
      6 => 'thumb_url',
    ),
    'should_create_thumbnails' => true,
    'thumb_folder_name' => 'thumbs',
    'raster_mimetypes' => 
    array (
      0 => 'image/jpeg',
      1 => 'image/pjpeg',
      2 => 'image/png',
    ),
    'thumb_img_width' => 200,
    'thumb_img_height' => 200,
    'file_type_array' => 
    array (
      'pdf' => 'Adobe Acrobat',
      'doc' => 'Microsoft Word',
      'docx' => 'Microsoft Word',
      'xls' => 'Microsoft Excel',
      'xlsx' => 'Microsoft Excel',
      'zip' => 'Archive',
      'gif' => 'GIF Image',
      'jpg' => 'JPEG Image',
      'jpeg' => 'JPEG Image',
      'png' => 'PNG Image',
      'ppt' => 'Microsoft PowerPoint',
      'pptx' => 'Microsoft PowerPoint',
    ),
    'php_ini_overrides' => 
    array (
      'memory_limit' => '256M',
    ),
  ),
  'trustedproxy' => 
  array (
    'proxies' => NULL,
    'headers' => 30,
  ),
  'tinker' => 
  array (
    'commands' => 
    array (
    ),
    'alias' => 
    array (
    ),
    'dont_alias' => 
    array (
      0 => 'App\\Nova',
    ),
  ),
);
