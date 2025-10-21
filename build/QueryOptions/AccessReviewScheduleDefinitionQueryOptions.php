<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessReviewScheduleDefinition resources
 *
 * Available select fields:
 */
class AccessReviewScheduleDefinitionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AccessReviewScheduleDefinition
     */

    /**
     * Select specific AccessReviewScheduleDefinition properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
