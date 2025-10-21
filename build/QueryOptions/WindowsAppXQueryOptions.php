<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsAppX resources
 *
 * Available select fields:
 * - applicableArchitectures
 * - identityName
 * - identityPublisherHash
 * - identityResourceIdentifier
 * - identityVersion
 * - isBundle
 * - minimumSupportedOperatingSystem
 */
class WindowsAppXQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WindowsAppX
     */
    public const FIELD_APPLICABLE_ARCHITECTURES = 'applicableArchitectures';
    public const FIELD_IDENTITY_NAME = 'identityName';
    public const FIELD_IDENTITY_PUBLISHER_HASH = 'identityPublisherHash';
    public const FIELD_IDENTITY_RESOURCE_IDENTIFIER = 'identityResourceIdentifier';
    public const FIELD_IDENTITY_VERSION = 'identityVersion';
    public const FIELD_IS_BUNDLE = 'isBundle';
    public const FIELD_MINIMUM_SUPPORTED_OPERATING_SYSTEM = 'minimumSupportedOperatingSystem';

    /**
     * Select specific WindowsAppX properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
