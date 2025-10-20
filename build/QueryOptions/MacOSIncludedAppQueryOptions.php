<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MacOSIncludedApp resources
 *
 * Available select fields:
 * - bundleId
 * - bundleVersion
 */
class MacOSIncludedAppQueryOptions extends QueryOptions
{
    public const FIELD_BUNDLE_ID = 'bundleId';
    public const FIELD_BUNDLE_VERSION = 'bundleVersion';

    /**
     * Select specific MacOSIncludedApp properties
     * 
     * @param array<string> $select Use MacOSIncludedAppQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
