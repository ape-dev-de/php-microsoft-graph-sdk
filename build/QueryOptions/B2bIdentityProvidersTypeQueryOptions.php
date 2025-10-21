<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for B2bIdentityProvidersType resources
 *
 * Available select fields:
 */
class B2bIdentityProvidersTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for B2bIdentityProvidersType
     */

    /**
     * Select specific B2bIdentityProvidersType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
