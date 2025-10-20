<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityHuntingQueryResults resources
 *
 * Available select fields:
 * - results
 * - schema
 */
class SecurityHuntingQueryResultsQueryOptions extends QueryOptions
{
    public const FIELD_RESULTS = 'results';
    public const FIELD_SCHEMA = 'schema';

    /**
     * Select specific SecurityHuntingQueryResults properties
     * 
     * @param array<string> $select Use SecurityHuntingQueryResultsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
