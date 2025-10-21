<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UsageRights resources
 *
 * Available select fields:
 */
class UsageRightsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UsageRights
     */

    /**
     * Select specific UsageRights properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
