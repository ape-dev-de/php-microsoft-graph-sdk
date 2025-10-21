<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RatingJapanMoviesType resources
 *
 * Available select fields:
 */
class RatingJapanMoviesTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RatingJapanMoviesType
     */

    /**
     * Select specific RatingJapanMoviesType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
