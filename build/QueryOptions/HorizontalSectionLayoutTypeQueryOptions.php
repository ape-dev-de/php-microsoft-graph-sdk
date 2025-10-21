<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for HorizontalSectionLayoutType resources
 *
 * Available select fields:
 */
class HorizontalSectionLayoutTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for HorizontalSectionLayoutType
     */

    /**
     * Select specific HorizontalSectionLayoutType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
