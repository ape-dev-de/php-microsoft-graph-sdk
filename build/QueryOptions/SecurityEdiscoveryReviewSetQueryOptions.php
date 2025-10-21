<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityEdiscoveryReviewSet resources
 *
 * Available select fields:
 * - queries
 */
class SecurityEdiscoveryReviewSetQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityEdiscoveryReviewSet
     */
    public const FIELD_QUERIES = 'queries';

    /**
     * Select specific SecurityEdiscoveryReviewSet properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
