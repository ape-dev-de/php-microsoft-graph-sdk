<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserInstallStateSummary
 */
class UserInstallStateSummary
{
    /**
     * Failed Device Count.
     */
    private ?float $failedDeviceCount;

    /**
     * Installed Device Count.
     */
    private ?float $installedDeviceCount;

    /**
     * Not installed device count.
     */
    private ?float $notInstalledDeviceCount;

    /**
     * User name.
     */
    private ?string $userName;

    /**
     * Contains properties for the installation state summary for a user.
     * @var string[]
     */
    private array $deviceStates = [];


    public function getFailedDeviceCount(): ?float
    {
        return $this->failedDeviceCount;
    }

    public function setFailedDeviceCount(?float $failedDeviceCount): self
    {
        $this->failedDeviceCount = $failedDeviceCount;
        return $this;
    }

    public function getInstalledDeviceCount(): ?float
    {
        return $this->installedDeviceCount;
    }

    public function setInstalledDeviceCount(?float $installedDeviceCount): self
    {
        $this->installedDeviceCount = $installedDeviceCount;
        return $this;
    }

    public function getNotInstalledDeviceCount(): ?float
    {
        return $this->notInstalledDeviceCount;
    }

    public function setNotInstalledDeviceCount(?float $notInstalledDeviceCount): self
    {
        $this->notInstalledDeviceCount = $notInstalledDeviceCount;
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

    /**
     * @return string[]
     */
    public function getDeviceStates(): array
    {
        return $this->deviceStates;
    }

    /**
     * @param string[] $deviceStates
     */
    public function setDeviceStates(array $deviceStates): self
    {
        $this->deviceStates = $deviceStates;
        return $this;
    }

}
