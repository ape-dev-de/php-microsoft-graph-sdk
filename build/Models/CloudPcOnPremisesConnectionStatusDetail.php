<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CloudPcOnPremisesConnectionStatusDetail
 */
class CloudPcOnPremisesConnectionStatusDetail
{
    /** The end time of the connection health check. The Timestamp  is shown in ISO 8601 format and Coordinated Universal Time (UTC). For example, midnight UTC on Jan 1, 2014 appears as 2014-01-01T00:00:00Z. Read-Only. */
    public ?\DateTimeInterface $endDateTime = null;

    /** 
     * A list of all checks that have been run on the connection. Read-Only.
     * @var CloudPcOnPremisesConnectionHealthCheck[]
     */
    public array $healthChecks = [];

    /** The start time of the health check. The timestamp is shown in ISO 8601 format and Coordinated Universal Time (UTC). For example, midnight UTC on Jan 1, 2014 appear as 2014-01-01T00:00:00Z. Read-Only. */
    public ?\DateTimeInterface $startDateTime = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['endDateTime'])) {
            $this->endDateTime = is_string($data['endDateTime']) ? new \DateTimeImmutable($data['endDateTime']) : $data['endDateTime'];
        }
        if (isset($data['healthChecks'])) {
            $this->healthChecks = $data['healthChecks'];
        }
        if (isset($data['startDateTime'])) {
            $this->startDateTime = is_string($data['startDateTime']) ? new \DateTimeImmutable($data['startDateTime']) : $data['startDateTime'];
        }
    }
}
