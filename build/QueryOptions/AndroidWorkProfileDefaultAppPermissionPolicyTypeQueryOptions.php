<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AndroidWorkProfileDefaultAppPermissionPolicyType resources
 *
 * Available select fields:
 */
class AndroidWorkProfileDefaultAppPermissionPolicyTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AndroidWorkProfileDefaultAppPermissionPolicyType
     */

    /**
     * Select specific AndroidWorkProfileDefaultAppPermissionPolicyType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
