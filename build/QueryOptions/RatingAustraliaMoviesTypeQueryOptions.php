<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RatingAustraliaMoviesType resources
 *
 * Available select fields:
 */
class RatingAustraliaMoviesTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RatingAustraliaMoviesType
     */

    /**
     * Select specific RatingAustraliaMoviesType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
