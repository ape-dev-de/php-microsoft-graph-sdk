<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceLocalCredentialInfo
 */
class DeviceLocalCredentialInfo
{
    /**
     * The credentials of the device's local administrator account backed up to Azure Active Directory.
     */
    private array $credentials = [];

    /**
     * Display name of the device that the local credentials are associated with.
     */
    private ?string $deviceName;

    /**
     * When the local administrator account credential was backed up to Azure Active Directory.
     */
    private ?\DateTimeInterface $lastBackupDateTime;

    /**
     * When the local administrator account credential will be refreshed and backed up to Azure Active Directory.
     */
    private ?\DateTimeInterface $refreshDateTime;


    public function getCredentials(): array
    {
        return $this->credentials;
    }

    public function setCredentials(array $credentials): self
    {
        $this->credentials = $credentials;
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

    public function getLastBackupDateTime(): ?\DateTimeInterface
    {
        return $this->lastBackupDateTime;
    }

    public function setLastBackupDateTime(?\DateTimeInterface $lastBackupDateTime): self
    {
        $this->lastBackupDateTime = $lastBackupDateTime;
        return $this;
    }

    public function getRefreshDateTime(): ?\DateTimeInterface
    {
        return $this->refreshDateTime;
    }

    public function setRefreshDateTime(?\DateTimeInterface $refreshDateTime): self
    {
        $this->refreshDateTime = $refreshDateTime;
        return $this;
    }

}
