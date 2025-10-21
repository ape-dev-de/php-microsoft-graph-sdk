<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RatingGermanyTelevisionType resources
 *
 * Available select fields:
 */
class RatingGermanyTelevisionTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RatingGermanyTelevisionType
     */

    /**
     * Select specific RatingGermanyTelevisionType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
