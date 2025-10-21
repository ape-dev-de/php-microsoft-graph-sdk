<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceExchangeAccessStateSummary
 */
class DeviceExchangeAccessStateSummary
{
    /**
     * Total count of devices with Exchange Access State: Allowed.
     */
    private ?float $allowedDeviceCount;

    /**
     * Total count of devices with Exchange Access State: Blocked.
     */
    private ?float $blockedDeviceCount;

    /**
     * Total count of devices with Exchange Access State: Quarantined.
     */
    private ?float $quarantinedDeviceCount;

    /**
     * Total count of devices for which no Exchange Access State could be found.
     */
    private ?float $unavailableDeviceCount;

    /**
     * Device Exchange Access State summary
     */
    private ?string $unknownDeviceCount;


    public function getAllowedDeviceCount(): ?float
    {
        return $this->allowedDeviceCount;
    }

    public function setAllowedDeviceCount(?float $allowedDeviceCount): self
    {
        $this->allowedDeviceCount = $allowedDeviceCount;
        return $this;
    }

    public function getBlockedDeviceCount(): ?float
    {
        return $this->blockedDeviceCount;
    }

    public function setBlockedDeviceCount(?float $blockedDeviceCount): self
    {
        $this->blockedDeviceCount = $blockedDeviceCount;
        return $this;
    }

    public function getQuarantinedDeviceCount(): ?float
    {
        return $this->quarantinedDeviceCount;
    }

    public function setQuarantinedDeviceCount(?float $quarantinedDeviceCount): self
    {
        $this->quarantinedDeviceCount = $quarantinedDeviceCount;
        return $this;
    }

    public function getUnavailableDeviceCount(): ?float
    {
        return $this->unavailableDeviceCount;
    }

    public function setUnavailableDeviceCount(?float $unavailableDeviceCount): self
    {
        $this->unavailableDeviceCount = $unavailableDeviceCount;
        return $this;
    }

    public function getUnknownDeviceCount(): ?string
    {
        return $this->unknownDeviceCount;
    }

    public function setUnknownDeviceCount(?string $unknownDeviceCount): self
    {
        $this->unknownDeviceCount = $unknownDeviceCount;
        return $this;
    }

}
