<?php

declare(strict_types=1);

return [
    // Source filesystem
    'source' => env('FILESYSTEM_DISK', 'local'),

    // Source filesystem path prefix
    'source_path_prefix' => '/',

    // Cache filesystem
    'cache' => env('FILESYSTEM_DISK', 'local'),

    // Cache filesystem path prefix
    'cache_path_prefix' => '/public/cache',

    // Temporary directory where cache EXIF data should be stored (defaults to sys_get_temp_dir())
    // 'temp_dir' => '',

    // Whether to group cached images in folders
    'group_cache_in_folders' => true,

    // Whether to include file extension in cache filename. Default `false`.
    'cache_with_file_extensions' => true,

    // Custom cache path callable
    // 'cache_path_callable' => '',

    // Watermarks filesystem
    // 'watermarks' => '',

    // Watermarks filesystem path prefix
    // 'watermarks_path_prefix' => '',

    // Image driver (gd or imagick)
    'driver' => 'imagick',

    // Image size limit
    // 'max_image_size' => '',

    // Default image manipulations
    'defaults' => [
        'fm' => 'webp',
    ],

    // Preset image manipulations
    'presets' => [],

    // Base URL of the images
    // 'base_url' => '',

    // Response factory
    // 'response' => '',
];
