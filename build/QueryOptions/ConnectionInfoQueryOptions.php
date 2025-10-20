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
    public const FIELD_URL = 'url';

    /**
     * Select specific ConnectionInfo properties
     * 
     * @param array<string> $select Use ConnectionInfoQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
