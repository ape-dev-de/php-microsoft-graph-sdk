<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessReviewInstance resources
 *
 * Available select fields:
 */
class AccessReviewInstanceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AccessReviewInstance
     */

    /**
     * Select specific AccessReviewInstance properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
