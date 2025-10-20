<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CloudPcUserSetting
 */
class CloudPcUserSetting
{
    /**
     * The date and time when the setting was created. The timestamp type represents the date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * The setting name displayed in the user interface.
     */
    private ?string $displayName;

    /**
     * The date and time when the setting was last modified. The timestamp type represents the date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $lastModifiedDateTime;

    /**
     * Indicates whether the local admin option is enabled. The default value is false. To enable the local admin option, change the setting to true. If the local admin option is enabled, the end user can be an admin of the Cloud PC device.
     */
    private ?bool $localAdminEnabled;

    /**
     * Indicates whether an end user is allowed to reset their Cloud PC. When true, the user is allowed to reset their Cloud PC. When false, end-user initiated reset is not allowed. The default value is false.
     */
    private ?bool $resetEnabled;

    /**
     * Defines how frequently a restore point is created that is, a snapshot is taken) for users'' provisioned Cloud PCs (default is 12 hours), and whether the user is allowed to restore their own Cloud PCs to a backup made at a specific point in time.
     */
    private ?string $restorePointSetting;

    /**
     * Represents the set of Microsoft 365 groups and security groups in Microsoft Entra ID that have cloudPCUserSetting assigned. Returned only on $expand. For an example, see Get cloudPcUserSetting.
     */
    private ?string $assignments;

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

    public function getLastModifiedDateTime(): ?\DateTimeInterface
    {
        return $this->lastModifiedDateTime;
    }

    public function setLastModifiedDateTime(?\DateTimeInterface $lastModifiedDateTime): self
    {
        $this->lastModifiedDateTime = $lastModifiedDateTime;
        return $this;
    }

    public function getLocalAdminEnabled(): ?bool
    {
        return $this->localAdminEnabled;
    }

    public function setLocalAdminEnabled(?bool $localAdminEnabled): self
    {
        $this->localAdminEnabled = $localAdminEnabled;
        return $this;
    }

    public function getResetEnabled(): ?bool
    {
        return $this->resetEnabled;
    }

    public function setResetEnabled(?bool $resetEnabled): self
    {
        $this->resetEnabled = $resetEnabled;
        return $this;
    }

    public function getRestorePointSetting(): ?string
    {
        return $this->restorePointSetting;
    }

    public function setRestorePointSetting(?string $restorePointSetting): self
    {
        $this->restorePointSetting = $restorePointSetting;
        return $this;
    }

    public function getAssignments(): ?string
    {
        return $this->assignments;
    }

    public function setAssignments(?string $assignments): self
    {
        $this->assignments = $assignments;
        return $this;
    }

}
