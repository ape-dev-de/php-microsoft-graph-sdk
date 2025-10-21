<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RatingFranceTelevisionType resources
 *
 * Available select fields:
 */
class RatingFranceTelevisionTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RatingFranceTelevisionType
     */

    /**
     * Select specific RatingFranceTelevisionType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
