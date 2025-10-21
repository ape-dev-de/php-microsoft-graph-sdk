<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityUnifiedGroupSource resources
 *
 * Available select fields:
 */
class SecurityUnifiedGroupSourceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityUnifiedGroupSource
     */

    /**
     * Select specific SecurityUnifiedGroupSource properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
