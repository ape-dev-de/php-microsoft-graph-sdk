<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityUserFlow resources
 *
 * Available select fields:
 */
class IdentityUserFlowQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IdentityUserFlow
     */

    /**
     * Select specific IdentityUserFlow properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
