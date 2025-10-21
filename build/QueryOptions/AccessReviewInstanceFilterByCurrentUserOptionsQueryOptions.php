<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessReviewInstanceFilterByCurrentUserOptions resources
 *
 * Available select fields:
 */
class AccessReviewInstanceFilterByCurrentUserOptionsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AccessReviewInstanceFilterByCurrentUserOptions
     */

    /**
     * Select specific AccessReviewInstanceFilterByCurrentUserOptions properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
