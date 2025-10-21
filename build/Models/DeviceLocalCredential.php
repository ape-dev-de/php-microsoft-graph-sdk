<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceLocalCredential
 */
class DeviceLocalCredential
{
    /**
     * The name of the local admin account for which LAPS is enabled.
     */
    private ?string $accountName;

    /**
     * The SID of the local admin account for which LAPS is enabled.
     */
    private ?string $accountSid;

    /**
     * When the local administrator account credential for the device object was backed up to Azure Active Directory.
     */
    private ?\DateTimeInterface $backupDateTime;

    /**
     * The password for the local administrator account that is backed up to Azure Active Directory and returned as a Base64 encoded value.
     */
    private ?string $passwordBase64;


    public function getAccountName(): ?string
    {
        return $this->accountName;
    }

    public function setAccountName(?string $accountName): self
    {
        $this->accountName = $accountName;
        return $this;
    }

    public function getAccountSid(): ?string
    {
        return $this->accountSid;
    }

    public function setAccountSid(?string $accountSid): self
    {
        $this->accountSid = $accountSid;
        return $this;
    }

    public function getBackupDateTime(): ?\DateTimeInterface
    {
        return $this->backupDateTime;
    }

    public function setBackupDateTime(?\DateTimeInterface $backupDateTime): self
    {
        $this->backupDateTime = $backupDateTime;
        return $this;
    }

    public function getPasswordBase64(): ?string
    {
        return $this->passwordBase64;
    }

    public function setPasswordBase64(?string $passwordBase64): self
    {
        $this->passwordBase64 = $passwordBase64;
        return $this;
    }

}
