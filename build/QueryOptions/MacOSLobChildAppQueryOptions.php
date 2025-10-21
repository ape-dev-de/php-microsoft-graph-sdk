<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MacOSLobChildApp resources
 *
 * Available select fields:
 * - buildNumber
 * - bundleId
 * - versionNumber
 */
class MacOSLobChildAppQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MacOSLobChildApp
     */
    public const FIELD_BUILD_NUMBER = 'buildNumber';
    public const FIELD_BUNDLE_ID = 'bundleId';
    public const FIELD_VERSION_NUMBER = 'versionNumber';

    /**
     * Select specific MacOSLobChildApp properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
