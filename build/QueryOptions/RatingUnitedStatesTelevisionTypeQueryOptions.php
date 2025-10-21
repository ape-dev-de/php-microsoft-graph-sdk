<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RatingUnitedStatesTelevisionType resources
 *
 * Available select fields:
 */
class RatingUnitedStatesTelevisionTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RatingUnitedStatesTelevisionType
     */

    /**
     * Select specific RatingUnitedStatesTelevisionType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
