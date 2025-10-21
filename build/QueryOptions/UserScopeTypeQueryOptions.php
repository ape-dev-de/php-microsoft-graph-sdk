<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserScopeType resources
 *
 * Available select fields:
 */
class UserScopeTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UserScopeType
     */

    /**
     * Select specific UserScopeType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
