<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Windows10CompliancePolicy
 */
class Windows10CompliancePolicy
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
    private ?string $mobileOsMaximumVersion;

    /**
     * Minimum Windows Phone version.
     */
    private ?string $mobileOsMinimumVersion;

    /**
     * Maximum Windows 10 version.
     */
    private ?string $osMaximumVersion;

    /**
     * Minimum Windows 10 version.
     */
    private ?string $osMinimumVersion;

    /**
     * Indicates whether or not to block simple password.
     */
    private ?bool $passwordBlockSimple;

    /**
     * The password expiration in days.
     */
    private ?float $passwordExpirationDays;

    /**
     * The number of character sets required in the password.
     */
    private ?float $passwordMinimumCharacterSetCount;

    /**
     * The minimum password length.
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
     * Require a password to unlock Windows device.
     */
    private ?bool $passwordRequired;

    /**
     * Require a password to unlock an idle device.
     */
    private ?bool $passwordRequiredToUnlockFromIdle;

    /**
     */
    private ?string $passwordRequiredType;

    /**
     * Require devices to be reported as healthy by Windows Device Health Attestation.
     */
    private ?bool $requireHealthyDeviceReport;

    /**
     * Require devices to be reported as healthy by Windows Device Health Attestation - secure boot is enabled.
     */
    private ?bool $secureBootEnabled;

    /**
     * This class contains compliance settings for Windows 10.
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

    public function getMobileOsMaximumVersion(): ?string
    {
        return $this->mobileOsMaximumVersion;
    }

    public function setMobileOsMaximumVersion(?string $mobileOsMaximumVersion): self
    {
        $this->mobileOsMaximumVersion = $mobileOsMaximumVersion;
        return $this;
    }

    public function getMobileOsMinimumVersion(): ?string
    {
        return $this->mobileOsMinimumVersion;
    }

    public function setMobileOsMinimumVersion(?string $mobileOsMinimumVersion): self
    {
        $this->mobileOsMinimumVersion = $mobileOsMinimumVersion;
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

    public function getPasswordRequiredToUnlockFromIdle(): ?bool
    {
        return $this->passwordRequiredToUnlockFromIdle;
    }

    public function setPasswordRequiredToUnlockFromIdle(?bool $passwordRequiredToUnlockFromIdle): self
    {
        $this->passwordRequiredToUnlockFromIdle = $passwordRequiredToUnlockFromIdle;
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

    public function getRequireHealthyDeviceReport(): ?bool
    {
        return $this->requireHealthyDeviceReport;
    }

    public function setRequireHealthyDeviceReport(?bool $requireHealthyDeviceReport): self
    {
        $this->requireHealthyDeviceReport = $requireHealthyDeviceReport;
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
