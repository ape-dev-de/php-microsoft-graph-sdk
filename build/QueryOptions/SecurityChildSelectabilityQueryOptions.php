<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityChildSelectability resources
 *
 * Available select fields:
 */
class SecurityChildSelectabilityQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityChildSelectability
     */

    /**
     * Select specific SecurityChildSelectability properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
