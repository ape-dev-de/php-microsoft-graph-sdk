<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ManagedAppStatus resources
 *
 * Available select fields:
 * - displayName
 * - version
 */
class ManagedAppStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ManagedAppStatus
     */
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_VERSION = 'version';

    /**
     * Select specific ManagedAppStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
