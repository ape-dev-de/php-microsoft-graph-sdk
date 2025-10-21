<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for InternalDomainFederation resources
 *
 * Available select fields:
 */
class InternalDomainFederationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for InternalDomainFederation
     */

    /**
     * Select specific InternalDomainFederation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
