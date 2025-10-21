<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RatingAppsType resources
 *
 * Available select fields:
 */
class RatingAppsTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RatingAppsType
     */

    /**
     * Select specific RatingAppsType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
