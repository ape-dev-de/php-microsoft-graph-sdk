<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EBookInstallSummary
 */
class EBookInstallSummary
{
    /**
     * Number of Devices that have failed to install this book.
     */
    private ?float $failedDeviceCount;

    /**
     * Number of Users that have 1 or more device that failed to install this book.
     */
    private ?float $failedUserCount;

    /**
     * Number of Devices that have successfully installed this book.
     */
    private ?float $installedDeviceCount;

    /**
     * Number of Users whose devices have all succeeded to install this book.
     */
    private ?float $installedUserCount;

    /**
     * Number of Devices that does not have this book installed.
     */
    private ?float $notInstalledDeviceCount;

    /**
     * Contains properties for the installation summary of a book for a device.
     */
    private ?string $notInstalledUserCount;

    public function getFailedDeviceCount(): ?float
    {
        return $this->failedDeviceCount;
    }

    public function setFailedDeviceCount(?float $failedDeviceCount): self
    {
        $this->failedDeviceCount = $failedDeviceCount;
        return $this;
    }

    public function getFailedUserCount(): ?float
    {
        return $this->failedUserCount;
    }

    public function setFailedUserCount(?float $failedUserCount): self
    {
        $this->failedUserCount = $failedUserCount;
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

    public function getInstalledUserCount(): ?float
    {
        return $this->installedUserCount;
    }

    public function setInstalledUserCount(?float $installedUserCount): self
    {
        $this->installedUserCount = $installedUserCount;
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

    public function getNotInstalledUserCount(): ?string
    {
        return $this->notInstalledUserCount;
    }

    public function setNotInstalledUserCount(?string $notInstalledUserCount): self
    {
        $this->notInstalledUserCount = $notInstalledUserCount;
        return $this;
    }

}
