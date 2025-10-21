<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PolicyUserScope resources
 *
 * Available select fields:
 */
class PolicyUserScopeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PolicyUserScope
     */

    /**
     * Select specific PolicyUserScope properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
