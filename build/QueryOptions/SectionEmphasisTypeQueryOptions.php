<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SectionEmphasisType resources
 *
 * Available select fields:
 */
class SectionEmphasisTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SectionEmphasisType
     */

    /**
     * Select specific SectionEmphasisType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
