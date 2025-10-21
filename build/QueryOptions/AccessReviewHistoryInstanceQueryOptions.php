<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessReviewHistoryInstance resources
 *
 * Available select fields:
 */
class AccessReviewHistoryInstanceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AccessReviewHistoryInstance
     */

    /**
     * Select specific AccessReviewHistoryInstance properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
