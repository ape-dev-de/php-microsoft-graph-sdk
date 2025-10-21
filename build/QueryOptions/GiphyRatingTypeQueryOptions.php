<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for GiphyRatingType resources
 *
 * Available select fields:
 */
class GiphyRatingTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for GiphyRatingType
     */

    /**
     * Select specific GiphyRatingType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
