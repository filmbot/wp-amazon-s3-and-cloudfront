<?php

namespace DeliciousBrains\WP_Offload_S3\Aws3\Aws\S3\UseArnRegion;

interface ConfigurationInterface
{
    /**
     * Returns whether or not to use the ARN region if it differs from client
     *
     * @return bool
     */
    public function isUseArnRegion();
    /**
     * Returns the configuration as an associative array
     *
     * @return array
     */
    public function toArray();
}
