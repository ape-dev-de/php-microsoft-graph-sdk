<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RatingCanadaTelevisionType resources
 *
 * Available select fields:
 */
class RatingCanadaTelevisionTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RatingCanadaTelevisionType
     */

    /**
     * Select specific RatingCanadaTelevisionType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
