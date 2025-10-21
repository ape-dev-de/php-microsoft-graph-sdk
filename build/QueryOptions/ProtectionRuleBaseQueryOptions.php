<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ProtectionRuleBase resources
 *
 * Available select fields:
 */
class ProtectionRuleBaseQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ProtectionRuleBase
     */

    /**
     * Select specific ProtectionRuleBase properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
