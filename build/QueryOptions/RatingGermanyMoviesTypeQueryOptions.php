<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RatingGermanyMoviesType resources
 *
 * Available select fields:
 */
class RatingGermanyMoviesTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RatingGermanyMoviesType
     */

    /**
     * Select specific RatingGermanyMoviesType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
