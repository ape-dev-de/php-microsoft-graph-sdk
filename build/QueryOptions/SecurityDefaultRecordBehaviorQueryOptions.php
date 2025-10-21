<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityDefaultRecordBehavior resources
 *
 * Available select fields:
 */
class SecurityDefaultRecordBehaviorQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityDefaultRecordBehavior
     */

    /**
     * Select specific SecurityDefaultRecordBehavior properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
