<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityUserFlowAttributeInputType resources
 *
 * Available select fields:
 */
class IdentityUserFlowAttributeInputTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IdentityUserFlowAttributeInputType
     */

    /**
     * Select specific IdentityUserFlowAttributeInputType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
