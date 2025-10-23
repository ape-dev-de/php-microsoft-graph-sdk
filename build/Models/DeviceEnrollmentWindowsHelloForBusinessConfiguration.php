<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceEnrollmentWindowsHelloForBusinessConfiguration
 */
class DeviceEnrollmentWindowsHelloForBusinessConfiguration
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Created date time in UTC of the device enrollment configuration */
    public ?\DateTimeInterface $createdDateTime = null;

    /** The description of the device enrollment configuration */
    public ?string $description = null;

    /** The display name of the device enrollment configuration */
    public ?string $displayName = null;

    /** Last modified date time in UTC of the device enrollment configuration */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** Priority is used when a user exists in multiple groups that are assigned enrollment configuration. Users are subject only to the configuration with the lowest priority value. */
    public ?float $priority = null;

    /** The version of the device enrollment configuration */
    public ?float $version = null;

    /** 
     * The list of group assignments for the device configuration profile
     * @var EnrollmentConfigurationAssignment[]
     */
    public array $assignments = [];

    /**  */
    public ?Enablement $enhancedBiometricsState = null;

    /** Controls the period of time (in days) that a PIN can be used before the system requires the user to change it. This must be set between 0 and 730, inclusive. If set to 0, the user's PIN will never expire */
    public ?float $pinExpirationInDays = null;

    /**  */
    public ?WindowsHelloForBusinessPinUsage $pinLowercaseCharactersUsage = null;

    /** Controls the maximum number of characters allowed for the Windows Hello for Business PIN. This value must be between 4 and 127, inclusive. This value must be greater than or equal to the value set for the minimum PIN. */
    public ?float $pinMaximumLength = null;

    /** Controls the minimum number of characters required for the Windows Hello for Business PIN.  This value must be between 4 and 127, inclusive, and less than or equal to the value set for the maximum PIN. */
    public ?float $pinMinimumLength = null;

    /** Controls the ability to prevent users from using past PINs. This must be set between 0 and 50, inclusive, and the current PIN of the user is included in that count. If set to 0, previous PINs are not stored. PIN history is not preserved through a PIN reset. */
    public ?float $pinPreviousBlockCount = null;

    /**  */
    public ?WindowsHelloForBusinessPinUsage $pinSpecialCharactersUsage = null;

    /**  */
    public ?WindowsHelloForBusinessPinUsage $pinUppercaseCharactersUsage = null;

    /** Controls the use of Remote Windows Hello for Business. Remote Windows Hello for Business provides the ability for a portable, registered device to be usable as a companion for desktop authentication. The desktop must be Azure AD joined and the companion device must have a Windows Hello for Business PIN. */
    public ?bool $remotePassportEnabled = null;

    /** Controls whether to require a Trusted Platform Module (TPM) for provisioning Windows Hello for Business. A TPM provides an additional security benefit in that data stored on it cannot be used on other devices. If set to False, all devices can provision Windows Hello for Business even if there is not a usable TPM. */
    public ?bool $securityDeviceRequired = null;

    /**  */
    public ?Enablement $state = null;

    /** Controls the use of biometric gestures, such as face and fingerprint, as an alternative to the Windows Hello for Business PIN.  If set to False, biometric gestures are not allowed. Users must still configure a PIN as a backup in case of failures. */
    public ?bool $unlockWithBiometricsEnabled = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = $data['createdDateTime'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = $data['lastModifiedDateTime'];
        }
        if (isset($data['priority'])) {
            $this->priority = $data['priority'];
        }
        if (isset($data['version'])) {
            $this->version = $data['version'];
        }
        if (isset($data['assignments'])) {
            $this->assignments = $data['assignments'];
        }
        if (isset($data['enhancedBiometricsState'])) {
            $this->enhancedBiometricsState = $data['enhancedBiometricsState'];
        }
        if (isset($data['pinExpirationInDays'])) {
            $this->pinExpirationInDays = $data['pinExpirationInDays'];
        }
        if (isset($data['pinLowercaseCharactersUsage'])) {
            $this->pinLowercaseCharactersUsage = $data['pinLowercaseCharactersUsage'];
        }
        if (isset($data['pinMaximumLength'])) {
            $this->pinMaximumLength = $data['pinMaximumLength'];
        }
        if (isset($data['pinMinimumLength'])) {
            $this->pinMinimumLength = $data['pinMinimumLength'];
        }
        if (isset($data['pinPreviousBlockCount'])) {
            $this->pinPreviousBlockCount = $data['pinPreviousBlockCount'];
        }
        if (isset($data['pinSpecialCharactersUsage'])) {
            $this->pinSpecialCharactersUsage = $data['pinSpecialCharactersUsage'];
        }
        if (isset($data['pinUppercaseCharactersUsage'])) {
            $this->pinUppercaseCharactersUsage = $data['pinUppercaseCharactersUsage'];
        }
        if (isset($data['remotePassportEnabled'])) {
            $this->remotePassportEnabled = $data['remotePassportEnabled'];
        }
        if (isset($data['securityDeviceRequired'])) {
            $this->securityDeviceRequired = $data['securityDeviceRequired'];
        }
        if (isset($data['state'])) {
            $this->state = $data['state'];
        }
        if (isset($data['unlockWithBiometricsEnabled'])) {
            $this->unlockWithBiometricsEnabled = $data['unlockWithBiometricsEnabled'];
        }
    }
}
