<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsUniversalAppX resources
 *
 * Available select fields:
 * - applicableArchitectures
 * - applicableDeviceTypes
 * - identityName
 * - identityPublisherHash
 * - identityResourceIdentifier
 * - identityVersion
 * - isBundle
 * - minimumSupportedOperatingSystem
 * - committedContainedApps
 */
class WindowsUniversalAppXQueryOptions extends QueryOptions
{
    public const FIELD_APPLICABLE_ARCHITECTURES = 'applicableArchitectures';
    public const FIELD_APPLICABLE_DEVICE_TYPES = 'applicableDeviceTypes';
    public const FIELD_IDENTITY_NAME = 'identityName';
    public const FIELD_IDENTITY_PUBLISHER_HASH = 'identityPublisherHash';
    public const FIELD_IDENTITY_RESOURCE_IDENTIFIER = 'identityResourceIdentifier';
    public const FIELD_IDENTITY_VERSION = 'identityVersion';
    public const FIELD_IS_BUNDLE = 'isBundle';
    public const FIELD_MINIMUM_SUPPORTED_OPERATING_SYSTEM = 'minimumSupportedOperatingSystem';
    public const FIELD_COMMITTED_CONTAINED_APPS = 'committedContainedApps';

    /**
     * Select specific WindowsUniversalAppX properties
     * 
     * @param array<string> $select Use WindowsUniversalAppXQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
