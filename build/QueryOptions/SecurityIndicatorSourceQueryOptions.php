<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityIndicatorSource resources
 *
 * Available select fields:
 */
class SecurityIndicatorSourceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityIndicatorSource
     */

    /**
     * Select specific SecurityIndicatorSource properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
