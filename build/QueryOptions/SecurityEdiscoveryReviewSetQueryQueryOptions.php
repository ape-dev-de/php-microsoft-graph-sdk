<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityEdiscoveryReviewSetQuery resources
 *
 * Available select fields:
 */
class SecurityEdiscoveryReviewSetQueryQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityEdiscoveryReviewSetQuery
     */

    /**
     * Select specific SecurityEdiscoveryReviewSetQuery properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
