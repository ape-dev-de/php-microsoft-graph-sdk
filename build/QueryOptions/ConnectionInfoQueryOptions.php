<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ConnectionInfo resources
 *
 * Available select fields:
 * - url
 */
class ConnectionInfoQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ConnectionInfo
     */
    public const FIELD_URL = 'url';

    /**
     * Select specific ConnectionInfo properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
