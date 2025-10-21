<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AttributeFlowBehavior resources
 *
 * Available select fields:
 */
class AttributeFlowBehaviorQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AttributeFlowBehavior
     */

    /**
     * Select specific AttributeFlowBehavior properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
