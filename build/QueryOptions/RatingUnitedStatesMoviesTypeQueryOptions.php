<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RatingUnitedStatesMoviesType resources
 *
 * Available select fields:
 */
class RatingUnitedStatesMoviesTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RatingUnitedStatesMoviesType
     */

    /**
     * Select specific RatingUnitedStatesMoviesType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
