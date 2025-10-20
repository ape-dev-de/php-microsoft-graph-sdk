<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MacOSCompliancePolicy
 */
class MacOSCompliancePolicy
{
    /**
     * Require that devices have enabled device threat protection.
     */
    private ?bool $deviceThreatProtectionEnabled;

    /**
     */
    private ?string $deviceThreatProtectionRequiredSecurityLevel;

    /**
     * Corresponds to the 'Block all incoming connections' option.
     */
    private ?bool $firewallBlockAllIncoming;

    /**
     * Whether the firewall should be enabled or not.
     */
    private ?bool $firewallEnabled;

    /**
     * Corresponds to 'Enable stealth mode.
     */
    private ?bool $firewallEnableStealthMode;

    /**
     * Maximum MacOS version.
     */
    private ?string $osMaximumVersion;

    /**
     * Minimum MacOS version.
     */
    private ?string $osMinimumVersion;

    /**
     * Indicates whether or not to block simple passwords.
     */
    private ?bool $passwordBlockSimple;

    /**
     * Number of days before the password expires. Valid values 1 to 65535
     */
    private ?float $passwordExpirationDays;

    /**
     * The number of character sets required in the password.
     */
    private ?float $passwordMinimumCharacterSetCount;

    /**
     * Minimum length of password. Valid values 4 to 14
     */
    private ?float $passwordMinimumLength;

    /**
     * Minutes of inactivity before a password is required.
     */
    private ?float $passwordMinutesOfInactivityBeforeLock;

    /**
     * Number of previous passwords to block. Valid values 1 to 24
     */
    private ?float $passwordPreviousPasswordBlockCount;

    /**
     * Whether or not to require a password.
     */
    private ?bool $passwordRequired;

    /**
     */
    private ?string $passwordRequiredType;

    /**
     * Require encryption on Mac OS devices.
     */
    private ?bool $storageRequireEncryption;

    /**
     * This class contains compliance settings for Mac OS.
     */
    private ?string $systemIntegrityProtectionEnabled;

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

    public function getFirewallBlockAllIncoming(): ?bool
    {
        return $this->firewallBlockAllIncoming;
    }

    public function setFirewallBlockAllIncoming(?bool $firewallBlockAllIncoming): self
    {
        $this->firewallBlockAllIncoming = $firewallBlockAllIncoming;
        return $this;
    }

    public function getFirewallEnabled(): ?bool
    {
        return $this->firewallEnabled;
    }

    public function setFirewallEnabled(?bool $firewallEnabled): self
    {
        $this->firewallEnabled = $firewallEnabled;
        return $this;
    }

    public function getFirewallEnableStealthMode(): ?bool
    {
        return $this->firewallEnableStealthMode;
    }

    public function setFirewallEnableStealthMode(?bool $firewallEnableStealthMode): self
    {
        $this->firewallEnableStealthMode = $firewallEnableStealthMode;
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

    public function getStorageRequireEncryption(): ?bool
    {
        return $this->storageRequireEncryption;
    }

    public function setStorageRequireEncryption(?bool $storageRequireEncryption): self
    {
        $this->storageRequireEncryption = $storageRequireEncryption;
        return $this;
    }

    public function getSystemIntegrityProtectionEnabled(): ?string
    {
        return $this->systemIntegrityProtectionEnabled;
    }

    public function setSystemIntegrityProtectionEnabled(?string $systemIntegrityProtectionEnabled): self
    {
        $this->systemIntegrityProtectionEnabled = $systemIntegrityProtectionEnabled;
        return $this;
    }

}
