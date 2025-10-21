<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessReviewApplyAction resources
 *
 * Available select fields:
 */
class AccessReviewApplyActionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AccessReviewApplyAction
     */

    /**
     * Select specific AccessReviewApplyAction properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
