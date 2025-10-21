<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityUserFlowAttributeDataType resources
 *
 * Available select fields:
 */
class IdentityUserFlowAttributeDataTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IdentityUserFlowAttributeDataType
     */

    /**
     * Select specific IdentityUserFlowAttributeDataType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
