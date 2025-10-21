<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CallRecordsUserIdentity resources
 *
 * Available select fields:
 */
class CallRecordsUserIdentityQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CallRecordsUserIdentity
     */

    /**
     * Select specific CallRecordsUserIdentity properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
