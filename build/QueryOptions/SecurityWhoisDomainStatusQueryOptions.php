<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityWhoisDomainStatus resources
 *
 * Available select fields:
 */
class SecurityWhoisDomainStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityWhoisDomainStatus
     */

    /**
     * Select specific SecurityWhoisDomainStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
