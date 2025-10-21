<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RatingIrelandTelevisionType resources
 *
 * Available select fields:
 */
class RatingIrelandTelevisionTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RatingIrelandTelevisionType
     */

    /**
     * Select specific RatingIrelandTelevisionType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
