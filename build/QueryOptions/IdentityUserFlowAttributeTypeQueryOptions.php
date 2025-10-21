<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityUserFlowAttributeType resources
 *
 * Available select fields:
 */
class IdentityUserFlowAttributeTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IdentityUserFlowAttributeType
     */

    /**
     * Select specific IdentityUserFlowAttributeType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
