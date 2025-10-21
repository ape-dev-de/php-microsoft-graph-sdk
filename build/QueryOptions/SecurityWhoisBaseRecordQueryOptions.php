<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityWhoisBaseRecord resources
 *
 * Available select fields:
 */
class SecurityWhoisBaseRecordQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityWhoisBaseRecord
     */

    /**
     * Select specific SecurityWhoisBaseRecord properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
