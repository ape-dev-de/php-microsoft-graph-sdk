<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RatingCanadaMoviesType resources
 *
 * Available select fields:
 */
class RatingCanadaMoviesTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RatingCanadaMoviesType
     */

    /**
     * Select specific RatingCanadaMoviesType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
