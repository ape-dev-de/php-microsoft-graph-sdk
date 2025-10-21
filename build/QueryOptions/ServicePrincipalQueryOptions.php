<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ServicePrincipal resources
 *
 * Available select fields:
 */
class ServicePrincipalQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ServicePrincipal
     */

    /**
     * Select specific ServicePrincipal properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
