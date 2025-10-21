<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PlannerPreviewType resources
 *
 * Available select fields:
 */
class PlannerPreviewTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PlannerPreviewType
     */

    /**
     * Select specific PlannerPreviewType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
