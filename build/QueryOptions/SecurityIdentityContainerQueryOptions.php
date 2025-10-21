<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityIdentityContainer resources
 *
 * Available select fields:
 */
class SecurityIdentityContainerQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityIdentityContainer
     */

    /**
     * Select specific SecurityIdentityContainer properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
