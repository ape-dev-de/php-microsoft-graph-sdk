<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AttributeFlowType resources
 *
 * Available select fields:
 */
class AttributeFlowTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AttributeFlowType
     */

    /**
     * Select specific AttributeFlowType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
