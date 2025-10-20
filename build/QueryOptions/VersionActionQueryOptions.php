<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for VersionAction resources
 *
 * Available select fields:
 * - newVersion
 */
class VersionActionQueryOptions extends QueryOptions
{
    public const FIELD_NEW_VERSION = 'newVersion';

    /**
     * Select specific VersionAction properties
     * 
     * @param array<string> $select Use VersionActionQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
