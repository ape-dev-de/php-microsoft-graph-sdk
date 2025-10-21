<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RatingJapanTelevisionType resources
 *
 * Available select fields:
 */
class RatingJapanTelevisionTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RatingJapanTelevisionType
     */

    /**
     * Select specific RatingJapanTelevisionType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
