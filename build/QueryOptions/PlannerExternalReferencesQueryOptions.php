<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PlannerExternalReferences resources
 *
 * Available select fields:
 */
class PlannerExternalReferencesQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PlannerExternalReferences
     */

    /**
     * Select specific PlannerExternalReferences properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
