<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityContainer resources
 *
 * Available select fields:
 */
class IdentityContainerQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IdentityContainer
     */

    /**
     * Select specific IdentityContainer properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
