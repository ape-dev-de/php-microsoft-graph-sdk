<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * LongRunningOperation
 */
class LongRunningOperation
{
    /**
     * The start time of the operation. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * The time of the last action in the operation. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $lastActionDateTime;

    /**
     * URI of the resource that the operation is performed on.
     */
    private ?string $resourceLocation;

    /**
     * The status of the operation. The possible values are: notStarted, running, succeeded, failed, unknownFutureValue.
     */
    private ?string $status;

    /**
     * The status of a long-running operation.
     */
    private ?string $statusDetail;

    public function getCreatedDateTime(): ?\DateTimeInterface
    {
        return $this->createdDateTime;
    }

    public function setCreatedDateTime(?\DateTimeInterface $createdDateTime): self
    {
        $this->createdDateTime = $createdDateTime;
        return $this;
    }

    public function getLastActionDateTime(): ?\DateTimeInterface
    {
        return $this->lastActionDateTime;
    }

    public function setLastActionDateTime(?\DateTimeInterface $lastActionDateTime): self
    {
        $this->lastActionDateTime = $lastActionDateTime;
        return $this;
    }

    public function getResourceLocation(): ?string
    {
        return $this->resourceLocation;
    }

    public function setResourceLocation(?string $resourceLocation): self
    {
        $this->resourceLocation = $resourceLocation;
        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    public function getStatusDetail(): ?string
    {
        return $this->statusDetail;
    }

    public function setStatusDetail(?string $statusDetail): self
    {
        $this->statusDetail = $statusDetail;
        return $this;
    }

}
