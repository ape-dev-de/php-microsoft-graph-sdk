<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ActivityBasedTimeoutPolicy resources
 *
 * Available select fields:
 */
class ActivityBasedTimeoutPolicyQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ActivityBasedTimeoutPolicy
     */

    /**
     * Select specific ActivityBasedTimeoutPolicy properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
