<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ManagedIOSLobApp resources
 *
 * Available select fields:
 * - applicableDeviceType
 * - buildNumber
 * - bundleId
 * - expirationDateTime
 * - minimumSupportedOperatingSystem
 * - versionNumber
 */
class ManagedIOSLobAppQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ManagedIOSLobApp
     */
    public const FIELD_APPLICABLE_DEVICE_TYPE = 'applicableDeviceType';
    public const FIELD_BUILD_NUMBER = 'buildNumber';
    public const FIELD_BUNDLE_ID = 'bundleId';
    public const FIELD_EXPIRATION_DATE_TIME = 'expirationDateTime';
    public const FIELD_MINIMUM_SUPPORTED_OPERATING_SYSTEM = 'minimumSupportedOperatingSystem';
    public const FIELD_VERSION_NUMBER = 'versionNumber';

    /**
     * Select specific ManagedIOSLobApp properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
