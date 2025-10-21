<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityEventStatusType resources
 *
 * Available select fields:
 */
class SecurityEventStatusTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityEventStatusType
     */

    /**
     * Select specific SecurityEventStatusType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
