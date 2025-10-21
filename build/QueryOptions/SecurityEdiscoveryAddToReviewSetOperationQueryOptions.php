<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityEdiscoveryAddToReviewSetOperation resources
 *
 * Available select fields:
 */
class SecurityEdiscoveryAddToReviewSetOperationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityEdiscoveryAddToReviewSetOperation
     */

    /**
     * Select specific SecurityEdiscoveryAddToReviewSetOperation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
