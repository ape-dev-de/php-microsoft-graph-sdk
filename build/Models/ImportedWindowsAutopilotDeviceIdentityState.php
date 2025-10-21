<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ImportedWindowsAutopilotDeviceIdentityState
 */
class ImportedWindowsAutopilotDeviceIdentityState
{
    /**
     * Device error code reported by Device Directory Service(DDS).
     */
    private ?float $deviceErrorCode;

    /**
     * Device error name reported by Device Directory Service(DDS).
     */
    private ?string $deviceErrorName;

    /**
     */
    private ?string $deviceImportStatus;

    /**
     * Device Registration ID for successfully added device reported by Device Directory Service(DDS).
     */
    private ?string $deviceRegistrationId;


    public function getDeviceErrorCode(): ?float
    {
        return $this->deviceErrorCode;
    }

    public function setDeviceErrorCode(?float $deviceErrorCode): self
    {
        $this->deviceErrorCode = $deviceErrorCode;
        return $this;
    }

    public function getDeviceErrorName(): ?string
    {
        return $this->deviceErrorName;
    }

    public function setDeviceErrorName(?string $deviceErrorName): self
    {
        $this->deviceErrorName = $deviceErrorName;
        return $this;
    }

    public function getDeviceImportStatus(): ?string
    {
        return $this->deviceImportStatus;
    }

    public function setDeviceImportStatus(?string $deviceImportStatus): self
    {
        $this->deviceImportStatus = $deviceImportStatus;
        return $this;
    }

    public function getDeviceRegistrationId(): ?string
    {
        return $this->deviceRegistrationId;
    }

    public function setDeviceRegistrationId(?string $deviceRegistrationId): self
    {
        $this->deviceRegistrationId = $deviceRegistrationId;
        return $this;
    }

}
