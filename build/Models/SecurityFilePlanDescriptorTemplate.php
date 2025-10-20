<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityFilePlanDescriptorTemplate
 */
class SecurityFilePlanDescriptorTemplate
{
    /**
     * Represents the user who created the filePlanDescriptorTemplate column.
     */
    private ?string $createdBy;

    /**
     * Represents the date and time in which the filePlanDescriptorTemplate is created.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * Unique string that defines a filePlanDescriptorTemplate name.
     */
    private ?string $displayName;

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

}
