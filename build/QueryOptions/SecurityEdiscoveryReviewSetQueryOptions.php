<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityEdiscoveryReviewSet resources
 *
 * Available select fields:
 */
class SecurityEdiscoveryReviewSetQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityEdiscoveryReviewSet
     */

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
