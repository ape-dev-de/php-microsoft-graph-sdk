<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ServicePrincipalIdentity resources
 *
 * Available select fields:
 */
class ServicePrincipalIdentityQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ServicePrincipalIdentity
     */

    /**
     * Select specific ServicePrincipalIdentity properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
