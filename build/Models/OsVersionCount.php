<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OsVersionCount
 */
class OsVersionCount
{
    /**
     * Count of devices with malware for the OS version
     */
    private ?float $deviceCount;

    /**
     * The Timestamp of the last update for the device count in UTC
     */
    private ?\DateTimeInterface $lastUpdateDateTime;

    /**
     * Count of devices with malware for each OS version
     */
    private ?string $osVersion;

    public function getDeviceCount(): ?float
    {
        return $this->deviceCount;
    }

    public function setDeviceCount(?float $deviceCount): self
    {
        $this->deviceCount = $deviceCount;
        return $this;
    }

    public function getLastUpdateDateTime(): ?\DateTimeInterface
    {
        return $this->lastUpdateDateTime;
    }

    public function setLastUpdateDateTime(?\DateTimeInterface $lastUpdateDateTime): self
    {
        $this->lastUpdateDateTime = $lastUpdateDateTime;
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

}
