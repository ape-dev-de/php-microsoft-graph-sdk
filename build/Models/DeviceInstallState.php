<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceInstallState
 */
class DeviceInstallState
{
    /**
     * Device Id.
     */
    private ?string $deviceId;

    /**
     * Device name.
     */
    private ?string $deviceName;

    /**
     * The error code for install failures.
     */
    private ?string $errorCode;

    /**
     */
    private ?string $installState;

    /**
     * Last sync date and time.
     */
    private ?\DateTimeInterface $lastSyncDateTime;

    /**
     * OS Description.
     */
    private ?string $osDescription;

    /**
     * OS Version.
     */
    private ?string $osVersion;

    /**
     * Contains properties for the installation state for a device.
     */
    private ?string $userName;

    public function getDeviceId(): ?string
    {
        return $this->deviceId;
    }

    public function setDeviceId(?string $deviceId): self
    {
        $this->deviceId = $deviceId;
        return $this;
    }

    public function getDeviceName(): ?string
    {
        return $this->deviceName;
    }

    public function setDeviceName(?string $deviceName): self
    {
        $this->deviceName = $deviceName;
        return $this;
    }

    public function getErrorCode(): ?string
    {
        return $this->errorCode;
    }

    public function setErrorCode(?string $errorCode): self
    {
        $this->errorCode = $errorCode;
        return $this;
    }

    public function getInstallState(): ?string
    {
        return $this->installState;
    }

    public function setInstallState(?string $installState): self
    {
        $this->installState = $installState;
        return $this;
    }

    public function getLastSyncDateTime(): ?\DateTimeInterface
    {
        return $this->lastSyncDateTime;
    }

    public function setLastSyncDateTime(?\DateTimeInterface $lastSyncDateTime): self
    {
        $this->lastSyncDateTime = $lastSyncDateTime;
        return $this;
    }

    public function getOsDescription(): ?string
    {
        return $this->osDescription;
    }

    public function setOsDescription(?string $osDescription): self
    {
        $this->osDescription = $osDescription;
        return $this;
    }

    public function getOsVersion(): ?string
    {
        return $this->osVersion;
    }

    public function setOsVersion(?string $osVersion): self
    {
        $this->osVersion = $osVersion;
        return $this;
    }

    public function getUserName(): ?string
    {
        return $this->userName;
    }

    public function setUserName(?string $userName): self
    {
        $this->userName = $userName;
        return $this;
    }

}
