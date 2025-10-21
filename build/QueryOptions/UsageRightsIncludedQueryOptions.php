<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UsageRightsIncluded resources
 *
 * Available select fields:
 */
class UsageRightsIncludedQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UsageRightsIncluded
     */

    /**
     * Select specific UsageRightsIncluded properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
