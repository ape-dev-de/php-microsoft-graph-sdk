<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessReviewExpirationBehavior resources
 *
 * Available select fields:
 */
class AccessReviewExpirationBehaviorQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AccessReviewExpirationBehavior
     */

    /**
     * Select specific AccessReviewExpirationBehavior properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
