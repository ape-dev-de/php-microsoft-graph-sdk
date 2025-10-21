<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityWhoisHistoryRecord resources
 *
 * Available select fields:
 */
class SecurityWhoisHistoryRecordQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityWhoisHistoryRecord
     */

    /**
     * Select specific SecurityWhoisHistoryRecord properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
