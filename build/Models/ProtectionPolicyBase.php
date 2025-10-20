<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ProtectionPolicyBase
 */
class ProtectionPolicyBase
{
    /**
     * The identity of person who created the policy.
     */
    private ?string $createdBy;

    /**
     * The time of creation of the policy.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * The name of the policy to be created.
     */
    private ?string $displayName;

    /**
     * The identity of the person who last modified the policy.
     */
    private ?string $lastModifiedBy;

    /**
     * The timestamp of the last modification of the policy.
     */
    private ?\DateTimeInterface $lastModifiedDateTime;

    /**
     * Contains the retention setting details for the policy.
     */
    private array $retentionSettings = [];

    /**
     * The aggregated status of the protection units associated with the policy. The possible values are: inactive, activeWithErrors, updating, active, unknownFutureValue.
     */
    private ?string $status;

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

    public function getLastModifiedBy(): ?string
    {
        return $this->lastModifiedBy;
    }

    public function setLastModifiedBy(?string $lastModifiedBy): self
    {
        $this->lastModifiedBy = $lastModifiedBy;
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

    public function getRetentionSettings(): array
    {
        return $this->retentionSettings;
    }

    public function setRetentionSettings(array $retentionSettings): self
    {
        $this->retentionSettings = $retentionSettings;
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
