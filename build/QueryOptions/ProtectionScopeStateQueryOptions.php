<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ProtectionScopeState resources
 *
 * Available select fields:
 */
class ProtectionScopeStateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ProtectionScopeState
     */

    /**
     * Select specific ProtectionScopeState properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
