<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DelegatedPermissionClassification resources
 *
 * Available select fields:
 */
class DelegatedPermissionClassificationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DelegatedPermissionClassification
     */

    /**
     * Select specific DelegatedPermissionClassification properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
