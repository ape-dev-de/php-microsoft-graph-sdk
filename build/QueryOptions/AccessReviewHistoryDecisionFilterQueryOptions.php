<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessReviewHistoryDecisionFilter resources
 *
 * Available select fields:
 */
class AccessReviewHistoryDecisionFilterQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AccessReviewHistoryDecisionFilter
     */

    /**
     * Select specific AccessReviewHistoryDecisionFilter properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
