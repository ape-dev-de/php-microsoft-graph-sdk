<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SoftwareUpdateStatusSummary
 */
class SoftwareUpdateStatusSummary
{
    /**
     * Number of compliant devices.
     */
    private ?float $compliantDeviceCount;

    /**
     * Number of compliant users.
     */
    private ?float $compliantUserCount;

    /**
     * Number of conflict devices.
     */
    private ?float $conflictDeviceCount;

    /**
     * Number of conflict users.
     */
    private ?float $conflictUserCount;

    /**
     * The name of the policy.
     */
    private ?string $displayName;

    /**
     * Number of devices had error.
     */
    private ?float $errorDeviceCount;

    /**
     * Number of users had error.
     */
    private ?float $errorUserCount;

    /**
     * Number of non compliant devices.
     */
    private ?float $nonCompliantDeviceCount;

    /**
     * Number of non compliant users.
     */
    private ?float $nonCompliantUserCount;

    /**
     * Number of not applicable devices.
     */
    private ?float $notApplicableDeviceCount;

    /**
     * Number of not applicable users.
     */
    private ?float $notApplicableUserCount;

    /**
     * Number of remediated devices.
     */
    private ?float $remediatedDeviceCount;

    /**
     * Number of remediated users.
     */
    private ?float $remediatedUserCount;

    /**
     * Number of unknown devices.
     */
    private ?float $unknownDeviceCount;

    /**
     * Number of unknown users.
     */
    private ?string $unknownUserCount;


    public function getCompliantDeviceCount(): ?float
    {
        return $this->compliantDeviceCount;
    }

    public function setCompliantDeviceCount(?float $compliantDeviceCount): self
    {
        $this->compliantDeviceCount = $compliantDeviceCount;
        return $this;
    }

    public function getCompliantUserCount(): ?float
    {
        return $this->compliantUserCount;
    }

    public function setCompliantUserCount(?float $compliantUserCount): self
    {
        $this->compliantUserCount = $compliantUserCount;
        return $this;
    }

    public function getConflictDeviceCount(): ?float
    {
        return $this->conflictDeviceCount;
    }

    public function setConflictDeviceCount(?float $conflictDeviceCount): self
    {
        $this->conflictDeviceCount = $conflictDeviceCount;
        return $this;
    }

    public function getConflictUserCount(): ?float
    {
        return $this->conflictUserCount;
    }

    public function setConflictUserCount(?float $conflictUserCount): self
    {
        $this->conflictUserCount = $conflictUserCount;
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

    public function getErrorDeviceCount(): ?float
    {
        return $this->errorDeviceCount;
    }

    public function setErrorDeviceCount(?float $errorDeviceCount): self
    {
        $this->errorDeviceCount = $errorDeviceCount;
        return $this;
    }

    public function getErrorUserCount(): ?float
    {
        return $this->errorUserCount;
    }

    public function setErrorUserCount(?float $errorUserCount): self
    {
        $this->errorUserCount = $errorUserCount;
        return $this;
    }

    public function getNonCompliantDeviceCount(): ?float
    {
        return $this->nonCompliantDeviceCount;
    }

    public function setNonCompliantDeviceCount(?float $nonCompliantDeviceCount): self
    {
        $this->nonCompliantDeviceCount = $nonCompliantDeviceCount;
        return $this;
    }

    public function getNonCompliantUserCount(): ?float
    {
        return $this->nonCompliantUserCount;
    }

    public function setNonCompliantUserCount(?float $nonCompliantUserCount): self
    {
        $this->nonCompliantUserCount = $nonCompliantUserCount;
        return $this;
    }

    public function getNotApplicableDeviceCount(): ?float
    {
        return $this->notApplicableDeviceCount;
    }

    public function setNotApplicableDeviceCount(?float $notApplicableDeviceCount): self
    {
        $this->notApplicableDeviceCount = $notApplicableDeviceCount;
        return $this;
    }

    public function getNotApplicableUserCount(): ?float
    {
        return $this->notApplicableUserCount;
    }

    public function setNotApplicableUserCount(?float $notApplicableUserCount): self
    {
        $this->notApplicableUserCount = $notApplicableUserCount;
        return $this;
    }

    public function getRemediatedDeviceCount(): ?float
    {
        return $this->remediatedDeviceCount;
    }

    public function setRemediatedDeviceCount(?float $remediatedDeviceCount): self
    {
        $this->remediatedDeviceCount = $remediatedDeviceCount;
        return $this;
    }

    public function getRemediatedUserCount(): ?float
    {
        return $this->remediatedUserCount;
    }

    public function setRemediatedUserCount(?float $remediatedUserCount): self
    {
        $this->remediatedUserCount = $remediatedUserCount;
        return $this;
    }

    public function getUnknownDeviceCount(): ?float
    {
        return $this->unknownDeviceCount;
    }

    public function setUnknownDeviceCount(?float $unknownDeviceCount): self
    {
        $this->unknownDeviceCount = $unknownDeviceCount;
        return $this;
    }

    public function getUnknownUserCount(): ?string
    {
        return $this->unknownUserCount;
    }

    public function setUnknownUserCount(?string $unknownUserCount): self
    {
        $this->unknownUserCount = $unknownUserCount;
        return $this;
    }

}
