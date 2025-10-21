<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityFilePlanAuthority resources
 *
 * Available select fields:
 */
class SecurityFilePlanAuthorityQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityFilePlanAuthority
     */

    /**
     * Select specific SecurityFilePlanAuthority properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
