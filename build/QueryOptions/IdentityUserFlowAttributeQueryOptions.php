<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityUserFlowAttribute resources
 *
 * Available select fields:
 */
class IdentityUserFlowAttributeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IdentityUserFlowAttribute
     */

    /**
     * Select specific IdentityUserFlowAttribute properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
