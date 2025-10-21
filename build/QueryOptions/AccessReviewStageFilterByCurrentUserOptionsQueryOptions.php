<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessReviewStageFilterByCurrentUserOptions resources
 *
 * Available select fields:
 */
class AccessReviewStageFilterByCurrentUserOptionsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AccessReviewStageFilterByCurrentUserOptions
     */

    /**
     * Select specific AccessReviewStageFilterByCurrentUserOptions properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
