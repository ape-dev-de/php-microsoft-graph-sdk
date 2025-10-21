<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SiteProtectionRule resources
 *
 * Available select fields:
 */
class SiteProtectionRuleQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SiteProtectionRule
     */

    /**
     * Select specific SiteProtectionRule properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
