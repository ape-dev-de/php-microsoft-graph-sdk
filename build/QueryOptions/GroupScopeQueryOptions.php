<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for GroupScope resources
 *
 * Available select fields:
 */
class GroupScopeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for GroupScope
     */

    /**
     * Select specific GroupScope properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
