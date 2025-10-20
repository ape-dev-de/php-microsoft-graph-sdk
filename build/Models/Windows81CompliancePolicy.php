<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Windows81CompliancePolicy
 */
class Windows81CompliancePolicy
{
    /**
     * Maximum Windows 8.1 version.
     */
    private ?string $osMaximumVersion;

    /**
     * Minimum Windows 8.1 version.
     */
    private ?string $osMinimumVersion;

    /**
     * Indicates whether or not to block simple password.
     */
    private ?bool $passwordBlockSimple;

    /**
     * Password expiration in days.
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
     * The number of previous passwords to prevent re-use of. Valid values 0 to 24
     */
    private ?float $passwordPreviousPasswordBlockCount;

    /**
     * Require a password to unlock Windows device.
     */
    private ?bool $passwordRequired;

    /**
     */
    private ?string $passwordRequiredType;

    /**
     * This class contains compliance settings for Windows 8.1.
     */
    private ?string $storageRequireEncryption;

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
