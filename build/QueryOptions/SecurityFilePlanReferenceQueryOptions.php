<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityFilePlanReference resources
 *
 * Available select fields:
 */
class SecurityFilePlanReferenceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityFilePlanReference
     */

    /**
     * Select specific SecurityFilePlanReference properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
