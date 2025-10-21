<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for GroupLifecyclePolicy resources
 *
 * Available select fields:
 */
class GroupLifecyclePolicyQueryOptions extends QueryOptions
{
    /**
     * Available select fields for GroupLifecyclePolicy
     */

    /**
     * Select specific GroupLifecyclePolicy properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
