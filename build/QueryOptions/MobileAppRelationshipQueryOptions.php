<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MobileAppRelationship resources
 *
 * Available select fields:
 */
class MobileAppRelationshipQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MobileAppRelationship
     */

    /**
     * Select specific MobileAppRelationship properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
