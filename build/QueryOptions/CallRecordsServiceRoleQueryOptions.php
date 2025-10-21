<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CallRecordsServiceRole resources
 *
 * Available select fields:
 */
class CallRecordsServiceRoleQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CallRecordsServiceRole
     */

    /**
     * Select specific CallRecordsServiceRole properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
