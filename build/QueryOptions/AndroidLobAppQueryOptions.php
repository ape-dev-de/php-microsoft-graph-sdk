<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AndroidLobApp resources
 *
 * Available select fields:
 * - minimumSupportedOperatingSystem
 * - packageId
 * - versionCode
 * - versionName
 */
class AndroidLobAppQueryOptions extends QueryOptions
{
    public const FIELD_MINIMUM_SUPPORTED_OPERATING_SYSTEM = 'minimumSupportedOperatingSystem';
    public const FIELD_PACKAGE_ID = 'packageId';
    public const FIELD_VERSION_CODE = 'versionCode';
    public const FIELD_VERSION_NAME = 'versionName';

    /**
     * Select specific AndroidLobApp properties
     * 
     * @param array<string> $select Use AndroidLobAppQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
