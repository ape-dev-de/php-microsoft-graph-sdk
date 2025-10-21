<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for B2xIdentityUserFlow resources
 *
 * Available select fields:
 */
class B2xIdentityUserFlowQueryOptions extends QueryOptions
{
    /**
     * Available select fields for B2xIdentityUserFlow
     */

    /**
     * Select specific B2xIdentityUserFlow properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
