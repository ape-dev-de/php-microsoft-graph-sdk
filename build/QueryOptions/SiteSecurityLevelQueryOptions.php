<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SiteSecurityLevel resources
 *
 * Available select fields:
 */
class SiteSecurityLevelQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SiteSecurityLevel
     */

    /**
     * Select specific SiteSecurityLevel properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
