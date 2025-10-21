<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceInfo
 */
class DeviceInfo
{
    public function __construct(
        /** Unique identifier set by Azure Device Registration Service at the time of registration. */
        public ?string $deviceId = null,
        /** The display name for the device. */
        public ?string $displayName = null,
        /** Enrollment profile applied to the device. */
        public ?string $enrollmentProfileName = null,
        /** Extension attribute. */
        public ?string $extensionAttribute1 = null,
        /** Extension attribute. */
        public ?string $extensionAttribute10 = null,
        /** Extension attribute. */
        public ?string $extensionAttribute11 = null,
        /** Extension attribute. */
        public ?string $extensionAttribute12 = null,
        /** Extension attribute. */
        public ?string $extensionAttribute13 = null,
        /** Extension attribute. */
        public ?string $extensionAttribute14 = null,
        /** Extension attribute. */
        public ?string $extensionAttribute15 = null,
        /** Extension attribute. */
        public ?string $extensionAttribute2 = null,
        /** Extension attribute. */
        public ?string $extensionAttribute3 = null,
        /** Extension attribute. */
        public ?string $extensionAttribute4 = null,
        /** Extension attribute. */
        public ?string $extensionAttribute5 = null,
        /** Extension attribute. */
        public ?string $extensionAttribute6 = null,
        /** Extension attribute. */
        public ?string $extensionAttribute7 = null,
        /** Extension attribute. */
        public ?string $extensionAttribute8 = null,
        /** Extension attribute. */
        public ?string $extensionAttribute9 = null,
        /** Indicates the device compliance status with Mobile Management Device (MDM) policies. Default is false. */
        public ?bool $isCompliant = null,
        /** Manufacturer of the device. */
        public ?string $manufacturer = null,
        /** Application identifier used to register device into MDM. */
        public ?string $mdmAppId = null,
        /** Model of the device. */
        public ?string $model = null,
        /** The type of operating system on the device. */
        public ?string $operatingSystem = null,
        /** The version of the operating system on the device. */
        public ?string $operatingSystemVersion = null,
        /** Ownership of the device. This property is set by Intune. */
        public ?string $ownership = null,
        /** @var string[] A collection of physical identifiers for the device. */
        public array $physicalIds = [],
        /** The profile type of the device. */
        public ?string $profileType = null,
        /** @var string[] List of labels applied to the device by the system. */
        public array $systemLabels = [],
        /** Type of trust for the joined device. */
        public ?string $trustType = null
    ) {}
}
