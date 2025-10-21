<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SectionGroup resources
 *
 * Available select fields:
 */
class SectionGroupQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SectionGroup
     */

    /**
     * Select specific SectionGroup properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
