<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecuritySubdomain resources
 *
 * Available select fields:
 */
class SecuritySubdomainQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecuritySubdomain
     */

    /**
     * Select specific SecuritySubdomain properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
