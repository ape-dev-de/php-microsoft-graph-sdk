<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessReviewInstanceDecisionItem resources
 *
 * Available select fields:
 */
class AccessReviewInstanceDecisionItemQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AccessReviewInstanceDecisionItem
     */

    /**
     * Select specific AccessReviewInstanceDecisionItem properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
