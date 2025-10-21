<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessReviewSet resources
 *
 * Available select fields:
 */
class AccessReviewSetQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AccessReviewSet
     */

    /**
     * Select specific AccessReviewSet properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
