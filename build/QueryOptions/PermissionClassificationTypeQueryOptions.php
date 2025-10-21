<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PermissionClassificationType resources
 *
 * Available select fields:
 */
class PermissionClassificationTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PermissionClassificationType
     */

    /**
     * Select specific PermissionClassificationType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
