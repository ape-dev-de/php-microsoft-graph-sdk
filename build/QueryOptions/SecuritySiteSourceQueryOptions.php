<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecuritySiteSource resources
 *
 * Available select fields:
 */
class SecuritySiteSourceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecuritySiteSource
     */

    /**
     * Select specific SecuritySiteSource properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
