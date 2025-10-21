<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceEnrollmentWindowsHelloForBusinessConfiguration
 */
class DeviceEnrollmentWindowsHelloForBusinessConfiguration
{
    public function __construct(
        /**  */
        public ?string $enhancedBiometricsState = null,
        /** Controls the period of time (in days) that a PIN can be used before the system requires the user to change it. This must be set between 0 and 730, inclusive. If set to 0, the user''s PIN will never expire */
        public ?float $pinExpirationInDays = null,
        /**  */
        public ?string $pinLowercaseCharactersUsage = null,
        /** Controls the maximum number of characters allowed for the Windows Hello for Business PIN. This value must be between 4 and 127, inclusive. This value must be greater than or equal to the value set for the minimum PIN. */
        public ?float $pinMaximumLength = null,
        /** Controls the minimum number of characters required for the Windows Hello for Business PIN.  This value must be between 4 and 127, inclusive, and less than or equal to the value set for the maximum PIN. */
        public ?float $pinMinimumLength = null,
        /** Controls the ability to prevent users from using past PINs. This must be set between 0 and 50, inclusive, and the current PIN of the user is included in that count. If set to 0, previous PINs are not stored. PIN history is not preserved through a PIN reset. */
        public ?float $pinPreviousBlockCount = null,
        /**  */
        public ?string $pinSpecialCharactersUsage = null,
        /**  */
        public ?string $pinUppercaseCharactersUsage = null,
        /** Controls the use of Remote Windows Hello for Business. Remote Windows Hello for Business provides the ability for a portable, registered device to be usable as a companion for desktop authentication. The desktop must be Azure AD joined and the companion device must have a Windows Hello for Business PIN. */
        public ?bool $remotePassportEnabled = null,
        /** Controls whether to require a Trusted Platform Module (TPM) for provisioning Windows Hello for Business. A TPM provides an additional security benefit in that data stored on it cannot be used on other devices. If set to False, all devices can provision Windows Hello for Business even if there is not a usable TPM. */
        public ?bool $securityDeviceRequired = null,
        /**  */
        public ?string $state = null,
        /** Windows Hello for Business settings lets users access their devices using a gesture, such as biometric authentication, or a PIN. Configure settings for enrolled Windows 10, Windows 10 Mobile and later. */
        public ?string $unlockWithBiometricsEnabled = null
    ) {}
}
