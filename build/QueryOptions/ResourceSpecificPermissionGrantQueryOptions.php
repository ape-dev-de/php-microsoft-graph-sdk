<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ResourceSpecificPermissionGrant resources
 *
 * Available select fields:
 */
class ResourceSpecificPermissionGrantQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ResourceSpecificPermissionGrant
     */

    /**
     * Select specific ResourceSpecificPermissionGrant properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
