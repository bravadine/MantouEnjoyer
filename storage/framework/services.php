<?php return array (
  'providers' => 
  array (
    0 => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
    1 => 'Illuminate\\Bus\\BusServiceProvider',
    2 => 'Illuminate\\Cache\\CacheServiceProvider',
    3 => 'Illuminate\\Cookie\\CookieServiceProvider',
    4 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
    5 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
    6 => 'Illuminate\\Hashing\\HashServiceProvider',
    7 => 'Illuminate\\Pagination\\PaginationServiceProvider',
    8 => 'Illuminate\\Pipeline\\PipelineServiceProvider',
    9 => 'Illuminate\\Queue\\QueueServiceProvider',
    10 => 'Illuminate\\Redis\\RedisServiceProvider',
    11 => 'Illuminate\\Session\\SessionServiceProvider',
    12 => 'Illuminate\\View\\ViewServiceProvider',
    13 => 'Laravel\\Tinker\\TinkerServiceProvider',
    14 => 'Igniter\\Flame\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    15 => 'Igniter\\Flame\\Database\\DatabaseServiceProvider',
    16 => 'Igniter\\Flame\\Filesystem\\FilesystemServiceProvider',
    17 => 'Igniter\\Flame\\Flash\\FlashServiceProvider',
    18 => 'Igniter\\Flame\\Html\\HtmlServiceProvider',
    19 => 'Igniter\\Flame\\Mail\\MailServiceProvider',
    20 => 'Igniter\\Flame\\Scaffold\\ScaffoldServiceProvider',
    21 => 'Igniter\\Flame\\Setting\\SettingServiceProvider',
    22 => 'Igniter\\Flame\\Html\\UrlServiceProvider',
    23 => 'Igniter\\Flame\\Validation\\ValidationServiceProvider',
    24 => 'System\\ServiceProvider',
  ),
  'eager' => 
  array (
    0 => 'Illuminate\\Cookie\\CookieServiceProvider',
    1 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
    2 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
    3 => 'Illuminate\\Pagination\\PaginationServiceProvider',
    4 => 'Illuminate\\Session\\SessionServiceProvider',
    5 => 'Illuminate\\View\\ViewServiceProvider',
    6 => 'Igniter\\Flame\\Database\\DatabaseServiceProvider',
    7 => 'Igniter\\Flame\\Filesystem\\FilesystemServiceProvider',
    8 => 'Igniter\\Flame\\Flash\\FlashServiceProvider',
    9 => 'Igniter\\Flame\\Html\\HtmlServiceProvider',
    10 => 'Igniter\\Flame\\Scaffold\\ScaffoldServiceProvider',
    11 => 'Igniter\\Flame\\Setting\\SettingServiceProvider',
    12 => 'Igniter\\Flame\\Html\\UrlServiceProvider',
    13 => 'System\\ServiceProvider',
  ),
  'deferred' => 
  array (
    'Illuminate\\Broadcasting\\BroadcastManager' => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
    'Illuminate\\Contracts\\Broadcasting\\Factory' => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
    'Illuminate\\Contracts\\Broadcasting\\Broadcaster' => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
    'Illuminate\\Bus\\Dispatcher' => 'Illuminate\\Bus\\BusServiceProvider',
    'Illuminate\\Contracts\\Bus\\Dispatcher' => 'Illuminate\\Bus\\BusServiceProvider',
    'Illuminate\\Contracts\\Bus\\QueueingDispatcher' => 'Illuminate\\Bus\\BusServiceProvider',
    'Illuminate\\Bus\\BatchRepository' => 'Illuminate\\Bus\\BusServiceProvider',
    'cache' => 'Illuminate\\Cache\\CacheServiceProvider',
    'cache.store' => 'Illuminate\\Cache\\CacheServiceProvider',
    'cache.psr6' => 'Illuminate\\Cache\\CacheServiceProvider',
    'memcached.connector' => 'Illuminate\\Cache\\CacheServiceProvider',
    'Illuminate\\Cache\\RateLimiter' => 'Illuminate\\Cache\\CacheServiceProvider',
    'hash' => 'Illuminate\\Hashing\\HashServiceProvider',
    'hash.driver' => 'Illuminate\\Hashing\\HashServiceProvider',
    'Illuminate\\Contracts\\Pipeline\\Hub' => 'Illuminate\\Pipeline\\PipelineServiceProvider',
    'queue' => 'Illuminate\\Queue\\QueueServiceProvider',
    'queue.connection' => 'Illuminate\\Queue\\QueueServiceProvider',
    'queue.failer' => 'Illuminate\\Queue\\QueueServiceProvider',
    'queue.listener' => 'Illuminate\\Queue\\QueueServiceProvider',
    'queue.worker' => 'Illuminate\\Queue\\QueueServiceProvider',
    'redis' => 'Illuminate\\Redis\\RedisServiceProvider',
    'redis.connection' => 'Illuminate\\Redis\\RedisServiceProvider',
    'command.tinker' => 'Laravel\\Tinker\\TinkerServiceProvider',
    'command.cache.clear' => 'Igniter\\Flame\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.cache.forget' => 'Igniter\\Flame\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.clear-compiled' => 'Igniter\\Flame\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.config.cache' => 'Igniter\\Flame\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.config.clear' => 'Igniter\\Flame\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Database\\Console\\DbCommand' => 'Igniter\\Flame\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.db.wipe' => 'Igniter\\Flame\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.environment' => 'Igniter\\Flame\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.event.cache' => 'Igniter\\Flame\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.event.clear' => 'Igniter\\Flame\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.event.list' => 'Igniter\\Flame\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.key.generate' => 'Igniter\\Flame\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.optimize' => 'Igniter\\Flame\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.optimize.clear' => 'Igniter\\Flame\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.package.discover' => 'Igniter\\Flame\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.queue.clear' => 'Igniter\\Flame\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.queue.failed' => 'Igniter\\Flame\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.queue.flush' => 'Igniter\\Flame\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.queue.forget' => 'Igniter\\Flame\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.queue.listen' => 'Igniter\\Flame\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.queue.prune-batches' => 'Igniter\\Flame\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.queue.prune-failed-jobs' => 'Igniter\\Flame\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.queue.restart' => 'Igniter\\Flame\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.queue.retry' => 'Igniter\\Flame\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.queue.retry-batch' => 'Igniter\\Flame\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.queue.work' => 'Igniter\\Flame\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.route.cache' => 'Igniter\\Flame\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.route.clear' => 'Igniter\\Flame\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.route.list' => 'Igniter\\Flame\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.seed' => 'Igniter\\Flame\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Console\\Scheduling\\ScheduleFinishCommand' => 'Igniter\\Flame\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Console\\Scheduling\\ScheduleListCommand' => 'Igniter\\Flame\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Console\\Scheduling\\ScheduleRunCommand' => 'Igniter\\Flame\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Console\\Scheduling\\ScheduleTestCommand' => 'Igniter\\Flame\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Console\\Scheduling\\ScheduleWorkCommand' => 'Igniter\\Flame\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.view.cache' => 'Igniter\\Flame\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.view.clear' => 'Igniter\\Flame\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.serve' => 'Igniter\\Flame\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.test.make' => 'Igniter\\Flame\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.vendor.publish' => 'Igniter\\Flame\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'migrator' => 'Igniter\\Flame\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'migration.repository' => 'Igniter\\Flame\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'migration.creator' => 'Igniter\\Flame\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'composer' => 'Igniter\\Flame\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'mail.manager' => 'Igniter\\Flame\\Mail\\MailServiceProvider',
    'mailer' => 'Igniter\\Flame\\Mail\\MailServiceProvider',
    'Illuminate\\Mail\\Markdown' => 'Igniter\\Flame\\Mail\\MailServiceProvider',
    'validator' => 'Igniter\\Flame\\Validation\\ValidationServiceProvider',
    'validation.presence' => 'Igniter\\Flame\\Validation\\ValidationServiceProvider',
  ),
  'when' => 
  array (
    'Illuminate\\Broadcasting\\BroadcastServiceProvider' => 
    array (
    ),
    'Illuminate\\Bus\\BusServiceProvider' => 
    array (
    ),
    'Illuminate\\Cache\\CacheServiceProvider' => 
    array (
    ),
    'Illuminate\\Hashing\\HashServiceProvider' => 
    array (
    ),
    'Illuminate\\Pipeline\\PipelineServiceProvider' => 
    array (
    ),
    'Illuminate\\Queue\\QueueServiceProvider' => 
    array (
    ),
    'Illuminate\\Redis\\RedisServiceProvider' => 
    array (
    ),
    'Laravel\\Tinker\\TinkerServiceProvider' => 
    array (
    ),
    'Igniter\\Flame\\Foundation\\Providers\\ConsoleSupportServiceProvider' => 
    array (
    ),
    'Igniter\\Flame\\Mail\\MailServiceProvider' => 
    array (
    ),
    'Igniter\\Flame\\Validation\\ValidationServiceProvider' => 
    array (
    ),
  ),
);