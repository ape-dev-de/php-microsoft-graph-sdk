<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CloudPcOnPremisesConnectionStatusDetail
 */
class CloudPcOnPremisesConnectionStatusDetail
{
    /**
     * The end time of the connection health check. The Timestamp  is shown in ISO 8601 format and Coordinated Universal Time (UTC). For example, midnight UTC on Jan 1, 2014 appears as 2014-01-01T00:00:00Z. Read-Only.
     */
    private ?\DateTimeInterface $endDateTime;

    /**
     * A list of all checks that have been run on the connection. Read-Only.
     */
    private array $healthChecks = [];

    /**
     * The start time of the health check. The timestamp is shown in ISO 8601 format and Coordinated Universal Time (UTC). For example, midnight UTC on Jan 1, 2014 appear as 2014-01-01T00:00:00Z. Read-Only.
     */
    private ?\DateTimeInterface $startDateTime;

    public function getEndDateTime(): ?\DateTimeInterface
    {
        return $this->endDateTime;
    }

    public function setEndDateTime(?\DateTimeInterface $endDateTime): self
    {
        $this->endDateTime = $endDateTime;
        return $this;
    }

    public function getHealthChecks(): array
    {
        return $this->healthChecks;
    }

    public function setHealthChecks(array $healthChecks): self
    {
        $this->healthChecks = $healthChecks;
        return $this;
    }

    public function getStartDateTime(): ?\DateTimeInterface
    {
        return $this->startDateTime;
    }

    public function setStartDateTime(?\DateTimeInterface $startDateTime): self
    {
        $this->startDateTime = $startDateTime;
        return $this;
    }

}
