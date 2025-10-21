<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserProtectionScopeContainer resources
 *
 * Available select fields:
 */
class UserProtectionScopeContainerQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UserProtectionScopeContainer
     */

    /**
     * Select specific UserProtectionScopeContainer properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
