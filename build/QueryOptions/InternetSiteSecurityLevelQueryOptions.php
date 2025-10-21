<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for InternetSiteSecurityLevel resources
 *
 * Available select fields:
 */
class InternetSiteSecurityLevelQueryOptions extends QueryOptions
{
    /**
     * Available select fields for InternetSiteSecurityLevel
     */

    /**
     * Select specific InternetSiteSecurityLevel properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
