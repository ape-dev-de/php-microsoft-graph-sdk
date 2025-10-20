<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Shared
 */
class Shared
{
    /**
     * The identity of the owner of the shared item. Read-only.
     */
    private ?string $owner;

    /**
     * Indicates the scope of how the item is shared. The possible values are: anonymous, organization, or users. Read-only.
     */
    private ?string $scope;

    /**
     * The identity of the user who shared the item. Read-only.
     */
    private ?string $sharedBy;

    /**
     * The UTC date and time when the item was shared. Read-only.
     */
    private ?\DateTimeInterface $sharedDateTime;

    public function getOwner(): ?string
    {
        return $this->owner;
    }

    public function setOwner(?string $owner): self
    {
        $this->owner = $owner;
        return $this;
    }

    public function getScope(): ?string
    {
        return $this->scope;
    }

    public function setScope(?string $scope): self
    {
        $this->scope = $scope;
        return $this;
    }

    public function getSharedBy(): ?string
    {
        return $this->sharedBy;
    }

    public function setSharedBy(?string $sharedBy): self
    {
        $this->sharedBy = $sharedBy;
        return $this;
    }

    public function getSharedDateTime(): ?\DateTimeInterface
    {
        return $this->sharedDateTime;
    }

    public function setSharedDateTime(?\DateTimeInterface $sharedDateTime): self
    {
        $this->sharedDateTime = $sharedDateTime;
        return $this;
    }

}
