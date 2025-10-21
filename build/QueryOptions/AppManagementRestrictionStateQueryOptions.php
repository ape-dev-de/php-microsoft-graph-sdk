<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AppManagementRestrictionState resources
 *
 * Available select fields:
 */
class AppManagementRestrictionStateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AppManagementRestrictionState
     */

    /**
     * Select specific AppManagementRestrictionState properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
