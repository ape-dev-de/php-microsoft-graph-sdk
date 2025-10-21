<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DelegatedAdminAccessAssignment
 */
class DelegatedAdminAccessAssignment
{
    /**
     */
    private ?string $accessContainer;

    /**
     */
    private ?string $accessDetails;

    /**
     * The date and time in ISO 8601 format and in UTC time when the access assignment was created. Read-only.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * The date and time in ISO 8601 and in UTC time when this access assignment was last modified. Read-only.
     */
    private ?\DateTimeInterface $lastModifiedDateTime;

    /**
     * The status of the access assignment. Read-only. The possible values are: pending, active, deleting, deleted, error, unknownFutureValue.
     */
    private ?string $status;


    public function getAccessContainer(): ?string
    {
        return $this->accessContainer;
    }

    public function setAccessContainer(?string $accessContainer): self
    {
        $this->accessContainer = $accessContainer;
        return $this;
    }

    public function getAccessDetails(): ?string
    {
        return $this->accessDetails;
    }

    public function setAccessDetails(?string $accessDetails): self
    {
        $this->accessDetails = $accessDetails;
        return $this;
    }

    public function getCreatedDateTime(): ?\DateTimeInterface
    {
        return $this->createdDateTime;
    }

    public function setCreatedDateTime(?\DateTimeInterface $createdDateTime): self
    {
        $this->createdDateTime = $createdDateTime;
        return $this;
    }

    public function getLastModifiedDateTime(): ?\DateTimeInterface
    {
        return $this->lastModifiedDateTime;
    }

    public function setLastModifiedDateTime(?\DateTimeInterface $lastModifiedDateTime): self
    {
        $this->lastModifiedDateTime = $lastModifiedDateTime;
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

}
