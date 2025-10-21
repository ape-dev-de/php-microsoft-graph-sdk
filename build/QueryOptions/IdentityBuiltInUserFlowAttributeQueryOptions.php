<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityBuiltInUserFlowAttribute resources
 *
 * Available select fields:
 */
class IdentityBuiltInUserFlowAttributeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IdentityBuiltInUserFlowAttribute
     */

    /**
     * Select specific IdentityBuiltInUserFlowAttribute properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
