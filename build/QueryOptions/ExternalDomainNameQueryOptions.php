<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ExternalDomainName resources
 *
 * Available select fields:
 */
class ExternalDomainNameQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ExternalDomainName
     */

    /**
     * Select specific ExternalDomainName properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
