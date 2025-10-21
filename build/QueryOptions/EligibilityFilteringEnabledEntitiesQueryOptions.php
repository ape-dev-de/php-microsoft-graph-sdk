<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EligibilityFilteringEnabledEntities resources
 *
 * Available select fields:
 */
class EligibilityFilteringEnabledEntitiesQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EligibilityFilteringEnabledEntities
     */

    /**
     * Select specific EligibilityFilteringEnabledEntities properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
