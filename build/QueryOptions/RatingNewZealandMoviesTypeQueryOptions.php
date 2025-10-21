<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RatingNewZealandMoviesType resources
 *
 * Available select fields:
 */
class RatingNewZealandMoviesTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RatingNewZealandMoviesType
     */

    /**
     * Select specific RatingNewZealandMoviesType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
