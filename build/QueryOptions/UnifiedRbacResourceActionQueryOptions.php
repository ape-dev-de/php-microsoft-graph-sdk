<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UnifiedRbacResourceAction resources
 *
 * Available select fields:
 */
class UnifiedRbacResourceActionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UnifiedRbacResourceAction
     */

    /**
     * Select specific UnifiedRbacResourceAction properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
