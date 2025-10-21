<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BasicAuthentication resources
 *
 * Available select fields:
 */
class BasicAuthenticationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for BasicAuthentication
     */

    /**
     * Select specific BasicAuthentication properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
