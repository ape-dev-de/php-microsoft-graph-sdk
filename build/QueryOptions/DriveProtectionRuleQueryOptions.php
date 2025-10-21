<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DriveProtectionRule resources
 *
 * Available select fields:
 */
class DriveProtectionRuleQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DriveProtectionRule
     */

    /**
     * Select specific DriveProtectionRule properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
