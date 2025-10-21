<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityPassiveDnsRecord resources
 *
 * Available select fields:
 */
class SecurityPassiveDnsRecordQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityPassiveDnsRecord
     */

    /**
     * Select specific SecurityPassiveDnsRecord properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
