<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityPurgeAreas resources
 *
 * Available select fields:
 */
class SecurityPurgeAreasQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityPurgeAreas
     */

    /**
     * Select specific SecurityPurgeAreas properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
