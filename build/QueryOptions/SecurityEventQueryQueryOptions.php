<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityEventQuery resources
 *
 * Available select fields:
 * - query
 * - queryType
 */
class SecurityEventQueryQueryOptions extends QueryOptions
{
    public const FIELD_QUERY = 'query';
    public const FIELD_QUERY_TYPE = 'queryType';

    /**
     * Select specific SecurityEventQuery properties
     * 
     * @param array<string> $select Use SecurityEventQueryQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
