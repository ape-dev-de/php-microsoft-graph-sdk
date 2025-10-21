<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UnifiedRbacResourceNamespace resources
 *
 * Available select fields:
 */
class UnifiedRbacResourceNamespaceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UnifiedRbacResourceNamespace
     */

    /**
     * Select specific UnifiedRbacResourceNamespace properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
