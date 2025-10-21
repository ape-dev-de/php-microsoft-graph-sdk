<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityUserSource resources
 *
 * Available select fields:
 */
class SecurityUserSourceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityUserSource
     */

    /**
     * Select specific SecurityUserSource properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
