<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RestoreArtifactsBulkRequestBase
 */
class RestoreArtifactsBulkRequestBase
{
    /**
     * The identity of the person who created the bulk request.
     */
    private ?string $createdBy;

    /**
     * The time when the bulk request was created.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * Indicates the restoration destination. The possible values are: new, inPlace, unknownFutureValue.
     */
    private ?string $destinationType;

    /**
     * Name of the addition request.
     */
    private ?string $displayName;

    /**
     * Error details are populated for resource resolution failures.
     */
    private ?string $error;

    /**
     * Identity of the person who last modified this entity.
     */
    private ?string $lastModifiedBy;

    /**
     * Timestamp when this entity was last modified.
     */
    private ?\DateTimeInterface $lastModifiedDateTime;

    /**
     * The start and end date and time of the protection period.
     */
    private ?string $protectionTimePeriod;

    /**
     * Indicates which protection units to restore. This property isn't implemented yet. Future value; don't use.
     */
    private ?string $protectionUnitIds;

    /**
     * Indicates which restore point to return. The possible values are: oldest, latest, unknownFutureValue.
     */
    private ?string $restorePointPreference;

    /**
     */
    private ?string $status;

    /**
     * The type of the restore point. The possible values are: none, fastRestore, unknownFutureValue.
     */
    private ?string $tags;

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

    public function getDestinationType(): ?string
    {
        return $this->destinationType;
    }

    public function setDestinationType(?string $destinationType): self
    {
        $this->destinationType = $destinationType;
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

    public function getError(): ?string
    {
        return $this->error;
    }

    public function setError(?string $error): self
    {
        $this->error = $error;
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

    public function getProtectionTimePeriod(): ?string
    {
        return $this->protectionTimePeriod;
    }

    public function setProtectionTimePeriod(?string $protectionTimePeriod): self
    {
        $this->protectionTimePeriod = $protectionTimePeriod;
        return $this;
    }

    public function getProtectionUnitIds(): ?string
    {
        return $this->protectionUnitIds;
    }

    public function setProtectionUnitIds(?string $protectionUnitIds): self
    {
        $this->protectionUnitIds = $protectionUnitIds;
        return $this;
    }

    public function getRestorePointPreference(): ?string
    {
        return $this->restorePointPreference;
    }

    public function setRestorePointPreference(?string $restorePointPreference): self
    {
        $this->restorePointPreference = $restorePointPreference;
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

    public function getTags(): ?string
    {
        return $this->tags;
    }

    public function setTags(?string $tags): self
    {
        $this->tags = $tags;
        return $this;
    }

}
