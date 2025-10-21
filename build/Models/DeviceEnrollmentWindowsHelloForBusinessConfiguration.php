<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceEnrollmentWindowsHelloForBusinessConfiguration
 */
class DeviceEnrollmentWindowsHelloForBusinessConfiguration
{
    /**
     */
    private ?string $enhancedBiometricsState;

    /**
     * Controls the period of time (in days) that a PIN can be used before the system requires the user to change it. This must be set between 0 and 730, inclusive. If set to 0, the user''s PIN will never expire
     */
    private ?float $pinExpirationInDays;

    /**
     */
    private ?string $pinLowercaseCharactersUsage;

    /**
     * Controls the maximum number of characters allowed for the Windows Hello for Business PIN. This value must be between 4 and 127, inclusive. This value must be greater than or equal to the value set for the minimum PIN.
     */
    private ?float $pinMaximumLength;

    /**
     * Controls the minimum number of characters required for the Windows Hello for Business PIN.  This value must be between 4 and 127, inclusive, and less than or equal to the value set for the maximum PIN.
     */
    private ?float $pinMinimumLength;

    /**
     * Controls the ability to prevent users from using past PINs. This must be set between 0 and 50, inclusive, and the current PIN of the user is included in that count. If set to 0, previous PINs are not stored. PIN history is not preserved through a PIN reset.
     */
    private ?float $pinPreviousBlockCount;

    /**
     */
    private ?string $pinSpecialCharactersUsage;

    /**
     */
    private ?string $pinUppercaseCharactersUsage;

    /**
     * Controls the use of Remote Windows Hello for Business. Remote Windows Hello for Business provides the ability for a portable, registered device to be usable as a companion for desktop authentication. The desktop must be Azure AD joined and the companion device must have a Windows Hello for Business PIN.
     */
    private ?bool $remotePassportEnabled;

    /**
     * Controls whether to require a Trusted Platform Module (TPM) for provisioning Windows Hello for Business. A TPM provides an additional security benefit in that data stored on it cannot be used on other devices. If set to False, all devices can provision Windows Hello for Business even if there is not a usable TPM.
     */
    private ?bool $securityDeviceRequired;

    /**
     */
    private ?string $state;

    /**
     * Windows Hello for Business settings lets users access their devices using a gesture, such as biometric authentication, or a PIN. Configure settings for enrolled Windows 10, Windows 10 Mobile and later.
     */
    private ?string $unlockWithBiometricsEnabled;


    public function getEnhancedBiometricsState(): ?string
    {
        return $this->enhancedBiometricsState;
    }

    public function setEnhancedBiometricsState(?string $enhancedBiometricsState): self
    {
        $this->enhancedBiometricsState = $enhancedBiometricsState;
        return $this;
    }

    public function getPinExpirationInDays(): ?float
    {
        return $this->pinExpirationInDays;
    }

    public function setPinExpirationInDays(?float $pinExpirationInDays): self
    {
        $this->pinExpirationInDays = $pinExpirationInDays;
        return $this;
    }

    public function getPinLowercaseCharactersUsage(): ?string
    {
        return $this->pinLowercaseCharactersUsage;
    }

    public function setPinLowercaseCharactersUsage(?string $pinLowercaseCharactersUsage): self
    {
        $this->pinLowercaseCharactersUsage = $pinLowercaseCharactersUsage;
        return $this;
    }

    public function getPinMaximumLength(): ?float
    {
        return $this->pinMaximumLength;
    }

    public function setPinMaximumLength(?float $pinMaximumLength): self
    {
        $this->pinMaximumLength = $pinMaximumLength;
        return $this;
    }

    public function getPinMinimumLength(): ?float
    {
        return $this->pinMinimumLength;
    }

    public function setPinMinimumLength(?float $pinMinimumLength): self
    {
        $this->pinMinimumLength = $pinMinimumLength;
        return $this;
    }

    public function getPinPreviousBlockCount(): ?float
    {
        return $this->pinPreviousBlockCount;
    }

    public function setPinPreviousBlockCount(?float $pinPreviousBlockCount): self
    {
        $this->pinPreviousBlockCount = $pinPreviousBlockCount;
        return $this;
    }

    public function getPinSpecialCharactersUsage(): ?string
    {
        return $this->pinSpecialCharactersUsage;
    }

    public function setPinSpecialCharactersUsage(?string $pinSpecialCharactersUsage): self
    {
        $this->pinSpecialCharactersUsage = $pinSpecialCharactersUsage;
        return $this;
    }

    public function getPinUppercaseCharactersUsage(): ?string
    {
        return $this->pinUppercaseCharactersUsage;
    }

    public function setPinUppercaseCharactersUsage(?string $pinUppercaseCharactersUsage): self
    {
        $this->pinUppercaseCharactersUsage = $pinUppercaseCharactersUsage;
        return $this;
    }

    public function getRemotePassportEnabled(): ?bool
    {
        return $this->remotePassportEnabled;
    }

    public function setRemotePassportEnabled(?bool $remotePassportEnabled): self
    {
        $this->remotePassportEnabled = $remotePassportEnabled;
        return $this;
    }

    public function getSecurityDeviceRequired(): ?bool
    {
        return $this->securityDeviceRequired;
    }

    public function setSecurityDeviceRequired(?bool $securityDeviceRequired): self
    {
        $this->securityDeviceRequired = $securityDeviceRequired;
        return $this;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(?string $state): self
    {
        $this->state = $state;
        return $this;
    }

    public function getUnlockWithBiometricsEnabled(): ?string
    {
        return $this->unlockWithBiometricsEnabled;
    }

    public function setUnlockWithBiometricsEnabled(?string $unlockWithBiometricsEnabled): self
    {
        $this->unlockWithBiometricsEnabled = $unlockWithBiometricsEnabled;
        return $this;
    }

}
