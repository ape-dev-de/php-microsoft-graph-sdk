<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ResponseEmotionType resources
 *
 * Available select fields:
 */
class ResponseEmotionTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ResponseEmotionType
     */

    /**
     * Select specific ResponseEmotionType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
