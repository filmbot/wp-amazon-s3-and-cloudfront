<?php

namespace DeliciousBrains\WP_Offload_S3\Aws3\Aws;

interface ConfigurationProviderInterface
{
    /**
     * Create a default config provider
     *
     * @param array $config
     * @return callable
     */
    public static function defaultProvider(array $config = []);
}
