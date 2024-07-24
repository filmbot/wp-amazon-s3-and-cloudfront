<?php

namespace DeliciousBrains\WP_Offload_S3\Aws3\Aws\Exception;

use DeliciousBrains\WP_Offload_S3\Aws3\Aws\HasMonitoringEventsTrait;
use DeliciousBrains\WP_Offload_S3\Aws3\Aws\MonitoringEventsInterface;
class InvalidJsonException extends \RuntimeException implements MonitoringEventsInterface
{
    use HasMonitoringEventsTrait;
}
