<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityServiceSource resources
 *
 * Available select fields:
 */
class SecurityServiceSourceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityServiceSource
     */

    /**
     * Select specific SecurityServiceSource properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
