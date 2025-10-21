<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceInfo resources
 *
 * Available select fields:
 * - deviceId
 * - displayName
 * - enrollmentProfileName
 * - extensionAttribute1
 * - extensionAttribute10
 * - extensionAttribute11
 * - extensionAttribute12
 * - extensionAttribute13
 * - extensionAttribute14
 * - extensionAttribute15
 * - extensionAttribute2
 * - extensionAttribute3
 * - extensionAttribute4
 * - extensionAttribute5
 * - extensionAttribute6
 * - extensionAttribute7
 * - extensionAttribute8
 * - extensionAttribute9
 * - isCompliant
 * - manufacturer
 * - mdmAppId
 * - model
 * - operatingSystem
 * - operatingSystemVersion
 * - ownership
 * - physicalIds
 * - profileType
 * - systemLabels
 * - trustType
 */
class DeviceInfoQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DeviceInfo
     */
    public const FIELD_DEVICE_ID = 'deviceId';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_ENROLLMENT_PROFILE_NAME = 'enrollmentProfileName';
    public const FIELD_EXTENSION_ATTRIBUTE1 = 'extensionAttribute1';
    public const FIELD_EXTENSION_ATTRIBUTE10 = 'extensionAttribute10';
    public const FIELD_EXTENSION_ATTRIBUTE11 = 'extensionAttribute11';
    public const FIELD_EXTENSION_ATTRIBUTE12 = 'extensionAttribute12';
    public const FIELD_EXTENSION_ATTRIBUTE13 = 'extensionAttribute13';
    public const FIELD_EXTENSION_ATTRIBUTE14 = 'extensionAttribute14';
    public const FIELD_EXTENSION_ATTRIBUTE15 = 'extensionAttribute15';
    public const FIELD_EXTENSION_ATTRIBUTE2 = 'extensionAttribute2';
    public const FIELD_EXTENSION_ATTRIBUTE3 = 'extensionAttribute3';
    public const FIELD_EXTENSION_ATTRIBUTE4 = 'extensionAttribute4';
    public const FIELD_EXTENSION_ATTRIBUTE5 = 'extensionAttribute5';
    public const FIELD_EXTENSION_ATTRIBUTE6 = 'extensionAttribute6';
    public const FIELD_EXTENSION_ATTRIBUTE7 = 'extensionAttribute7';
    public const FIELD_EXTENSION_ATTRIBUTE8 = 'extensionAttribute8';
    public const FIELD_EXTENSION_ATTRIBUTE9 = 'extensionAttribute9';
    public const FIELD_IS_COMPLIANT = 'isCompliant';
    public const FIELD_MANUFACTURER = 'manufacturer';
    public const FIELD_MDM_APP_ID = 'mdmAppId';
    public const FIELD_MODEL = 'model';
    public const FIELD_OPERATING_SYSTEM = 'operatingSystem';
    public const FIELD_OPERATING_SYSTEM_VERSION = 'operatingSystemVersion';
    public const FIELD_OWNERSHIP = 'ownership';
    public const FIELD_PHYSICAL_IDS = 'physicalIds';
    public const FIELD_PROFILE_TYPE = 'profileType';
    public const FIELD_SYSTEM_LABELS = 'systemLabels';
    public const FIELD_TRUST_TYPE = 'trustType';

    /**
     * Select specific DeviceInfo properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
