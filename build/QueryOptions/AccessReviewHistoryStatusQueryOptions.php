<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessReviewHistoryStatus resources
 *
 * Available select fields:
 */
class AccessReviewHistoryStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AccessReviewHistoryStatus
     */

    /**
     * Select specific AccessReviewHistoryStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
