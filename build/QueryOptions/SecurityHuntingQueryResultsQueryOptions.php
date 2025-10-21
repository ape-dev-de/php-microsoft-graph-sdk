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
    /**
     * Available select fields for SecurityHuntingQueryResults
     */
    public const FIELD_RESULTS = 'results';
    public const FIELD_SCHEMA = 'schema';

    /**
     * Select specific SecurityHuntingQueryResults properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
