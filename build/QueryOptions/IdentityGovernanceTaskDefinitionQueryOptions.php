<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityGovernanceTaskDefinition resources
 *
 * Available select fields:
 */
class IdentityGovernanceTaskDefinitionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IdentityGovernanceTaskDefinition
     */

    /**
     * Select specific IdentityGovernanceTaskDefinition properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
