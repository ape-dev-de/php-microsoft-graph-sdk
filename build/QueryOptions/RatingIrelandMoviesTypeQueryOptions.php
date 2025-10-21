<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RatingIrelandMoviesType resources
 *
 * Available select fields:
 */
class RatingIrelandMoviesTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RatingIrelandMoviesType
     */

    /**
     * Select specific RatingIrelandMoviesType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
