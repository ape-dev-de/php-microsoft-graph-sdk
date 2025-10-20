<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosCompliancePolicy
 */
class IosCompliancePolicy
{
    /**
     * Require that devices have enabled device threat protection .
     */
    private ?bool $deviceThreatProtectionEnabled;

    /**
     */
    private ?string $deviceThreatProtectionRequiredSecurityLevel;

    /**
     * Indicates whether or not to require a managed email profile.
     */
    private ?bool $managedEmailProfileRequired;

    /**
     * Maximum IOS version.
     */
    private ?string $osMaximumVersion;

    /**
     * Minimum IOS version.
     */
    private ?string $osMinimumVersion;

    /**
     * Indicates whether or not to block simple passcodes.
     */
    private ?bool $passcodeBlockSimple;

    /**
     * Number of days before the passcode expires. Valid values 1 to 65535
     */
    private ?float $passcodeExpirationDays;

    /**
     * The number of character sets required in the password.
     */
    private ?float $passcodeMinimumCharacterSetCount;

    /**
     * Minimum length of passcode. Valid values 4 to 14
     */
    private ?float $passcodeMinimumLength;

    /**
     * Minutes of inactivity before a passcode is required.
     */
    private ?float $passcodeMinutesOfInactivityBeforeLock;

    /**
     * Number of previous passcodes to block. Valid values 1 to 24
     */
    private ?float $passcodePreviousPasscodeBlockCount;

    /**
     * Indicates whether or not to require a passcode.
     */
    private ?bool $passcodeRequired;

    /**
     */
    private ?string $passcodeRequiredType;

    /**
     * This class contains compliance settings for IOS.
     */
    private ?string $securityBlockJailbrokenDevices;

    public function getDeviceThreatProtectionEnabled(): ?bool
    {
        return $this->deviceThreatProtectionEnabled;
    }

    public function setDeviceThreatProtectionEnabled(?bool $deviceThreatProtectionEnabled): self
    {
        $this->deviceThreatProtectionEnabled = $deviceThreatProtectionEnabled;
        return $this;
    }

    public function getDeviceThreatProtectionRequiredSecurityLevel(): ?string
    {
        return $this->deviceThreatProtectionRequiredSecurityLevel;
    }

    public function setDeviceThreatProtectionRequiredSecurityLevel(?string $deviceThreatProtectionRequiredSecurityLevel): self
    {
        $this->deviceThreatProtectionRequiredSecurityLevel = $deviceThreatProtectionRequiredSecurityLevel;
        return $this;
    }

    public function getManagedEmailProfileRequired(): ?bool
    {
        return $this->managedEmailProfileRequired;
    }

    public function setManagedEmailProfileRequired(?bool $managedEmailProfileRequired): self
    {
        $this->managedEmailProfileRequired = $managedEmailProfileRequired;
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

    public function getPasscodeBlockSimple(): ?bool
    {
        return $this->passcodeBlockSimple;
    }

    public function setPasscodeBlockSimple(?bool $passcodeBlockSimple): self
    {
        $this->passcodeBlockSimple = $passcodeBlockSimple;
        return $this;
    }

    public function getPasscodeExpirationDays(): ?float
    {
        return $this->passcodeExpirationDays;
    }

    public function setPasscodeExpirationDays(?float $passcodeExpirationDays): self
    {
        $this->passcodeExpirationDays = $passcodeExpirationDays;
        return $this;
    }

    public function getPasscodeMinimumCharacterSetCount(): ?float
    {
        return $this->passcodeMinimumCharacterSetCount;
    }

    public function setPasscodeMinimumCharacterSetCount(?float $passcodeMinimumCharacterSetCount): self
    {
        $this->passcodeMinimumCharacterSetCount = $passcodeMinimumCharacterSetCount;
        return $this;
    }

    public function getPasscodeMinimumLength(): ?float
    {
        return $this->passcodeMinimumLength;
    }

    public function setPasscodeMinimumLength(?float $passcodeMinimumLength): self
    {
        $this->passcodeMinimumLength = $passcodeMinimumLength;
        return $this;
    }

    public function getPasscodeMinutesOfInactivityBeforeLock(): ?float
    {
        return $this->passcodeMinutesOfInactivityBeforeLock;
    }

    public function setPasscodeMinutesOfInactivityBeforeLock(?float $passcodeMinutesOfInactivityBeforeLock): self
    {
        $this->passcodeMinutesOfInactivityBeforeLock = $passcodeMinutesOfInactivityBeforeLock;
        return $this;
    }

    public function getPasscodePreviousPasscodeBlockCount(): ?float
    {
        return $this->passcodePreviousPasscodeBlockCount;
    }

    public function setPasscodePreviousPasscodeBlockCount(?float $passcodePreviousPasscodeBlockCount): self
    {
        $this->passcodePreviousPasscodeBlockCount = $passcodePreviousPasscodeBlockCount;
        return $this;
    }

    public function getPasscodeRequired(): ?bool
    {
        return $this->passcodeRequired;
    }

    public function setPasscodeRequired(?bool $passcodeRequired): self
    {
        $this->passcodeRequired = $passcodeRequired;
        return $this;
    }

    public function getPasscodeRequiredType(): ?string
    {
        return $this->passcodeRequiredType;
    }

    public function setPasscodeRequiredType(?string $passcodeRequiredType): self
    {
        $this->passcodeRequiredType = $passcodeRequiredType;
        return $this;
    }

    public function getSecurityBlockJailbrokenDevices(): ?string
    {
        return $this->securityBlockJailbrokenDevices;
    }

    public function setSecurityBlockJailbrokenDevices(?string $securityBlockJailbrokenDevices): self
    {
        $this->securityBlockJailbrokenDevices = $securityBlockJailbrokenDevices;
        return $this;
    }

}
