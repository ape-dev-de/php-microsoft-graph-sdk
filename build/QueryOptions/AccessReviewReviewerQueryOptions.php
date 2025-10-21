<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessReviewReviewer resources
 *
 * Available select fields:
 */
class AccessReviewReviewerQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AccessReviewReviewer
     */

    /**
     * Select specific AccessReviewReviewer properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
