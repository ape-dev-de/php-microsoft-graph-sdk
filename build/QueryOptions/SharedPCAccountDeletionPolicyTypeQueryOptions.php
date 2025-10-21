<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SharedPCAccountDeletionPolicyType resources
 *
 * Available select fields:
 */
class SharedPCAccountDeletionPolicyTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SharedPCAccountDeletionPolicyType
     */

    /**
     * Select specific SharedPCAccountDeletionPolicyType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
