<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PagePromotionType resources
 *
 * Available select fields:
 */
class PagePromotionTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PagePromotionType
     */

    /**
     * Select specific PagePromotionType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
