<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserAccountSecurityType resources
 *
 * Available select fields:
 */
class UserAccountSecurityTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UserAccountSecurityType
     */

    /**
     * Select specific UserAccountSecurityType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
