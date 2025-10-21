<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ProtectionPolicyBase resources
 *
 * Available select fields:
 */
class ProtectionPolicyBaseQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ProtectionPolicyBase
     */

    /**
     * Select specific ProtectionPolicyBase properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
