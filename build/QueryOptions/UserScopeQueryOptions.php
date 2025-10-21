<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserScope resources
 *
 * Available select fields:
 */
class UserScopeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UserScope
     */

    /**
     * Select specific UserScope properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
