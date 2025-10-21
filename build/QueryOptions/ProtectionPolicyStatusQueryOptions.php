<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ProtectionPolicyStatus resources
 *
 * Available select fields:
 */
class ProtectionPolicyStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ProtectionPolicyStatus
     */

    /**
     * Select specific ProtectionPolicyStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
