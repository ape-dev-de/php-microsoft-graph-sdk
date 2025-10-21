<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ImportedWindowsAutopilotDeviceIdentity
 */
class ImportedWindowsAutopilotDeviceIdentity
{
    /**
     * UPN of the user the device will be assigned
     */
    private ?string $assignedUserPrincipalName;

    /**
     * Group Tag of the Windows autopilot device.
     */
    private ?string $groupTag;

    /**
     * Hardware Blob of the Windows autopilot device.
     */
    private ?string $hardwareIdentifier;

    /**
     * The Import Id of the Windows autopilot device.
     */
    private ?string $importId;

    /**
     * Product Key of the Windows autopilot device.
     */
    private ?string $productKey;

    /**
     * Serial number of the Windows autopilot device.
     */
    private ?string $serialNumber;

    /**
     * Imported windows autopilot devices.
     */
    private ?string $state;


    public function getAssignedUserPrincipalName(): ?string
    {
        return $this->assignedUserPrincipalName;
    }

    public function setAssignedUserPrincipalName(?string $assignedUserPrincipalName): self
    {
        $this->assignedUserPrincipalName = $assignedUserPrincipalName;
        return $this;
    }

    public function getGroupTag(): ?string
    {
        return $this->groupTag;
    }

    public function setGroupTag(?string $groupTag): self
    {
        $this->groupTag = $groupTag;
        return $this;
    }

    public function getHardwareIdentifier(): ?string
    {
        return $this->hardwareIdentifier;
    }

    public function setHardwareIdentifier(?string $hardwareIdentifier): self
    {
        $this->hardwareIdentifier = $hardwareIdentifier;
        return $this;
    }

    public function getImportId(): ?string
    {
        return $this->importId;
    }

    public function setImportId(?string $importId): self
    {
        $this->importId = $importId;
        return $this;
    }

    public function getProductKey(): ?string
    {
        return $this->productKey;
    }

    public function setProductKey(?string $productKey): self
    {
        $this->productKey = $productKey;
        return $this;
    }

    public function getSerialNumber(): ?string
    {
        return $this->serialNumber;
    }

    public function setSerialNumber(?string $serialNumber): self
    {
        $this->serialNumber = $serialNumber;
        return $this;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(?string $state): self
    {
        $this->state = $state;
        return $this;
    }

}
