<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CloudPcOnPremisesConnectionStatusDetail
 */
class CloudPcOnPremisesConnectionStatusDetail
{
    public function __construct(
        /** The end time of the connection health check. The Timestamp  is shown in ISO 8601 format and Coordinated Universal Time (UTC). For example, midnight UTC on Jan 1, 2014 appears as 2014-01-01T00:00:00Z. Read-Only. */
        public ?\DateTimeInterface $endDateTime = null,
        /** A list of all checks that have been run on the connection. Read-Only. */
        public array $healthChecks = [],
        /** The start time of the health check. The timestamp is shown in ISO 8601 format and Coordinated Universal Time (UTC). For example, midnight UTC on Jan 1, 2014 appear as 2014-01-01T00:00:00Z. Read-Only. */
        public ?\DateTimeInterface $startDateTime = null
    ) {}
}
