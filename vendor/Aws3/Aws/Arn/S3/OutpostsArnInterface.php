<?php

namespace DeliciousBrains\WP_Offload_S3\Aws3\Aws\Arn\S3;

use DeliciousBrains\WP_Offload_S3\Aws3\Aws\Arn\ArnInterface;
/**
 * @internal
 */
interface OutpostsArnInterface extends ArnInterface
{
    public function getOutpostId();
}
