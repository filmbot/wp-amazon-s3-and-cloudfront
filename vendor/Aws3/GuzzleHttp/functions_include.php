<?php

namespace DeliciousBrains\WP_Offload_S3\Aws3;

// Don't redefine the functions if included multiple times.
if (!\function_exists('DeliciousBrains\\WP_Offload_S3\\Aws3\\GuzzleHttp\\describe_type')) {
    require __DIR__ . '/functions.php';
}
