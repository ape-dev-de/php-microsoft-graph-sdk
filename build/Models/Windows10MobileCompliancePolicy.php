<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Windows10MobileCompliancePolicy
 */
class Windows10MobileCompliancePolicy
{
    /**
     * Require devices to be reported healthy by Windows Device Health Attestation - bit locker is enabled
     */
    private ?bool $bitLockerEnabled;

    /**
     * Require devices to be reported as healthy by Windows Device Health Attestation.
     */
    private ?bool $codeIntegrityEnabled;

    /**
     * Require devices to be reported as healthy by Windows Device Health Attestation - early launch antimalware driver is enabled.
     */
    private ?bool $earlyLaunchAntiMalwareDriverEnabled;

    /**
     * Maximum Windows Phone version.
     */
    private ?string $osMaximumVersion;

    /**
     * Minimum Windows Phone version.
     */
    private ?string $osMinimumVersion;

    /**
     * Whether or not to block syncing the calendar.
     */
    private ?bool $passwordBlockSimple;

    /**
     * Number of days before password expiration. Valid values 1 to 255
     */
    private ?float $passwordExpirationDays;

    /**
     * The number of character sets required in the password.
     */
    private ?float $passwordMinimumCharacterSetCount;

    /**
     * Minimum password length. Valid values 4 to 16
     */
    private ?float $passwordMinimumLength;

    /**
     * Minutes of inactivity before a password is required.
     */
    private ?float $passwordMinutesOfInactivityBeforeLock;

    /**
     * The number of previous passwords to prevent re-use of.
     */
    private ?float $passwordPreviousPasswordBlockCount;

    /**
     * Require a password to unlock Windows Phone device.
     */
    private ?bool $passwordRequired;

    /**
     */
    private ?string $passwordRequiredType;

    /**
     * Require a password to unlock an idle device.
     */
    private ?bool $passwordRequireToUnlockFromIdle;

    /**
     * Require devices to be reported as healthy by Windows Device Health Attestation - secure boot is enabled.
     */
    private ?bool $secureBootEnabled;

    /**
     * This class contains compliance settings for Windows 10 Mobile.
     */
    private ?string $storageRequireEncryption;

    public function getBitLockerEnabled(): ?bool
    {
        return $this->bitLockerEnabled;
    }

    public function setBitLockerEnabled(?bool $bitLockerEnabled): self
    {
        $this->bitLockerEnabled = $bitLockerEnabled;
        return $this;
    }

    public function getCodeIntegrityEnabled(): ?bool
    {
        return $this->codeIntegrityEnabled;
    }

    public function setCodeIntegrityEnabled(?bool $codeIntegrityEnabled): self
    {
        $this->codeIntegrityEnabled = $codeIntegrityEnabled;
        return $this;
    }

    public function getEarlyLaunchAntiMalwareDriverEnabled(): ?bool
    {
        return $this->earlyLaunchAntiMalwareDriverEnabled;
    }

    public function setEarlyLaunchAntiMalwareDriverEnabled(?bool $earlyLaunchAntiMalwareDriverEnabled): self
    {
        $this->earlyLaunchAntiMalwareDriverEnabled = $earlyLaunchAntiMalwareDriverEnabled;
        return $this;
    }

    public function getOsMaximumVersion(): ?string
    {
        return $this->osMaximumVersion;
    }

    public function setOsMaximumVersion(?string $osMaximumVersion): self
    {
        $this->osMaximumVersion = $osMaximumVersion;
        return $this;
    }

    public function getOsMinimumVersion(): ?string
    {
        return $this->osMinimumVersion;
    }

    public function setOsMinimumVersion(?string $osMinimumVersion): self
    {
        $this->osMinimumVersion = $osMinimumVersion;
        return $this;
    }

    public function getPasswordBlockSimple(): ?bool
    {
        return $this->passwordBlockSimple;
    }

    public function setPasswordBlockSimple(?bool $passwordBlockSimple): self
    {
        $this->passwordBlockSimple = $passwordBlockSimple;
        return $this;
    }

    public function getPasswordExpirationDays(): ?float
    {
        return $this->passwordExpirationDays;
    }

    public function setPasswordExpirationDays(?float $passwordExpirationDays): self
    {
        $this->passwordExpirationDays = $passwordExpirationDays;
        return $this;
    }

    public function getPasswordMinimumCharacterSetCount(): ?float
    {
        return $this->passwordMinimumCharacterSetCount;
    }

    public function setPasswordMinimumCharacterSetCount(?float $passwordMinimumCharacterSetCount): self
    {
        $this->passwordMinimumCharacterSetCount = $passwordMinimumCharacterSetCount;
        return $this;
    }

    public function getPasswordMinimumLength(): ?float
    {
        return $this->passwordMinimumLength;
    }

    public function setPasswordMinimumLength(?float $passwordMinimumLength): self
    {
        $this->passwordMinimumLength = $passwordMinimumLength;
        return $this;
    }

    public function getPasswordMinutesOfInactivityBeforeLock(): ?float
    {
        return $this->passwordMinutesOfInactivityBeforeLock;
    }

    public function setPasswordMinutesOfInactivityBeforeLock(?float $passwordMinutesOfInactivityBeforeLock): self
    {
        $this->passwordMinutesOfInactivityBeforeLock = $passwordMinutesOfInactivityBeforeLock;
        return $this;
    }

    public function getPasswordPreviousPasswordBlockCount(): ?float
    {
        return $this->passwordPreviousPasswordBlockCount;
    }

    public function setPasswordPreviousPasswordBlockCount(?float $passwordPreviousPasswordBlockCount): self
    {
        $this->passwordPreviousPasswordBlockCount = $passwordPreviousPasswordBlockCount;
        return $this;
    }

    public function getPasswordRequired(): ?bool
    {
        return $this->passwordRequired;
    }

    public function setPasswordRequired(?bool $passwordRequired): self
    {
        $this->passwordRequired = $passwordRequired;
        return $this;
    }

    public function getPasswordRequiredType(): ?string
    {
        return $this->passwordRequiredType;
    }

    public function setPasswordRequiredType(?string $passwordRequiredType): self
    {
        $this->passwordRequiredType = $passwordRequiredType;
        return $this;
    }

    public function getPasswordRequireToUnlockFromIdle(): ?bool
    {
        return $this->passwordRequireToUnlockFromIdle;
    }

    public function setPasswordRequireToUnlockFromIdle(?bool $passwordRequireToUnlockFromIdle): self
    {
        $this->passwordRequireToUnlockFromIdle = $passwordRequireToUnlockFromIdle;
        return $this;
    }

    public function getSecureBootEnabled(): ?bool
    {
        return $this->secureBootEnabled;
    }

    public function setSecureBootEnabled(?bool $secureBootEnabled): self
    {
        $this->secureBootEnabled = $secureBootEnabled;
        return $this;
    }

    public function getStorageRequireEncryption(): ?string
    {
        return $this->storageRequireEncryption;
    }

    public function setStorageRequireEncryption(?string $storageRequireEncryption): self
    {
        $this->storageRequireEncryption = $storageRequireEncryption;
        return $this;
    }

}
