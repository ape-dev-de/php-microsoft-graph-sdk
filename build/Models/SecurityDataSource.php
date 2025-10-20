<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityDataSource
 */
class SecurityDataSource
{
    /**
     * The user who created the dataSource.
     */
    private ?string $createdBy;

    /**
     * The date and time the dataSource was created.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * The display name of the dataSource and is the name of the SharePoint site.
     */
    private ?string $displayName;

    /**
     * The hold status of the dataSource.The possible values are: notApplied, applied, applying, removing, partial
     */
    private ?string $holdStatus;

    public function getCreatedBy(): ?string
    {
        return $this->createdBy;
    }

    public function setCreatedBy(?string $createdBy): self
    {
        $this->createdBy = $createdBy;
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

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getHoldStatus(): ?string
    {
        return $this->holdStatus;
    }

    public function setHoldStatus(?string $holdStatus): self
    {
        $this->holdStatus = $holdStatus;
        return $this;
    }

}
