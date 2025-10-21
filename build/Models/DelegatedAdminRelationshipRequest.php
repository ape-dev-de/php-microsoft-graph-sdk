<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DelegatedAdminRelationshipRequest
 */
class DelegatedAdminRelationshipRequest
{
    /**
     */
    private ?string $action;

    /**
     * The date and time in ISO 8601 format and in UTC time when the relationship request was created. Read-only.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * The date and time in ISO 8601 format and UTC time when this relationship request was last modified. Read-only.
     */
    private ?\DateTimeInterface $lastModifiedDateTime;

    /**
     * The status of the request. Read-only. The possible values are: created, pending, succeeded, failed, unknownFutureValue.
     */
    private ?string $status;


    public function getAction(): ?string
    {
        return $this->action;
    }

    public function setAction(?string $action): self
    {
        $this->action = $action;
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
