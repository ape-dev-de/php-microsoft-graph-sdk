<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentitySource resources
 *
 * Available select fields:
 */
class IdentitySourceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IdentitySource
     */

    /**
     * Select specific IdentitySource properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
