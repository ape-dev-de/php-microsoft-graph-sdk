<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ExclusionGroupAssignmentTarget resources
 *
 * Available select fields:
 */
class ExclusionGroupAssignmentTargetQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ExclusionGroupAssignmentTarget
     */

    /**
     * Select specific ExclusionGroupAssignmentTarget properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
