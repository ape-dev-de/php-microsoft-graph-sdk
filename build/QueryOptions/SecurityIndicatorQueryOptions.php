<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityIndicator resources
 *
 * Available select fields:
 */
class SecurityIndicatorQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityIndicator
     */

    /**
     * Select specific SecurityIndicator properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
