<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for HorizontalSectionColumn resources
 *
 * Available select fields:
 */
class HorizontalSectionColumnQueryOptions extends QueryOptions
{
    /**
     * Available select fields for HorizontalSectionColumn
     */

    /**
     * Select specific HorizontalSectionColumn properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
