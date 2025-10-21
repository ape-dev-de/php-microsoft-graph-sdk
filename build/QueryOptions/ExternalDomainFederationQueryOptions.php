<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ExternalDomainFederation resources
 *
 * Available select fields:
 */
class ExternalDomainFederationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ExternalDomainFederation
     */

    /**
     * Select specific ExternalDomainFederation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
