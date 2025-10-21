<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityGovernanceTimeBasedAttributeTrigger resources
 *
 * Available select fields:
 */
class IdentityGovernanceTimeBasedAttributeTriggerQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IdentityGovernanceTimeBasedAttributeTrigger
     */

    /**
     * Select specific IdentityGovernanceTimeBasedAttributeTrigger properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
