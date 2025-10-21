<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityResourceType resources
 *
 * Available select fields:
 */
class SecurityResourceTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityResourceType
     */

    /**
     * Select specific SecurityResourceType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
