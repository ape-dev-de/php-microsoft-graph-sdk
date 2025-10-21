<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityGovernanceAttributeChangeTrigger resources
 *
 * Available select fields:
 */
class IdentityGovernanceAttributeChangeTriggerQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IdentityGovernanceAttributeChangeTrigger
     */

    /**
     * Select specific IdentityGovernanceAttributeChangeTrigger properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
